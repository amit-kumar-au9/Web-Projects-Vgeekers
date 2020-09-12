<!DOCTYPE html>
<html>
<head>
	<title>Revisedu</title>
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<?php 
				require 'connection.php';
				$checkQuery = "SELECT * FROM youtube_link WHERE user_id = ''";
				$checkResult = mysqli_query($conn, $checkQuery);
				$row = $checkResult -> fetch_assoc();
			?>
			<iframe src="<?php echo $row['youtube_link']; ?>" width="100%" height="100%" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</body>
</html>