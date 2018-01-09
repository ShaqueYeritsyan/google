<html>
	<head>
		<link rel="stylesheet" href="google.css">
	<head>
	<body>
		<div class="results">
			<?php
			error_reporting(E_ALL ^ E_DEPRECATED);
			$connection = new mysqli("localhost", "root", "root", 'google');
			$connection->query ("SET NAMES 'utf8'");
			$query="SELECT * FROM `googleSearchResult` WHERE `info` LIKE '%$_GET[s]%'";
			$data=$connection->query($query);
			while ($result = $data->fetch_assoc()){
				echo "<br><p><a href='".$result['url']."'style='color:#1a0dab !important; font-size:20px'>".$result['title']."</a></p>";
				echo "<p style='color:#006621 !important; font-size:17px'>".$result['url']."</p>";
				echo "<p style='color:#545454 !important; font-size:16px'>".$result['info']."</p>"."<br>";
			}
			$connection->close();
			?>
		</div>
	</body>
</html>	