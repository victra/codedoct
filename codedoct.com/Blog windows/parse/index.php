<span><a href="http://www.codedoct.com/2016/06/php-parse-code-html.html" style="font-size:20px;text-decoration:none;">How to build this?</a></span>
<br>
Fill html code
<br>
<center>
<textarea id="tarea" rows="10" style="font-size: 12px;border-radius:5px;width:100%;"></textarea>
<br>
<br>
<button onclick="code_convert();" style="margin-right: 5px; cursor: pointer;" type="button">Convert</button>
<button onclick="code_clear();" style="margin-left: 5px; cursor: pointer;" type="button">Clear</button>
</center>
<script>
function code_clear(){
	var wtarea=document.getElementById('tarea');
	wtarea.value='';
}
function code_convert(){
	var ctarea=document.getElementById('tarea');
	var toConvert=ctarea.value;
	var toConvert=toConvert.replace(/&/g,"&amp;");
	var toConvert=toConvert.replace(/'/g,"&#039;");
	var toConvert=toConvert.replace(/"/g,"&quot;");
	var toConvert=toConvert.replace(/</g,"&lt;");
	var toConvert=toConvert.replace(/>/g,"&gt;");

	ctarea.value=toConvert;
	ctarea.focus();
	ctarea.select();
};
</script>
