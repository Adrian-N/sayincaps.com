<?php

//a = message
$fontSize = "25vmin";
if (isset($_GET['a'])) {
	if ($_GET['a']!='') {
		$text = true;
		$message = $_GET['a'];
		$message = strtoupper($message);
		if (strlen($message) > 10) {
			$fontSize = "15vmin";
		}

	}else{
		$text = false;
	}
}else{
	$text = false;
}



//b = font color
if (isset($_GET['b'])) {
	if ($_GET['b']!='') {
		$fontColor = $_GET['b'];
		if (strlen($fontColor)==6) {
			$colorOne = true;
			$fontColor = "#" . $fontColor;
		}else{
			$colorOne = false;
		}
	}else{
		$colorOne = false;
	}
}else{
	$colorOne = false;
}

//c = background color
if (isset($_GET['c'])) {
	if ($_GET['c']!='') {
		$bgrColor = $_GET['c'];
		if (strlen($bgrColor)==6) {
			$colorTwo = true;
			$bgrColor = "#" . $bgrColor;
		}else{
			$colorTwo = false;
		}
	}else{
		$colorTwo = false;
	}
}else{
	$colorTwo = false;
}

if ($text==false && $colorOne==false && $colorTwo==false ) {
	header("Location:index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php  
			if ($text==true) {
				echo $message;
			}else{
				echo "Just an empty page...";
			}
		?>
	</title>
	<style type="text/css">
		*{
			margin:0;padding:0;
		}
		body{
			width: 100%;
			<?php if ($colorOne==true) echo "background-color:" . $bgrColor . ";";  ?>
		}
		article{
			margin: auto;
			width: 100%;
			height: 100vh;
			text-align: center;
		}
		p{
			height:100vh;
			font-size: 120px;
			<?php echo "font-size:" . $fontSize . ";";  ?>

			font-family: Calibri, Helvetica, sans-serif;
			display: flex;
			justify-content: center; 
	    	align-items: center;
			<?php if ($colorTwo==true){ echo "color:" . $fontColor . ";"; } ?>
		}
	</style>
</head>
<body>
	<article>
		<p>
			<?php if ($text==true) { echo $message; } ?>
		</p>
	</article>

</body>
</html>