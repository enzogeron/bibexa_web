<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use Barryvdh\DomPDF\Facade as PDF;
use Session;

class PartnerController extends Controller
{

	public function index()
    {
        //$this->destroySessionLogin();
    	return view('pmb.register');
    }

    public function login(Request $request) {
        $this->validate($request, [
            'dni' => 'required',
            'password' => 'required'
        ]);

        $dni = $request->dni;
        $password = $request->password;

        $partner = $this->searchPartner($dni, $password);

        if(!isset($partner)) {
            return redirect()->route('socios')->with('error', 'No se encuentra registrado en el sistema.');
        } else {
            $this->setSessionLogin($dni, $password);
            return view('pmb.dashboard', compact('partner'));
        }
    }

    /*
        Importante: campos de la bd empr_creation, empr_modif, date_fin_blocage deben ser null por defecto
    */
    public function registerPartner(Request $request)
    {
    	$this->validate($request, [
    		'dni' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|same:confirm-email|email',
            'password' => 'required|same:confirm-password|min:4',
            'g-recaptcha-response' => 'required|captcha'
        ]);

    	$user = new Partner();
    	$user->empr_cb = $request->dni;
    	$user->empr_nom = $request->name;
    	$user->empr_prenom = $request->lastname;
    	$user->empr_mail = $request->email;
    	$user->empr_password = $request->password;
    	$user->empr_login = $request->dni; // el username para ingresar al catalogo es el DNI
    	$user->save();

    	return redirect()->route('socios')
			->with('success', 'Su cuenta ha sido creada ya puede ingresar al sistema.');
    }

    public function updatePartner(Request $request) {
        if($this->isLoginPartner()) {
            $this->validate($request, [
                'name' => 'required',
                'lastname' => 'required',
                'email' => 'required|email',
                'year' => 'required',
                'domicile' => 'required',
                'district' => 'required',
                'city' => 'required',
                'province' => 'required',
                'phone' => 'required',
                'telephone' => 'required'
            ]);
            $partner = Partner::find($this->getPartner()->id_empr);
            $partner->empr_prenom = $request->name;
            $partner->empr_nom = $request->lastname;
            $partner->empr_mail = $request->email;
            $partner->empr_year = $request->year;
            $partner->empr_adr1 = $request->domicile;
            $partner->empr_adr2 = $request->district;
            $partner->empr_ville = $request->city;
            $partner->empr_pays = $request->province;
            $partner->empr_tel1 = $request->phone;
            $partner->empr_tel2 = $request->telephone;
            $partner->save();
            return redirect()->route('editar_socio')->with('success', 'Se han actualizado los datos correctamente.');
        } else {
            return "Sin acceso";
        }
    }

    public function changePasswordPartner(Request $request) {
        if($this->isLoginPartner()) {
            $this->validate($request, [
                'current_password' => 'required',
                'new_password' => 'required|min:4|confirmed',
            ]);
            $partner = Partner::find($this->getPartner()->id_empr);
            // Change Password
            if($partner->empr_password == $request->current_password) {
                $partner->empr_password = $request->new_password;
                $partner->save();
                $this->destroySessionLogin();
                $this->setSessionLogin($partner->empr_cb, $partner->empr_password);
                return redirect()->route('editar_socio')->with('success', 'Se ha actualizado la contraseña correctamente.');
            } else {
                return redirect()->route('editar_password')->with('error', 'La contraseña ingresada es incorrecta');
            }
        } else {
            return "Sin acceso";
        }
    }

    public function pdf(Request $request) {
        if($this->isLoginPartner()) {
            $partner = $this->getPartner();
            $department = $this->getValueDepartments($request->departments);
            $career = $this->getValueCareers($request->careers);
            $year = $this->getValueTakingYear($request->year);
            $pdf = PDF::loadView('pmb.pdf.view', compact('partner', 'department', 'career', 'year'));
            return $pdf->stream('formulario_bibexa.pdf');
        } else {
            return "No tiene permisos";
        }
    }

    public function upload_photo(Request $request) {
        $this->validate($request, [
            'upload_photo' => 'required|image|mimes:jpg,jpeg,|max:400'
        ]);
        if($this->isLoginPartner()) {
            $filename = $request->dni . '.' . $request->upload_photo->getClientOriginalExtension();
            $request->upload_photo->move(public_path('bibexa_sistem/fotos-personales'), $filename);
            return redirect()->route('editar_socio')->with('success', 'Se ha subido la foto correctamente.');
        } else {
            return "Sin acceso";
        }  
    }

    public function exitPartner() {
        $this->destroySessionLogin();
        return redirect()->route('socios')
            ->with('success', 'Se ha cerrado su cuenta de usuario correctamente.'); 
    }

    public function viewFormPDF() {
        if($this->isLoginPartner()) {
            $partner = $this->getPartner();
            return view('pmb.formulario', compact('partner'));
        } else {
            return "Sin acceso";
        }
    }

    public function viewFormEditPartner() {
        if($this->isLoginPartner()) {
            $partner = $this->getPartner();
            return view('pmb.dashboard', compact('partner'));
        } else {
            return "Sin acceso";
        }
    }

    public function viewFormPasswordPartner() {
        if($this->isLoginPartner()) {
            $partner = $this->getPartner();
            return view('pmb.change_password', compact('partner'));
        } else {
            return "Sin acceso";
        }
    }

    private function setSessionLogin($dni, $password) {
        Session::put('dni', $dni);
        Session::put('password', $password);
    }

    private function destroySessionLogin() {
        Session::flush();
    }

    private function searchPartner($dni, $password) {
        return Partner::where('empr_cb', $dni)->where('empr_password', $password)->first();
    }

    private function getPartner() {
        return Partner::where('empr_cb', Session::get('dni'))->where('empr_password', Session::get('password'))->first();
    }

    private function isLoginPartner() {
        $dni = Session::get('dni');
        $password = Session::get('password');
        if(isset($dni) && isset($password)) {
            $partner = $this->searchPartner($dni, $password);
            if(isset($partner)) {
                return true;
            }
        } else {
            return false;
        }
    }

    private function getValueDepartments($value) {
        $departments = [
            '2' => 'Química',
            '3' => 'Informática',
            '4' => 'Física',
            '7' => 'Matemática',
            '9' => 'Externo'
        ];
        return $departments[$value];
    }

    private function getValueCareers($value) {
        $careers = [
            '1' => 'Lic. en Matemática',
            '2' => 'Profesorado en Matemática',
            '3' => 'Licenciatura en Análisis de Sistemas',
            '4' => 'Licenciatura en Química',
            '5' => 'Bromatología',
            '6' => 'Lic. en Bromatología',
            '7' => 'Profesorado en Química',
            '8' => 'Analista Químico',
            '9' => 'Lic. en Física',
            '10' => 'Lic. en Energías Renovables',
            '11' => 'Profesorado en Física',
            '12' => 'Tecnicatura Electrónica Universitaria',
            '13' => 'Tec. Univ. en Estadística',
            '14' => 'Tec. Univ. en Programación',
            '15' => 'Carrera externa a la Facultad de Ciencias Exactas',
            '16' => 'Tec. Univ. en Energia Solar'
        ];
        return $careers[$value];
    }

    private function getValueTakingYear($value) {
        $years = [
            '1' => '1er Año',
            '2' => '2do Año',
            '3' => '3er Año',
            '4' => '4to Año',
            '5' => '5to Año'
        ];
        return $years[$value];
    }

}
