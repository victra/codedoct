<?php
	$encode = $_POST["encode"];
	if ($encode) {
		$search = array('&', '<', '>', '"', "'");
		$replace = array('&amp;', '&lt;', '&gt;', '&quot;', '&#039;');
		$target = str_replace( $search, $replace, $encode );
	}
?>
<html>
<head>
	<title>parse</title>
</head>
<body>
	<form method="POST" target="">
	<table>
		<tr>
			<td style="width:200px;"><textarea name="encode" id="encode" style="height:200px;" required><?= htmlspecialchars($target) ?></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" value="Encode"></td>
		</tr>
	</table>
	</form>
</body>
</html>