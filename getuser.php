<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="editor-item">
		<br>
            <div class="editor-img">
                <img src="img/editor-1.jpg" alt="Editor Image">
            </div>
            <div class="editor-text">
	<?php
	$q = intval($_GET['q']);

	$koneksi = mysqli_connect('localhost', 'root', '');
	if (!$koneksi) {
		die('Could not connect: ' . mysqli_error($koneksi));
	}

	mysqli_select_db($koneksi, "company_eval4");
	$sql = "SELECT * FROM user where id = '" . $q . "'";
	$result = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($result)) {
		
                echo "<h3>" . $row['nama'] . "</h3>";
    	}
    	?>
    	<a href="mailto:email@example.com">Email Now</a>
            </div>
        </div>
</body>
</html>