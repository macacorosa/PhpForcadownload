<!DOCTYPE html>
<html>
<head>
	<meta> https-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Forçar Download de Arquivos Com Php</title>
</head>
<body>
		<ul>
		<?php
		Foreach(glob("upload/*.*") as $v) {
 			$name = basename($v);
 			echo '<li><a href="baixar.php?file='.$name.' ">'.$name.'</a></li>';

	}
	?>
</ul>
</body>
</html>