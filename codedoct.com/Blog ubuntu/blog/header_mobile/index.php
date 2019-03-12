<style>
	.header-real{
	    width: 100%;
	    height: 50px;
	    line-height: 45px;
	    background-color: #fff;
	    text-align: center;
	}
	.header-real .dalam{
	    width: 50%;
	    float: left;
	    text-align: left;
	    display: inline-table;
	}
	.header-real .dalam-kanan{
		padding-top: 5px;
	    width: 50%;
	    float: right;
	    text-align: center;

	}
	.header-real .dalam-kanan input.buttonsubmit{
	    cursor: pointer;
	    background-color: #2288bb;
	    color: #fff;
	    border: 1px solid #2288bb;
	    border-radius: 2px;
	    height: 23px;
	}
	.header-real .dalam-kanan input{
	    height: 90%;
	    border: 1px solid #ddd;
	    border-radius: 2px;
        height: 20px;
	    padding-left: 3px;
	}
	.header-real .dalam a{
	    /*border-left: 1px solid #e6e6e6;*/
	    color: #1da1f2;
	    font-size: 18px;
	    text-decoration: none;
	    padding: 15px 20px;
	}
	/*.header-real .dalam a#garis-right{
	    border-right: 1px solid #e6e6e6;
	}*/
	.header-real .dalam li{
	    display: inline-block;
	    list-style: none;
	}
</style>

<div class="header-real">
	<div class="dalam">
		<li><a href="http://www.codedoct.com/">Home</a></li>
	</div>
	<div class="dalam-kanan">
		<form action="http://codedoct.com/search" method="get"> <input class="textinput" placeholder="Search for..." name="q" size="10" type="text"/> <input class="buttonsubmit" name="submit" value="Search" type="submit"/></form>
	</div>
</div>