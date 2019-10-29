<div class="buttons-social-media-share">
	<ul class="share-buttons">

		<li><a href="https://www.facebook.com/dialog/share?app_id=145634995501895&display=popup&href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2F&redirect_uri=https%3A%2F%2Fdevelopers.facebook.com%2Ftools%2Fexplorer" target="_blank"><img alt="Compartir en Facebook" src="{{ url('img/flat_web_icon_set/Facebook.png') }}"></a></li>

		<li><a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $description }}&via=bibexa&hashtags=bibexa" target="_blank" title="Tweet"><img alt="Tweet" src="{{ url('img/flat_web_icon_set/Twitter.png') }}"></a></li>

		<li><a href="https://plus.google.com/share?url={{ request()->fullUrl() }}" target="_blank" title="Compartir en Google+"><img alt="Compartir en Google+" src="{{ url('img/flat_web_icon_set/Google-plus.png') }}"></a></li>

	</ul>
</div>