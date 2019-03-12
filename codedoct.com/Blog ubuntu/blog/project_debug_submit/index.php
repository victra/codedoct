<form method="POST">
	<table>
	  <tr>
	    <td>Nama</td>
	    <td>:</td>
	    <td><input type="text" name="name" id="name"></td>	
	  </tr> 
	  <tr>
	    <td>Alamat</td>
	    <td>:</td>
	    <td><textarea name="alamat" id="alamat"></textarea> </td>	
	  </tr> 
      <tr>
	    <td><input type="submit" name="save" id="save" value="save"> </td>	
	  </tr>
	</table>
</form>

<?php
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
?>
