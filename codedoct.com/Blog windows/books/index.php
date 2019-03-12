<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<style>
	ul#book{
		padding: 0 0 0 5px;
		margin: 0;
	}
	ul#book ul{
		padding: 0 5px 0 2.5em;
	}
	.display-hide{
		display: none;
	}
	.font-ul{
		font-size: 20px
	}
	.font-ul2{
		font-size: 15px
	}
	li.list-style-none{
		list-style-type: none;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
	function laravelShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#laravel').show(200);
		$(button).hide();
		$(button).closest('#book').find('.laravelHide').show();
	}
	function laravelHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#laravel').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.laravelShow').show();
	}

	function railsShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#rails').show(200);
		$(button).hide();
		$(button).closest('#book').find('.railsHide').show();
	}
	function railsHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#rails').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.railsShow').show();
	}

	function windowsShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#windows').show(200);
		$(button).hide();
		$(button).closest('#book').find('.windowsHide').show();
	}
	function windowsHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#windows').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.windowsShow').show();
	}

	function howShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#how').show(200);
		$(button).hide();
		$(button).closest('#book').find('.howHide').show();
	}
	function howHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#how').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.howShow').show();
	}

	function syntaxShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#syntax').show(200);
		$(button).hide();
		$(button).closest('#book').find('.syntaxHide').show();
	}
	function syntaxHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#syntax').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.syntaxShow').show();
	}

	function whatShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#what').show(200);
		$(button).hide();
		$(button).closest('#book').find('.whatHide').show();
	}
	function whatHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#what').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.whatShow').show();
	}

	function phpShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#php').show(200);
		$(button).hide();
		$(button).closest('#book').find('.phpHide').show();
	}
	function phpHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#php').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.phpShow').show();
	}

	function VBShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#vb').show(200);
		$(button).hide();
		$(button).closest('#book').find('.VBHide').show();
	}
	function VBHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#vb').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.VBShow').show();
	}

	function RNShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#rn').show(200);
		$(button).hide();
		$(button).closest('#book').find('.RNHide').show();
	}
	function RNHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#rn').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.RNShow').show();
	}

	function downloadShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#download').show(200);
		$(button).hide();
		$(button).closest('#book').find('.downloadHide').show();
	}
	function downloadHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#download').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.downloadShow').show();
	}

	function reviewShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#review').show(200);
		$(button).hide();
		$(button).closest('#book').find('.reviewHide').show();
	}
	function reviewHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#review').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.reviewShow').show();
	}

	function engineShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#engine').show(200);
		$(button).hide();
		$(button).closest('#book').find('.engineHide').show();
	}
	function engineHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#engine').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.engineShow').show();
	}

	function phalconShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#phalcon').show(200);
		$(button).hide();
		$(button).closest('#book').find('.phalconHide').show();
	}
	function phalconHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#phalcon').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.phalconShow').show();
	}

	function dockerShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#docker').show(200);
		$(button).hide();
		$(button).closest('#book').find('.dockerHide').show();
	}
	function dockerHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#docker').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.dockerShow').show();
	}
// start chapter laravel
	function chapter1Show(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1Hide').show();
	}
	function chapter1Hide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1Show').show();
	}

	function chapter2Show(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2Hide').show();
	}
	function chapter2Hide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2Show').show();
	}

	function chapter3Show(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter3').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter3Hide').show();
	}
	function chapter3Hide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter3').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter3Show').show();
	}

	function chapter4Show(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter4').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter4Hide').show();
	}
	function chapter4Hide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter4').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter4Show').show();
	}

	function chapter5Show(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter5').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter5Hide').show();
	}
	function chapter5Hide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter5').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter5Show').show();
	}
	function chapter6Show(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter6').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter6Hide').show();
	}
	function chapter6Hide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter6').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter6Show').show();
	}
	function chapter7Show(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter7').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter7Hide').show();
	}
	function chapter7Hide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter7').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter7Show').show();
	}
// end chapter laravel
// start chapter how
	function chapter1howShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1how').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1howHide').show();
	}
	function chapter1howHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1how').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1howShow').show();
	}

	function chapter2howShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2how').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2howHide').show();
	}
	function chapter2howHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2how').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2howShow').show();
	}
// end chapter how
// start chapter syntax
	function chapter1syntaxShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1syntax').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1syntaxHide').show();
	}
	function chapter1syntaxHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1syntax').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1syntaxShow').show();
	}

	function chapter2syntaxShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2syntax').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2syntaxHide').show();
	}
	function chapter2syntaxHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2syntax').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2syntaxShow').show();
	}
// end chapter syntax 
// start chapter php
	function chapter1phpShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1php').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1phpHide').show();
	}
	function chapter1phpHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1php').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1phpShow').show();
	}

	function chapter2phpShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2php').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2phpHide').show();
	}
	function chapter2phpHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2php').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2phpShow').show();
	}
// end chapter php 
// start chapter engine
	function chapter1engineShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1engine').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1engineHide').show();
	}
	function chapter1engineHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1engine').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1engineShow').show();
	}

	function chapter2engineShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2engine').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2engineHide').show();
	}
	function chapter2engineHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2engine').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2engineShow').show();
	}
// end chapter engine
// start chapter phalcon
	function chapter1phalconShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1phalcon').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1phalconHide').show();
	}
	function chapter1phalconHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1phalcon').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1phalconShow').show();
	}

	function chapter2phalconShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2phalcon').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2phalconHide').show();
	}
	function chapter2phalconHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2phalcon').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2phalconShow').show();
	}
// end chapter phalcon
// start chapter vb
	function chapter1vbShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1vb').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1vbHide').show();
	}
	function chapter1vbHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1vb').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1vbShow').show();
	}

	function chapter2vbShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2vb').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2vbHide').show();
	}
	function chapter2vbHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2vb').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2vbShow').show();
	}
// end chapter vb
// start chapter rails
	function chapter1railsShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1rails').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1railsHide').show();
	}
	function chapter1railsHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter1rails').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter1railsShow').show();
	}

	function chapter2railsShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2rails').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2railsHide').show();
	}
	function chapter2railsHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter2rails').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter2railsShow').show();
	}

	function chapter3railsShow(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter3rails').show(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter3railsHide').show();
	}
	function chapter3railsHide(button, event)
	{
		var e = event || window.event;

		e.preventDefault();

		$(button).closest('#book').find('#chapter3rails').hide(200);
		$(button).hide();
		$(button).closest('#book').find('.chapter3railsShow').show();
	}
// end chapter rails
</script>
<ul id="book">
	<li class="list-style-none">
		<a href="#" onclick="laravelHide(this,event)" class="display-hide laravelHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> Laravel</a>
		<a href="#" onclick="laravelShow(this,event)" class="laravelShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> Laravel</a>
		<ul id="laravel" class="display-hide">
			<li class="list-style-none"><a href="#" onclick="chapter1Hide(this,event)" class="display-hide chapter1Hide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 1</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter1Show(this,event)" class="chapter1Show font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 1</a></li>
			<ul id="chapter1" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/04/laravel-install-laravel-pada-ubuntu-1404.html" target="_blank">Install laravel 4.2 pada ubuntu 14.04</a></li>
				<li><a href="http://www.codedoct.com/2016/04/laravel-install-laravel-52-pada-ubuntu.html" target="_blank">Install laravel 5.2 pada Ubuntu</a></li>
				<li><a href="http://www.codedoct.com/2016/04/laravel-install-laravel-42-pada-windows.html" target="_blank">Install laravel 4.2 pada windows</a></li>
				<li><a href="http://www.codedoct.com/2016/04/laravel-menghilangkan-url-public-pada.html" target="_blank">Menghilangkan URL /public pada laravel 4.2</a></li>
				<li><a href="http://www.codedoct.com/2016/04/laravel-membuat-route-controller-view.html" target="_blank">Membuat route-controller-view pada laravel 4.2</a></li>
				<li><a href="http://www.codedoct.com/2016/05/laravel-belajar-membuat-css-laravel.html" target="_blank">Belajar membuat css laravel dengan sass pada windows</a></li>
				<li><a href="http://www.codedoct.com/2016/05/laravel-setting-database-connection.html" target="_blank">Setting database connection laravel 4.2</a></li>
			</ul>
			<li class="list-style-none"><a href="#" onclick="chapter2Hide(this,event)" class="display-hide chapter2Hide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 2</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter2Show(this,event)" class="chapter2Show font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 2</a></li>
			<ul id="chapter2" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/05/laravel-database-migrations-dan-seeds.html" target="_blank">Database migrations dan seeds pada laravel 4.2</a></li>
				<li><a href="http://www.codedoct.com/2016/05/laravel-membuat-menu-dropdown-dengan.html" target="_blank">Membuat menu dropdown dengan style</a></li>
				<li><a href="http://www.codedoct.com/2016/05/laravel-crud-read-pada-laravel-42.html" target="_blank">CRUD (read) pada laravel 4.2</a></li>
				<li><a href="http://www.codedoct.com/2016/05/laravel-crud-create-pada-laravel-42.html" target="_blank">CRUD (create) pada laravel 4.2</a></li>
				<li><a href="http://www.codedoct.com/2016/05/laravel-crud-update-pada-laravel-42.html" target="_blank">CRUD (update) pada laravel 4.2</a></li>
				<li><a href="http://www.codedoct.com/2016/06/laravel-crud-delete-pada-laravel-42.html" target="_blank">CRUD (delete) pada laravel 4.2</a></li>
				<li><a href="http://www.codedoct.com/2016/06/laravel-membuat-menu-dropdown-dengan.html" target="_blank">Membuat menu dropdown dengan script</a></li>
			</ul>
			<li class="list-style-none"><a href="#" onclick="chapter3Hide(this,event)" class="display-hide chapter3Hide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 3</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter3Show(this,event)" class="chapter3Show font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 3</a></li>
			<ul id="chapter3" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/07/laravel-membuat-page-not-found.html" target="_blank">Membuat page not found</a></li>
				<li><a href="http://www.codedoct.com/2016/07/laravel-membuat-file-constant.html" target="_blank">Membuat file Constant</a></li>
				<li><a href="http://www.codedoct.com/2016/07/laravel-composser-classmap.html" target="_blank">Composer classmap</a></li>
				<li><a href="http://www.codedoct.com/2016/07/laravel-grouping-route-1.html" target="_blank">Grouping Route 1</a></li>
				<li><a href="http://www.codedoct.com/2016/08/laravel-grouping-route-2.html" target="_blank">Grouping Route 2</a></li>
				<li><a href="http://www.codedoct.com/2016/08/laravel-unit-test.html" target="_blank">Unit Test</a></li>
				<li><a href="http://www.codedoct.com/2016/08/laravel-membuat-halaman-buku.html" target="_blank">Membuat halaman buku</a></li>
			</ul>
			<li class="list-style-none"><a href="#" onclick="chapter4Hide(this,event)" class="display-hide chapter4Hide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 4</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter4Show(this,event)" class="chapter4Show font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 4</a></li>
			<ul id="chapter4" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/08/laravel-bermain-dengan-java-script.html" target="_blank">Tutorial Java Script (Hide and Show Dropdown)</a></li>
				<li><a href="http://www.codedoct.com/2016/08/laravel-bermain-dengan-java-script-2.html" target="_blank">Tutorial Java Script 2 (Hide and Show Class)</a></li>
				<li><a href="http://www.codedoct.com/2016/09/laravel-bermain-dengan-java-script-3.html" target="_blank">Tutorial Java Script 3 (Follow and Unfollow Toggle Button)</a></li>
				<li><a href="http://www.codedoct.com/2016/09/laravel-bermain-dengan-java-script-4.html" target="_blank">Tutorial Java Script 4 (Disabled and Enabled Toggle Button)</a></li>
				<li><a href="http://www.codedoct.com/2016/09/laravel-bermain-dengan-java-script-5.html" target="_blank">Tutorial Java Script 5 (Hide and Show Modal)</a></li>
				<li><a href="http://www.codedoct.com/2016/09/laravel-tutorial-java-script-6-ajax.html" target="_blank">Tutorial Java Script 6 (Ajax)</a></li>
				<li><a href="http://www.codedoct.com/2016/09/laravel-bermain-dengan-java-script-7.html" target="_blank">Tutorial Java Script 7 (Expert Java Script)</a></li>
			</ul>
			<li class="list-style-none"><a href="#" onclick="chapter5Hide(this,event)" class="display-hide chapter5Hide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 5</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter5Show(this,event)" class="chapter5Show font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 5</a></li>
			<ul id="chapter5" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/09/laravel-belajar-bootstrap.html" target="_blank">Belajar bootstrap</a></li>
				<li><a href="http://www.codedoct.com/2016/09/laravel-pagination.html" target="_blank">Pagination</a></li>
				<li><a href="http://www.codedoct.com/2016/10/laravel-localization-multilanguage.html" target="_blank">Localization</a></li>
				<li><a href="http://www.codedoct.com/2017/01/laravel-authentification-preparing.html" target="_blank">Authentification (preparing)</a></li>
				<li><a href="http://www.codedoct.com/2017/01/laravel-authentification-login.html" target="_blank">Authentification (login)</a></li>
				<li><a href="http://www.codedoct.com/2017/01/laravel-authentification-logout.html" target="_blank">Authentification (logout)</a></li>
				<li><a href="http://www.codedoct.com/2017/02/laravel-authentification-register.html" target="_blank">Authentification (register)</a></li>
			</ul>
			<li class="list-style-none"><a href="#" onclick="chapter6Hide(this,event)" class="display-hide chapter6Hide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 6</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter6Show(this,event)" class="chapter6Show font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 6</a></li>
			<ul id="chapter6" class="display-hide">
				<li><a href="http://www.codedoct.com/2017/02/laravel-relasi-tabel-pada-database.html" target="_blank">Relasi tabel pada database</a></li>
				<li><a href="http://www.codedoct.com/2017/02/laravel-modeling-has-many.html" target="_blank">Relasi tabel pada model (has many)</a></li>
				<li><a href="http://www.codedoct.com/2017/02/laravel-relation-pada-model-belongsto.html" target="_blank">Relasi tabel pada model (belongs to)</a></li>
				<li><a href="http://www.codedoct.com/2017/03/laravel-relation-pada-model-hasone.html" target="_blank">Relasi tabel pada model (has one)</a></li>
				<li><a href="http://www.codedoct.com/2017/03/laravel-relation-pada-model.html" target="_blank">Relasi tabel pada model (belongs to many)</a></li>
				<li><a href="http://www.codedoct.com/2017/07/laravel-restful-project.html" target="_blank">RESTful project (API get data)</a></li>
				<li><a href="http://www.codedoct.com/2017/07/laravel-restful-project-api-post.html" target="_blank">RESTful project (API store data)</a></li>
			</ul>
			<li class="list-style-none"><a href="#" onclick="chapter7Hide(this,event)" class="display-hide chapter7Hide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 7</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter7Show(this,event)" class="chapter7Show font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 7</a></li>
			<ul id="chapter7" class="display-hide">
				<li><a href="http://www.codedoct.com/2017/09/laravel-restful-project-api-show-data.html" target="_blank">RESTful project (API show data)</a></li>
				<li><a href="http://www.codedoct.com/2017/09/laravel-restful-project-api-update-data.html" target="_blank">RESTful project (API update data)</a></li>
				<li><a href="http://www.codedoct.com/2017/09/laravel-restful-project-api-delete-data.html" target="_blank">RESTful project (API delete data)</a></li>
			</ul>
		</ul>
	</li>

	<li class="list-style-none">
    	<a href="#" onclick="railsHide(this,event)" class="display-hide railsHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> Rails</a>
		<a href="#" onclick="railsShow(this,event)" class="railsShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> Rails</a>
	    <ul id="rails" class="display-hide">
			<li class="list-style-none"><a href="#" onclick="chapter1railsHide(this,event)" class="display-hide chapter1railsHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 1</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter1railsShow(this,event)" class="chapter1railsShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 1</a></li>
			<ul id="chapter1rails" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/04/how-to-install-ruby-di-windows.html" target="_blank">Install Ruby on Windows</a></li>
				<li><a href="http://www.codedoct.com/2016/07/how-to-install-ruby-on-ubuntu.html" target="_blank">Install Ruby on Ubuntu</a></li>
				<li><a href="http://www.codedoct.com/2016/07/how-to-upgrade-ruby-dengan-rbenv.html" target="_blank">Upgrade Ruby With Rbenv</a></li>
				<li><a href="http://www.codedoct.com/2016/07/how-to-install-rails-on-ubuntu.html" target="_blank">Install Rails on Ubuntu</a></li>
				<li><a href="http://www.codedoct.com/2016/09/ruby-create-project.html" target="_blank">Create Project</a></li>
				<li><a href="http://www.codedoct.com/2016/11/ruby-routes-controller-view.html" target="_blank">Routes, Controller, View</a></li>
				<li><a href="http://www.codedoct.com/2016/11/rails-make-uilanding-page-home-with.html" target="_blank">Make Home Page</a></li>
			</ul>
			<li class="list-style-none"><a href="#" onclick="chapter2railsHide(this,event)" class="display-hide chapter2railsHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 2</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter2railsShow(this,event)" class="chapter2railsShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 2</a></li>
			<ul id="chapter2rails" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/11/rails-create-table-migration-and-seeder.html" target="_blank">Migration and Seeder</a></li>
				<li><a href="http://www.codedoct.com/2016/11/rails-crudread-database.html" target="_blank">CRUD (Read) database</a></li>
				<li><a href="http://www.codedoct.com/2016/11/rails-crudcreate-database.html" target="_blank">CRUD (Create) database</a></li>
				<li><a href="http://www.codedoct.com/2016/11/rails-crudupdate-database.html" target="_blank">CRUD (Update) database</a></li>
				<li><a href="http://www.codedoct.com/2016/11/rails-crud-delete-database.html" target="_blank">CRUD (Delete) database</a></li>
				<li><a href="http://www.codedoct.com/2016/12/rails-authentification-prepare-database.html" target="_blank">Authentification (Prepare Database)</a></li>
				<li><a href="http://www.codedoct.com/2016/12/rails-authentification-login.html" target="_blank">Authentification (Login)</a></li>
			</ul>
			<li class="list-style-none"><a href="#" onclick="chapter3railsHide(this,event)" class="display-hide chapter3railsHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 3</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter3railsShow(this,event)" class="chapter3railsShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 3</a></li>
			<ul id="chapter3rails" class="display-hide">
				<li><a href="http://www.codedoct.com/2017/01/rails-authentification-logout.html" target="_blank">Authentification (logout)</a></li>
			</ul>
	    </ul>
  	</li>

	<li class="list-style-none">
    	<a href="#" onclick="windowsHide(this,event)" class="display-hide windowsHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> Windows</a>
		<a href="#" onclick="windowsShow(this,event)" class="windowsShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> Windows</a>
	    <ul id="windows" class="display-hide">
	      <li><a href="http://www.codedoct.com/2016/05/windows-mengganti-nama-komputer.html" target="_blank">Mengganti Nama Komputer</a></li>
	      <li><a href="http://www.codedoct.com/2016/04/windows-menambah-path-pada-windows.html" target="_blank">Path Global Pada Windows</a></li>
	    </ul>
  	</li>

  	<li class="list-style-none">
    	<a href="#" onclick="howHide(this,event)" class="display-hide howHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> How to</a>
		<a href="#" onclick="howShow(this,event)" class="howShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> How to</a>
	    <ul id="how" class="display-hide">
	    	<li class="list-style-none"><a href="#" onclick="chapter1howHide(this,event)" class="display-hide chapter1howHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> How 1</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter1howShow(this,event)" class="chapter1howShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> How 1</a></li>
			<ul id="chapter1how" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/03/instalasi-php-di-ubuntu.html" target="_blank">Install PHP Diubuntu</a></li>
				<li><a href="http://www.codedoct.com/2016/04/how-to-install-sass-pada-windows.html" target="_blank">Install Sass pada Windows</a></li>
				<li><a href="http://www.codedoct.com/2016/07/how-to-use-github.html" target="_blank">How To Use Github</a></li>
				<li><a href="http://www.codedoct.com/2016/07/how-to-add-new-collaboration-on-github.html" target="_blank">Add New Collaboration on Github</a></li>
				<li><a href="http://www.codedoct.com/2016/08/how-to-change-url-phpmyadmin.html" target="_blank">Change URL phpMyAdmin</a></li>
				<li><a href="http://www.codedoct.com/2016/08/how-to-setting-idrsa.html" target="_blank">Setting Id_rsa</a></li>
				<li><a href="http://www.codedoct.com/2016/08/how-to-import-big-file-databasesql.html" target="_blank">Import Big File SQL</a></li>
			</ul>
	      	<li class="list-style-none"><a href="#" onclick="chapter2howHide(this,event)" class="display-hide chapter2howHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> How 2</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter2howShow(this,event)" class="chapter2howShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> How 2</a></li>
			<ul id="chapter2how" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/10/how-to-use-charles-proxy.html" target="_blank">Charles Proxy(WebBrowser)</a></li>
				<li><a href="http://www.codedoct.com/2016/10/how-to-use-charles-proxy-mobile-app.html" target="_blank">Charles Proxy(MobileApp)</a></li>
				<li><a href="http://www.codedoct.com/2016/11/how-to-install-lamp-server-di-ubuntu.html" target="_blank">Install LAMP server on Ubuntu 16.04</a></li>
				<li><a href="http://www.codedoct.com/2016/11/how-to-fix-error-on-github.html" target="_blank">Error on GithubClone(permission denied)</a></li>
				<li><a href="http://www.codedoct.com/2017/01/laravel-clone-project-from-github.html" target="_blank">Clone project Laravel from github (windows)</a></li>
				<li><a href="http://www.codedoct.com/2017/04/how-to-switch-php-version-on-ubuntu.html" target="_blank">Switch php version on ubuntu</a></li>
				<li><a href="http://www.codedoct.com/2017/07/how-to-setup-project-laravel-on-ubuntu.html" target="_blank">Setup project laravel on ubuntu server</a></li>
			</ul>
	    </ul>
  	</li>

  	<li class="list-style-none">
    	<a href="#" onclick="syntaxHide(this,event)" class="display-hide syntaxHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> Syntax</a>
		<a href="#" onclick="syntaxShow(this,event)" class="syntaxShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> Syntax</a>
	    <ul id="syntax" class="display-hide">
	    	<li class="list-style-none"><a href="#" onclick="chapter1syntaxHide(this,event)" class="display-hide chapter1syntaxHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Syntax 1</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter1syntaxShow(this,event)" class="chapter1syntaxShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Syntax 1</a></li>
			<ul id="chapter1syntax" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/04/laravel-function-laravel.html" target="_blank">Sintax Laravel</a></li>
				<li><a href="http://www.codedoct.com/2016/04/github-function-github.html" target="_blank">Sintax Github</a></li>
				<li><a href="http://www.codedoct.com/2016/07/syntax-syntax-ubuntu.html" target="_blank">Sintax Ubuntu</a></li>
				<li><a href="http://www.codedoct.com/2016/08/sintax-mysql.html" target="_blank">Sintax MySQL</a></li>
				<li><a href="http://www.codedoct.com/2016/10/syntax-syntax-ruby.html" target="_blank">Sintax Ruby</a></li>
				<li><a href="http://www.codedoct.com/2016/10/syntax-syntax-php.html" target="_blank">Sintax PHP</a></li>
				<li><a href="http://www.codedoct.com/2016/10/syntax-syntax-sass.html" target="_blank">Sintax SASS</a></li>
			</ul>
			<li class="list-style-none"><a href="#" onclick="chapter2syntaxHide(this,event)" class="display-hide chapter2syntaxHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Syntax 2</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter2syntaxShow(this,event)" class="chapter2syntaxShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Syntax 2</a></li>
			<ul id="chapter2syntax" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/11/syntax-syntax-rails.html" target="_blank">Sintax Rails</a></li>
				<li><a href="http://www.codedoct.com/2017/09/syntax-syntax-elasticsearch.html" target="_blank">Sintax Elasticsearch</a></li>
			</ul>
	    </ul>
  	</li>

  	<li class="list-style-none">
    	<a href="#" onclick="whatHide(this,event)" class="display-hide whatHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> What is</a>
		<a href="#" onclick="whatShow(this,event)" class="whatShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> What is</a>
	    <ul id="what" class="display-hide">
	      <li><a href="http://www.codedoct.com/2016/04/file-permissions.html" target="_blank">File Permissions</a></li>
	      <li><a href="http://www.codedoct.com/2016/07/how-to-crontab.html" target="_blank">Crontab</a></li>
	      <li><a href="http://www.codedoct.com/2016/09/what-is-array.html" target="_blank">Array</a></li>
	    </ul>
  	</li>

  	<li class="list-style-none">
    	<a href="#" onclick="phpHide(this,event)" class="display-hide phpHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> PHP</a>
		<a href="#" onclick="phpShow(this,event)" class="phpShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> PHP</a>
	    <ul id="php" class="display-hide">
	    	<li class="list-style-none"><a href="#" onclick="chapter1phpHide(this,event)" class="display-hide chapter1phpHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 1</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter1phpShow(this,event)" class="chapter1phpShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 1</a></li>
			<ul id="chapter1php" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/03/website-sederhana-untuk-pemula_29.html" target="_blank">Mengganti Domain Localhost Ubuntu</a></li>
				<li><a href="http://www.codedoct.com/2009/08/blog-post.html" target="_blank">Membuat Project Sederhana</a></li>
				<li><a href="http://www.codedoct.com/2016/03/website-sederhana-untuk-pemula.html" target="_blank">Belajar Css Sederhana (Header)</a></li>
				<li><a href="http://www.codedoct.com/2016/03/website-sederhana-untuk-pemula_86.html" target="_blank">Debug POST (Submit)</a></li>
				<li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula.html" target="_blank">Membuat Custom Framework</a></li>
				<li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_14.html" target="_blank">Membuat Koneksi Database</a></li>
				<li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_12.html" target="_blank">(CRUD) Read non Framework</a></li>
			</ul>
			<li class="list-style-none"><a href="#" onclick="chapter2phpHide(this,event)" class="display-hide chapter2phpHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 2</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter2phpShow(this,event)" class="chapter2phpShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 2</a></li>
			<ul id="chapter2php" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_18.html" target="_blank">(CRUD) Create non Framework</a></li>
				<li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_19.html" target="_blank">(CRUD) Update non Framework</a></li>
				<li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_25.html" target="_blank">(CRUD) Delete non Framework</a></li>
				<li><a href="http://www.codedoct.com/2017/04/website-sederhana-untuk-pemula.html" target="_blank">Migration database</a></li>
		    </ul>
	    </ul>
  	</li>

  	<li class="list-style-none">
    	<a href="#" onclick="VBHide(this,event)" class="display-hide VBHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> Visual Basic</a>
		<a href="#" onclick="VBShow(this,event)" class="VBShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> Visual Basic</a>
	    <ul id="vb" class="display-hide">
	    	<li class="list-style-none"><a href="#" onclick="chapter1vbHide(this,event)" class="display-hide chapter1vbHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 1</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter1vbShow(this,event)" class="chapter1vbShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 1</a></li>
			<ul id="chapter1vb" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/09/visual-basic-introduction.html" target="_blank">Introduction</a></li>
				<li><a href="http://www.codedoct.com/2016/09/visual-basic-operation-file-txt.html" target="_blank">Operation File (.txt)</a></li>
				<li><a href="http://www.codedoct.com/2016/10/visual-studio-koneksi-database.html" target="_blank">Database Connection</a></li>
				<li><a href="http://www.codedoct.com/2016/10/visual-studio-membuat-sistem-crud-create.html" target="_blank">Create and Read (CRUD)</a></li>
				<li><a href="http://www.codedoct.com/2016/10/visual-studio-membuat-sistem-crud.html" target="_blank">Update and Delete (CRUD)</a></li>
				<li><a href="http://www.codedoct.com/2016/12/visual-basic-image-processing-read-image.html" target="_blank">Image Processing (read image)</a></li>
				<li><a href="http://www.codedoct.com/2016/12/visual-basic-image-processing-2-make.html" target="_blank">Image Processing 2 (make image from RGB)</a></li>
			</ul>
			<li class="list-style-none"><a href="#" onclick="chapter2vbHide(this,event)" class="display-hide chapter2vbHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Chapter 2</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter2vbShow(this,event)" class="chapter2vbShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Chapter 2</a></li>
			<ul id="chapter2vb" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/12/visual-basic-image-processing-3-cropping.html" target="_blank">Image Processing 3 (cropping)</a></li>
				<li><a href="http://www.codedoct.com/2016/12/visual-basic-image-processing-4.html" target="_blank">Greyscale</a></li>
				<li><a href="http://www.codedoct.com/2016/12/visual-basic-image-processing-5-edge.html" target="_blank">Edge Detection</a></li>
				<li><a href="http://www.codedoct.com/2016/12/visual-basic-image-processing-6-convert.html" target="_blank">Convert</a></li>
			</ul>
	    </ul>
  	</li>

  	<li class="list-style-none">
    	<a href="#" onclick="RNHide(this,event)" class="display-hide RNHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> React Native</a>
		<a href="#" onclick="RNShow(this,event)" class="RNShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> React Native</a>
	    <ul id="rn" class="display-hide">
	      <li><a href="http://www.codedoct.com/2016/03/install-react-native-dengan-brew-pada.html" target="_blank">Install React-Native dengan Brew Pada Ubuntu</a></li>
	      <li><a href="http://www.codedoct.com/2016/09/react-native-install-react-native-pada.html" target="_blank">Install React Native pada Windows</a></li>
	      <li><a href="http://www.codedoct.com/2016/09/react-native-create-project-react-native.html" target="_blank">Create project React Native</a></li>
	    </ul>
  	</li>

  	<li class="list-style-none">
    	<a href="#" onclick="downloadHide(this,event)" class="display-hide downloadHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> Download</a>
		<a href="#" onclick="downloadShow(this,event)" class="downloadShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> Download</a>
	    <ul id="download" class="display-hide">
	      <li><a href="http://www.codedoct.com/2016/05/download-instalasi-komputer-baru-windows.html" target="_blank">Install Komputer Baru (windows)</a></li>
	      <li><a href="http://www.codedoct.com/2016/07/download-instalasi-komputer-baru-windows.html" target="_blank">Install Komputer Baru (ubuntu)</a></li>
	      <li><a href="http://www.codedoct.com/2016/05/download-game.html" target="_blank">Install Game</a></li>
	    </ul>
  	</li>

  	<li class="list-style-none">
    	<a href="#" onclick="reviewHide(this,event)" class="display-hide reviewHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> Review</a>
		<a href="#" onclick="reviewShow(this,event)" class="reviewShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> Review</a>
	    <ul id="review" class="display-hide">
	      <!-- <li><a href="http://www.codedoct.com/2016/05/review-website-foodenakcom.html" target="_blank">Website Foodenak.com</a></li> -->
	      <li><a href="http://www.codedoct.com/2016/10/custom-server-vs-serverpilot.html" target="_blank">Custom server VS serverpilot</a></li>
	    </ul>
  	</li>

  	<li class="list-style-none">
    	<a href="#" onclick="engineHide(this,event)" class="display-hide engineHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> Engine</a>
		<a href="#" onclick="engineShow(this,event)" class="engineShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> Engine</a>
	    <ul id="engine" class="display-hide">
	    	<li class="list-style-none"><a href="#" onclick="chapter1engineHide(this,event)" class="display-hide chapter1engineHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Engine 1</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter1engineShow(this,event)" class="chapter1engineShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Engine 1</a></li>
			<ul id="chapter1engine" class="display-hide">
				<li><a href="http://www.codedoct.com/2016/06/php-parse-code-html.html" target="_blank">Engine Parse Code Html</a></li>
				<li><a href="http://www.codedoct.com/2016/07/engine-crontab-backup-database.html" target="_blank">Engine Backup Database</a></li>
				<li><a href="http://www.codedoct.com/2016/08/engine-move-database-filed-to-other.html" target="_blank">Engine Move Database</a></li>
				<li><a href="http://www.codedoct.com/2016/08/engine-create-txt-file-from-php.html" target="_blank">Engine Create Txt File</a></li>
				<li><a href="http://www.codedoct.com/2016/10/engine-pagination-with-jquery.html" target="_blank">Engine Pagination</a></li>
				<li><a href="http://www.codedoct.com/2016/10/engine-create-graph-or-chart.html" target="_blank">Engine Create Graph or Chart</a></li>
				<li><a href="http://www.codedoct.com/2017/01/engine-node-parsing-html-to-get-data.html" target="_blank">Engine Parsing HTML</a></li>
			</ul>
			<li class="list-style-none"><a class="display-hide chapter2engineHide font-ul2" href="https://www.blogger.com/blogger.g?blogID=1690833678185910338#" onclick="chapter2engineHide(this,event)"><i aria-hidden="true" class="fa fa-caret-down"></i> Engine 2</a></li>
			<li class="list-style-none"><a class="chapter2engineShow font-ul2" href="https://www.blogger.com/blogger.g?blogID=1690833678185910338#" onclick="chapter2engineShow(this,event)"><i aria-hidden="true" class="fa fa-caret-right"></i> Engine 2</a></li>
			<ul id="chapter2engine" class="display-hide">
				<li><a href="http://www.codedoct.com/2017/01/engine-php-login-instagram-api.html" target="_blank">Engine Login Instagram API</a></li>
				<li><a href="http://www.codedoct.com/2017/02/engine-php-upload-image-native-code.html" target="_blank">Engine Upload Image(native code)</a></li>
				<li><a href="http://www.codedoct.com/2017/02/engine-php-upload-image-beauty-code.html" target="_blank">Engine Upload Image(beauty code)</a></li>
				<li><a href="http://www.codedoct.com/2017/03/engine-php-upload-and-download-file.html" target="_blank">Engine Upload dan Download File</a></li>
				<li><a href="http://www.codedoct.com/2017/06/engine-ubuntu-clone-and-pull-github.html" target="_blank">Engine Clone and Pull Github Repository</a></li>
			</ul>
	    </ul>
  	</li>

  	<li class="list-style-none">
    	<a href="#" onclick="phalconHide(this,event)" class="display-hide phalconHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> Phalcon</a>
		<a href="#" onclick="phalconShow(this,event)" class="phalconShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> Phalcon</a>
	    <ul id="phalcon" class="display-hide">
	    	<li class="list-style-none"><a href="#" onclick="chapter1phalconHide(this,event)" class="display-hide chapter1phalconHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Phalcon 1</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter1phalconShow(this,event)" class="chapter1phalconShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Phalcon 1</a></li>
			<ul id="chapter1phalcon" class="display-hide">
				<li><a href="http://www.codedoct.com/2017/04/how-to-install-phalcon.html" target="_blank">Install Phalcon</a></li>
			    <li><a href="http://www.codedoct.com/2017/06/phalcon-create-project-ubuntu.html" target="_blank">Create Project (ubuntu)</a></li>
			    <li><a href="http://www.codedoct.com/2017/06/phalcon-routes-controller-view.html" target="_blank">Routes, Controller, View</a></li>
			    <li><a href="http://www.codedoct.com/2017/07/phalcon-restruktur-volt.html" target="_blank">Restruktur Volt</a></li>
			    <li><a href="http://www.codedoct.com/2017/08/phalcon-koneksi-database-and-add-vendor.html" target="_blank">Koneksi Database dan Add Vendor</a></li>
				<li><a href="http://www.codedoct.com/2017/08/phalcon-add-env-and-function-dd.html" target="_blank">Add ENV and Function dd</a></li>
				<li><a href="http://www.codedoct.com/2017/08/phalcon-introduction-syntax.html" target="_blank">Introduction Syntax</a></li>
			</ul>
			<li class="list-style-none"><a href="#" onclick="chapter2phalconHide(this,event)" class="display-hide chapter2phalconHide font-ul2"><i class="fa fa-caret-down" aria-hidden="true"></i> Phalcon 2</a></li>
			<li class="list-style-none"><a href="#" onclick="chapter2phalconShow(this,event)" class="chapter2phalconShow font-ul2"><i class="fa fa-caret-right" aria-hidden="true"></i> Phalcon 2</a></li>
			<ul id="chapter2phalcon" class="display-hide">
				<li><a href="http://www.codedoct.com/2017/08/phalcon-migration-and-seed.html" target="_blank">Migration and Seed</a></li>
			    <li><a href="http://www.codedoct.com/2017/09/back-to-phalcon-pada-tutorial-kemarin.html" target="_blank">CRUD (Read)</a></li>
			    <li><a href="http://www.codedoct.com/2017/09/phalcon-crud-create.html" target="_blank">CRUD (Create)</a></li>
			    <li><a href="http://www.codedoct.com/2017/09/phalcon-crud-update.html" target="_blank">CRUD (Update)</a></li>
			    <li><a href="http://www.codedoct.com/2017/09/phalcon-crud-delete.html" target="_blank">CRUD (Delete)</a></li>
			</ul>
	    </ul>
  	</li>

  	<li class="list-style-none">
    	<a href="#" onclick="dockerHide(this,event)" class="display-hide dockerHide font-ul"><i class="fa fa-caret-down" aria-hidden="true"></i> Docker</a>
		<a href="#" onclick="dockerShow(this,event)" class="dockerShow font-ul"><i class="fa fa-caret-right" aria-hidden="true"></i> Docker</a>
	    <ul id="docker" class="display-hide">
	      <li><a href="http://www.codedoct.com/2017/05/docker-install-docker-dan-docker.html" target="_blank">Install docker dan docker-compose ubuntu 16.04</a></li>
	    </ul>
  	</li>
</ul>