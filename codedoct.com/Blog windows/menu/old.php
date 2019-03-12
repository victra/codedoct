<style>
.center{
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
  border-left: 1px solid #ddd;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
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
  background: #1da1f2; /* background colour when you roll over a menu title */
  color: #fff; /* font colour when you roll over a menu title */ 
}
.tabs-inner .widget ul#icbabdrop li#search {
  background-color: #fff; 
  cursor: default;
  border-right: 1px solid #ddd;
  padding-bottom: 8px;
}
.tabs-inner .widget ul#icbabdrop li#search button {
  cursor: pointer;
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
  border: none;
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
  border-left:4px solid #ddd;
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
      <li>
        Laravel
        <ul>
          <li><a href="http://www.codedoct.com/2016/04/laravel-menghilangkan-url-public-pada.html">Menghilangkan URL /public</a></li>
          <li><a href="http://www.codedoct.com/2016/04/laravel-membuat-route-controller-view.html">Route Controller View</a></li>
          <li><a href="http://www.codedoct.com/2016/05/laravel-belajar-membuat-css-laravel.html">Css Laravel dengan Sass Pada Windows</a></li>
          <li><a href="http://www.codedoct.com/2016/05/laravel-setting-database-connection.html">Setting Database Connection</a></li>
          <li><a href="http://www.codedoct.com/2016/05/laravel-database-migrations-dan-seeds.html">Database Migrations dan Seeds</a></li>
          <li><a href="http://www.codedoct.com/2016/05/laravel-membuat-menu-dropdown-dengan.html">Menu Dropdown dengan Style</a></li>
          <li><a href="http://www.codedoct.com/2016/06/laravel-membuat-menu-dropdown-dengan.html">Menu Dropdown dengan Script</a></li>
          <li><a href="http://www.codedoct.com/2016/05/laravel-crud-read-pada-laravel-42.html">CRUD (read)</a></li>
          <li><a href="http://www.codedoct.com/2016/05/laravel-crud-create-pada-laravel-42.html">CRUD (create)</a></li>
          <li><a href="http://www.codedoct.com/2016/05/laravel-crud-update-pada-laravel-42.html">CRUD (update)</a></li>
          <li><a href="http://www.codedoct.com/2016/06/laravel-crud-delete-pada-laravel-42.html">CRUD (delete)</a></li>
          <li><a href="http://www.codedoct.com/2016/07/laravel-membuat-page-not-found.html">Page Not Found</a></li>
          <li><a href="http://www.codedoct.com/2016/07/laravel-membuat-file-constant.html">File Constant</a></li>
          <li><a href="http://www.codedoct.com/2016/07/laravel-composser-classmap.html">Composer</a></li>
          <li><a href="http://www.codedoct.com/2016/07/laravel-grouping-route-1.html">Grouping Route 1</a></li>
        </ul>
      </li>
      <li>
          Windows
          <ul>
            <li><a href="http://www.codedoct.com/2016/05/windows-mengganti-nama-komputer.html">Mengganti Nama Komputer</a></li>
            <li><a href="http://www.codedoct.com/2016/04/windows-menambah-path-pada-windows.html">Path Global Pada Windows</a></li>
          </ul>
        </li>
        <li>
          How to
          <ul>
            <li><a href="http://www.codedoct.com/2016/03/instalasi-php-di-ubuntu.html">Install PHP Diubuntu</a></li>
            <li><a href="http://www.codedoct.com/2016/04/laravel-install-laravel-pada-ubuntu-1404.html">Install Laravel 4.2 pada Ubuntu</a></li>
          <li><a href="http://www.codedoct.com/2016/04/laravel-install-laravel-52-pada-ubuntu.html">Install Laravel 5.2 pada Ubuntu</a></li>
          <li><a href="http://www.codedoct.com/2016/04/laravel-install-laravel-42-pada-windows.html">Install Laravel 4.2 pada Windows</a></li>
            <li><a href="http://www.codedoct.com/2016/04/how-to-install-sass-pada-windows.html">Install Sass pada Windows</a></li>
            <li><a href="http://www.codedoct.com/2016/04/how-to-install-ruby-di-windows.html">Install Ruby Diwindows</a></li>
            <li><a href="http://www.codedoct.com/2016/07/how-to-install-ruby-on-ubuntu.html">Install Ruby on Ubuntu</a></li>
            <li><a href="http://www.codedoct.com/2016/07/how-to-upgrade-ruby-dengan-rbenv.html">Upgrade Ruby With Rbenv</a></li>
            <li><a href="http://www.codedoct.com/2016/07/how-to-install-rails-on-ubuntu.html">Install Rails on Ubuntu</a></li>
            <li><a href="http://www.codedoct.com/2016/03/install-react-native-dengan-brew-pada.html">Install React-Native dengan Brew Pada Ubuntu</a></li>
            <li><a href="http://www.codedoct.com/2016/07/how-to-use-github.html">How to use Github</a></li>
            <li><a href="http://www.codedoct.com/2016/07/how-to-add-new-collaboration-on-github.html">Add New Collaboration on Github</a></li>
          </ul>
        </li>
        <li>
          Sintax
          <ul>
            <li><a href="http://www.codedoct.com/2016/04/laravel-function-laravel.html">Sintax Laravel</a></li>
            <li><a href="http://www.codedoct.com/2016/04/github-function-github.html">Sintax Github</a></li>
            <li><a href="http://www.codedoct.com/2016/07/syntax-syntax-ubuntu.html">Sintax Ubuntu</a></li>
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
            <li><a href="http://www.codedoct.com/2016/03/website-sederhana-untuk-pemula_29.html">Mengganti Domain Localhost Ubuntu</a></li>
            <li><a href="http://www.codedoct.com/2009/08/blog-post.html">Membuat Project Sederhana</a></li>
            <li><a href="http://www.codedoct.com/2016/03/website-sederhana-untuk-pemula.html">Belajar Css Sederhana (Header)</a></li>
            <li><a href="http://www.codedoct.com/2016/03/website-sederhana-untuk-pemula_86.html">Debug POST (Submit)</a></li>
            <li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula.html">Membuat Custom Framework</a></li>
            <li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_14.html">Membuat Koneksi Database</a></li>
            <li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_12.html">(CRUD) Read non Framework</a></li>
            <li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_18.html">(CRUD) Create non Framework</a></li>
            <li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_19.html">(CRUD) Update non Framework</a></li>
            <li><a href="http://www.codedoct.com/2016/06/website-sederhana-untuk-pemula_25.html">(CRUD) Delete non Framework</a></li>
          </ul>
        </li>
        <li>
          Downloads
          <ul>
            <li><a href="http://www.codedoct.com/2016/05/download-instalasi-komputer-baru-windows.html">Install Komputer Baru (windows)</a></li>
            <li><a href="http://www.codedoct.com/2016/07/download-instalasi-komputer-baru-windows.html">Install Komputer Baru (ubuntu)</a></li>
            <li><a href="http://www.codedoct.com/2016/05/download-game.html">Install Game</a></li>
          </ul>
        </li>
        <li>
          Reviews
          <ul>
            <li><a href="http://www.codedoct.com/2016/05/review-website-foodenakcom.html">Website Foodenak.com</a></li>
          </ul>
        </li>
        <li>
          Engine
          <ul>
            <li><a href="http://www.codedoct.com/2016/06/php-parse-code-html.html">Engine Parse Code Html</a></li>
          </ul>
        </li>
        <li id="search" style="text-align:right">
          <form action="http://codedoct.com/search" method="get"> <input class="textinput" name="q" size="15" type="text"/> <button class="buttonsubmit" name="submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button></form>
        </li>
    </ul>
  </div>
</div>