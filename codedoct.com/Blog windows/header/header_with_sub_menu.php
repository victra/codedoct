<style>
	.header-real{
	    width: 100%;
	    height: 50px;
	    line-height: 45px;
	    background-color: #fff;
	    text-align: center;
	}
	.header-real .dalam{
	    width: 100%;
	    text-align: left;
	    display: inline-table;
	}
	.header-real .dalam a.dropbtn{
	    border-left: 1px solid #e6e6e6;
	    color: #1da1f2;
	    font-size: 18px;
	    cursor: pointer;
	    text-decoration: none;
	    padding: 15px 20px;
	}
	.header-real .dalam a#garis-right{
	    border-right: 1px solid #e6e6e6;
	}
	.header-real .dalam li{
	    display: inline-block;
	    list-style: none;
	}
	.header-real .dalam li:hover{
	    display: inline-block;
	    list-style: none;
	    margin-top: -10px;
	    transition: border-width 100ms;
	    border-top: 10px solid #1da1f2;
	}

	/*dropdown*/
	.dropdown-content {
	    display: none;
	    position: absolute;
	    background-color: #fff;
	    min-width: 160px;
	    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	}

	.dropdown-content a {
	    color: #888888;
	    padding: 2px 10px;
	    text-decoration: none;
	    display: block;
	}

	.dropdown-content a:hover {
		background-color: #f1f1f1;
	}

	li:hover .dropdown-content {
		position: absolute;
	    display: block;
	}

</style>

<div class="header-real">
	<div class="dalam">
		<li>
			<a class="dropbtn" href="http://www.codedoct.com/">Home</a>
			<div class="dropdown-content">
				<a href="#">Link 1</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
			</div>
		</li>
		<li><a class="dropbtn" href="http://www.codedoct.com/p/about-me.html">Contact Me</a></li>
		<li><a class="dropbtn" href="http://www.codedoct.com/p/disclaimer.html">Disclaimer</a></li>
		<li><a class="dropbtn" id="garis-right" href="http://www.codedoct.com/p/privacy-policy-for-codedoct-if-you.html">Privacy Policy</a></li>
	</div>
</div>