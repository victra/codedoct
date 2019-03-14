<style>
.center{
  width:100%;
}
.tabs-inner .widget ul#icbabdrop {
  text-align: center;
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
  padding: 10px 19px;
  background: #fff; /* background colour of the main menu */
  float:none;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}
.tabs-inner .widget ul#icbabdrop li#paling-kanan {
  border-right: 1px solid #ddd;
  padding: 10px 55px;
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
  width: 240px;
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
  text-align: left;
  border: none;
  background: #fff; /* background colour of the sub menu items */
  display: block; 
  color: #555; /* font colour of the sub menu items */
  /*text-shadow: 0 -1px 0 #000;*/
  padding: 10px 15px;
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
          <li><a href="https://www.codedoct.com/search/label/Laravel-Chapter1">Chapter 1</a></li>
          <li><a href="https://www.codedoct.com/search/label/Laravel-Chapter2">Chapter 2</a></li>
          <li><a href="https://www.codedoct.com/search/label/Laravel-Chapter3">Chapter 3</a></li>
          <li><a href="https://www.codedoct.com/search/label/Laravel-Chapter4">Chapter 4</a></li>
          <li><a href="https://www.codedoct.com/search/label/Laravel-Chapter5">Chapter 5</a></li>
          <li><a href="https://www.codedoct.com/search/label/Laravel-Chapter6">Chapter 6</a></li>
          <li><a href="https://www.codedoct.com/search/label/Laravel-Chapter7">Chapter 7</a></li>
        </ul>
      </li>
        <li>
          Rails
          <ul>
          <li><a href="https://www.codedoct.com/search/label/Rails-Chapter1">Chapter 1</a></li>
          <li><a href="https://www.codedoct.com/search/label/Rails-Chapter2">Chapter 2</a></li>
          <li><a href="https://www.codedoct.com/search/label/Rails-Chapter3">Chapter 3</a></li>
          </ul>
        </li>
      <li>
          Phalcon
          <ul>
            <li><a href="https://www.codedoct.com/search/label/Phalcon-Chapter1">Chapter 1</a></li>
            <li><a href="https://www.codedoct.com/search/label/Phalcon-Chapter2">Chapter 2</a></li>
          </ul>
        </li>
        <li>
          How to
          <ul>
            <li><a href="https://www.codedoct.com/search/label/How1">How 1</a></li>
            <li><a href="https://www.codedoct.com/search/label/How2">How 2</a></li>
          </ul>
        </li>
        <li>
          Sintax
          <ul>
            <li><a href="https://www.codedoct.com/2016/04/laravel-function-laravel.html">Sintax Laravel</a></li>
            <li><a href="https://www.codedoct.com/2016/04/github-function-github.html">Sintax Github</a></li>
            <li><a href="https://www.codedoct.com/2016/07/syntax-syntax-ubuntu.html">Sintax Ubuntu</a></li>
            <li><a href="https://www.codedoct.com/2016/08/sintax-mysql.html">Sintax MySQL</a></li>
            <li><a href="https://www.codedoct.com/2016/10/syntax-syntax-ruby.html">Sintax Ruby</a></li>
            <li><a href="https://www.codedoct.com/2016/10/syntax-syntax-php.html">Sintax PHP</a></li>
            <li><a href="https://www.codedoct.com/2016/10/syntax-syntax-sass.html">Sintax SASS</a></li>
            <li><a href="https://www.codedoct.com/2016/11/syntax-syntax-rails.html">Sintax Rails</a></li>
          </ul>
        </li>
        <li>
          What is
          <ul>
            <li><a href="https://www.codedoct.com/2016/04/file-permissions.html">File Permissions</a></li>
            <li><a href="https://www.codedoct.com/2016/07/how-to-crontab.html">Crontab</a></li>
            <li><a href="https://www.codedoct.com/2016/09/what-is-array.html">Array</a></li>
            <li><a href="https://www.codedoct.com/2016/10/custom-server-vs-serverpilot.html">Serverpilot</a></li>
          </ul>
        </li>
        <li>
          PHP
          <ul>
            <li><a href="https://www.codedoct.com/search/label/PHP-Chapter1">Chapter 1</a></li>
            <li><a href="https://www.codedoct.com/search/label/PHP-Chapter2">Chapter 2</a></li>
          </ul>
        </li>
        <li>
          Visual Basic
          <ul>
            <li><a href="https://www.codedoct.com/search/label/VB-Chapter1">Chapter 1</a></li>
            <li><a href="https://www.codedoct.com/search/label/VB-Chapter2">Chapter 2</a></li>
          </ul>
        </li>
        <li>
          React Native
          <ul>
            <li><a href="https://www.codedoct.com/2016/03/install-react-native-dengan-brew-pada.html">Install React Native pada ubuntu</a></li>
            <li><a href="https://www.codedoct.com/2016/09/react-native-install-react-native-pada.html">Install React Native pada Windows</a></li>
            <li><a href="https://www.codedoct.com/2016/09/react-native-create-project-react-native.html">Create project React Native</a></li>
          </ul>
        </li>
        <li>
          AWS
          <ul>
            <li><a href="https://www.codedoct.com/2018/05/aws-create-cloud-server-with-ec2.html">Create cloud server with (EC2)</a></li>
            <li><a href="https://www.codedoct.com/2018/05/aws-integration-server-ec2-with.html">Integration server with cloudflare</a></li>
            <li><a href="https://www.codedoct.com/2018/05/aws-create-bucket-s3-aws.html">Create bucket S3 AWS</a></li>
            <li><a href="https://www.codedoct.com/2018/07/aws-fasting-your-s3-file-with-cloudfront.html">Fasting your S3 file with cloudfront</a></li>
          </ul>
        </li>
        <li id="paling-kanan">
          Engine
          <ul>
            <li><a href="https://www.codedoct.com/search/label/Engine1">Engine 1</a></li>
            <li><a href="https://www.codedoct.com/search/label/Engine2">Engine 2</a></li>
            <li><a href="https://www.codedoct.com/search/label/Engine3">Engine 3</a></li>
            <li><a href="https://www.codedoct.com/search/label/Engine4">Engine 4</a></li>
          </ul>
        </li>
    </ul>
  </div>
</div>