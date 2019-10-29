<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
	protected $table = 'empr';

    protected $primaryKey = 'id_empr';

    public $timestamps = false;

	protected $fillable = [
        'id_empr',
        'empr_cb',
        'empr_nom', // Apellido
        'empr_prenom', // Nombres
        'empr_mail',
        'empr_adr1', // Domicilio
        'empr_adr2', // Barrio
        'empr_ville', // Ciudad
        'empr_pays', // Provincia
        'empr_tel1', // Celular
        'empr_tel2', // Telefono
        'empr_year', // Año de nacimiento
        'empr_password',
        'empr_codestat', // Departamentos
        'empr_login' // Nombre de usuario PMB
    ];

}
