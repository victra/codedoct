<style>
.block_menu{
 border-bottom: 1px solid black;
}
.center{
  text-align:center;
  width:100%;
}
.tabs-inner .widget ul#icbabdrop {
  text-align: left;
  display: inline;
  margin: 0;
  padding: 0 0 0 0;
  list-style: none;
}
.tabs-inner .widget ul#icbabdrop li {
color: #555;
  font-size: 16px;
  display: inline-block;
  margin-right: -4px;
  position: relative;
  padding: 10px 20px;
  background: #fff; /* background colour of the main menu */
  float:none;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}
.tabs-inner .widget ul#icbabdrop li#menu_link a {
  font-size: 16px;
  color: #555;
}
.tabs-inner .widget ul#icbabdrop li#menu_link a:hover {
  color: #fff;
}
.tabs-inner .widget ul#icbabdrop li a {
padding:0;
font-family: sans-serif; /* Font for the menu links */
border:0;
font-size: 12px;
}
.tabs-inner .widget ul#icbabdrop li:hover {
  background: #555; /* background colour when you roll over a menu title */
  color: #fff; /* font colour when you roll over a menu title */ 
}
.tabs-inner .widget ul#icbabdrop li:hover a {
  background: transparent;
  color: #555; /* font colour when you roll over a menu title link */ 
}
.tabs-inner .widget ul#icbabdrop li ul {
  z-index:1000; 
  border: 1px solid #D3D3D3;
  border-radius: 2px;
  padding: 0;
  position: absolute;
  top: 40px;
  left: 30px;
  float:none;
  width: 280px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: none;
  display: none;
  opacity: 0;
  visibility: hidden;
  -webkit-transiton: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -ms-transition: opacity 0.2s;
  -o-transition: opacity 0.2s;
  -transition: opacity 0.2s;
}
.tabs-inner .widget ul#icbabdrop li ul li { 
  background: #fff; /* background colour of the sub menu items */
  display: block; 
  color: #555; /* font colour of the sub menu items */
  /*text-shadow: 0 -1px 0 #000;*/
}
ul#icbabdrop li ul li a{
  color:#555  /* link colour of the sub menu items */
}
.tabs-inner .widget ul#icbabdrop li ul li:hover { 
  background: #f5f5f5; /* background colour when you roll over sub menu items */
}
.tabs-inner .widget ul#icbabdrop li:hover ul {
  display: block;
  opacity: 1;
  visibility: visible;
}
</style>

<div class="center">
	<div class="block_menu">
		<ul id="icbabdrop">
			<li id="menu_link"><a href="http://www.codedoct.com/">Home</a></li>
			<li>
				Laravel
				<ul>
					<li><a href="http://www.codedoct.com/2016/04/laravel-menghilangkan-url-public-pada.html">Menghilangkan URL /public pada laravel 4.2</a></li>
					<li><a href="http://www.codedoct.com/2016/04/laravel-membuat-route-controller-view.html">Membuat route-controller-view pada laravel 4.2</a></li>
					<li><a href="http://www.codedoct.com/2016/05/laravel-belajar-membuat-css-laravel.html">Belajar membuat css laravel dengan sass pada windows</a></li>
					<li><a href="http://www.codedoct.com/2016/05/laravel-setting-database-connection.html">Setting database connection laravel 4.2</a></li>
					<li><a href="http://www.codedoct.com/2016/05/laravel-database-migrations-dan-seeds.html">Database migrations dan seeds pada laravel 4.2</a></li>
					<li><a href="http://www.codedoct.com/2016/05/laravel-membuat-menu-dropdown-dengan.html">Membuat menu dropdown dengan style</a></li>
					<li><a href="http://www.codedoct.com/2016/05/laravel-crud-read-pada-laravel-42.html">CRUD (read) pada laravel 4.2</a></li>
					<li><a href="http://www.codedoct.com/2016/05/laravel-crud-create-pada-laravel-42.html">CRUD (create) pada laravel 4.2</a></li>
					<li><a href="http://www.codedoct.com/2016/05/laravel-crud-update-pada-laravel-42.html">CRUD (update) pada laravel 4.2</a></li>
					<li><a href="http://www.codedoct.com/2016/06/laravel-crud-delete-pada-laravel-42.html">CRUD (delete) pada laravel 4.2</a></li>
				</ul>
			</li>
			<li>
		    	Windows
			    <ul>
			      <li><a href="http://www.codedoct.com/2016/05/windows-mengganti-nama-komputer.html">Mengganti nama komputer</a></li>
			      <li><a href="http://www.codedoct.com/2016/04/windows-menambah-path-pada-windows.html">Menambah path pada windows secara global</a></li>
			    </ul>
		  	</li>
		  	<li>
		    	How to
			    <ul>
			      <li><a href="http://www.codedoct.com/2016/04/laravel-install-laravel-pada-ubuntu-1404.html">Install laravel 4.2 pada Ubuntu</a></li>
				  <li><a href="http://www.codedoct.com/2016/04/laravel-install-laravel-52-pada-ubuntu.html">Install laravel 5.2 pada Ubuntu</a></li>
				  <li><a href="http://www.codedoct.com/2016/04/laravel-install-laravel-42-pada-windows.html">Install laravel 4.2 pada windows</a></li>
			      <li><a href="http://www.codedoct.com/2016/04/how-to-install-ruby-di-windows.html">Install ruby di windows</a></li>
			      <li><a href="http://www.codedoct.com/2016/03/install-react-native-dengan-brew-pada.html">Install React-Native dengan Brew pada ubuntu</a></li>
			      <li><a href="http://www.codedoct.com/2016/03/instalasi-php-di-ubuntu.html">Install PHP di ubuntu</a></li>
			      <li><a href="http://www.codedoct.com/2016/04/how-to-install-sass-pada-windows.html">Install sass pada windows</a></li>
			    </ul>
		  	</li>
		  	<li>
		    	Sintax
			    <ul>
			      <li><a href="http://www.codedoct.com/2016/04/laravel-function-laravel.html">Sintax laravel</a></li>
			      <li><a href="http://www.codedoct.com/2016/04/github-function-github.html">Sintax github</a></li>
			    </ul>
		  	</li>
		  	<li>
		    	What is
			    <ul>
			      <li><a href="http://www.codedoct.com/2016/04/file-permissions.html">File Permissions</a></li>
			    </ul>
		  	</li>
		  	<li>
		    	PHP
			    <ul>
			      <li><a href="http://www.codedoct.com/2016/03/website-sederhana-untuk-pemula_29.html">Mengganti domain localhost ubuntu</a></li>
			      <li><a href="http://www.codedoct.com/2009/08/blog-post.html">Membuat project sederhana</a></li>
			      <li><a href="http://www.codedoct.com/2016/06/php-parse-code-html.html">Engine parse code html</a></li>
			      <li><a href="http://www.codedoct.com/2016/03/website-sederhana-untuk-pemula.html">Belajar css sederhana (header)</a></li>
			      <li><a href="http://www.codedoct.com/2016/03/website-sederhana-untuk-pemula_86.html">Debug POST (submit)</a></li>
			      <li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula.html">Membuat custom framework</a></li>
			      <li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_14.html">Membuat koneksi database</a></li>
			      <li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_12.html">(CRUD) Read non framework</a></li>
			      <li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_18.html">(CRUD) Create non framework</a></li>
			      <li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_19.html">(CRUD) Update non framework</a></li>
			    </ul>
		  	</li>
		  	<li>
		    	Downloads
			    <ul>
			      <li><a href="http://www.codedoct.com/2016/05/download-instalasi-komputer-baru-windows.html">Install komputer baru</a></li>
			      <li><a href="http://www.codedoct.com/2016/05/download-game.html">Install game</a></li>
			    </ul>
		  	</li>
		  	<li>
		    	Reviews
			    <ul>
			      <li><a href="http://www.codedoct.com/2016/05/review-website-foodenakcom.html">Website foodenak.com</a></li>
			    </ul>
		  	</li>
		  	<li id="menu_link"><a href="https://www.blogger.com/profile/02232574841252088106">Contact</a></li>
		</ul>
	</div>
</div>
