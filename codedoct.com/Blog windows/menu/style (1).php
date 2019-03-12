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
  padding: 10px 26px;
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