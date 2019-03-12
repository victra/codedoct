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
	    text-align: right;
	}
	.header-real .dalam-kanan input.buttonsubmit{
	    background-color: #2288bb;
	    color: #fff;
	    border: 1px solid #2288bb;
	    border-radius: 2px;
	    height: 33px;
	    margin-right: 10px;
	}
	.header-real .dalam-kanan input.textinput{
	    border: 1px solid #ddd;
	    border-radius: 2px;
            height: 30px;
	    padding-left: 3px;
	}
	.header-real .dalam a{
	    /*border-left: 1px solid #e6e6e6;*/
	    color: #1da1f2;
	    font-size: 18px;
	    cursor: pointer;
	    text-decoration: none;
	    padding: 15px 10px;
	}
	.header-real .dalam li{
	    display: inline-block;
	    list-style: none;
	}
</style>

<div class="header-real">
	<div class="dalam">
		<li><a href="http://www.codedoct.com/">Home</a></li>
		<li><a id="garis-right" href="http://www.codedoct.com/p/test-books.html">Book</a></li>
	</div>
	<div class="dalam-kanan">
		<form action="http://codedoct.com/search"
method="get"> <input class="textinput" placeholder="Search for..." name="q" size="8" type="text"/> <input value="Search" class="buttonsubmit" name="submit" type="submit"/></form>
	</div>
</div>