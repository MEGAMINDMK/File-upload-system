<html>
<head>
<title>File uploader</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>

<style type="text/css">
			body {
				font-family: "Segoe UI", "Helvetica", "Arial", San-serif;
				font-size: 13px;
				margin: 0;
				background: #fcfefe url(spider.jpg) no-repeat center top fixed;
				-webkit-background-size: cover;
        		-moz-background-size: cover;
        		-o-background-size: cover;
        		background-size: cover;		
			}
		
			.page {
				width: 840px;
				margin: 0 auto;
			}
			
			img {
				border: none;
				clear: both;
			}
			
			a {
				text-align: center;
				display: block;
				margin: 100px 0;
			}
			
			.hero {
				margin-bottom: 30px;
			}
			
			.brand {
			
			}
			
			.url {

				margin-bottom: 110px;
			}
		</style>
	</head>
	<body><br><br><br><center>
				<img src="gear.png" width="192" height="192">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>

</html>

<center>
<body>
<form action="" method="post" enctype="multipart/form-data">
<h1><font color="cyan">Select Files to Upload!</font></h1>
<br><br>
<input type="file" name="file" required class="btn btn-outline-danger btn-lg">
<br><br>
<button type="submit" name="upload" class="btn btn-outline-info btn-lg">Upload File</button>
</form>
</body>
<?php
if(isset($_POST['upload']))
{
	$targetfolder = "uploaded_file/";
	$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
	if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
	{
	echo "<img src=ok.png width=192 height=192><font color=yellow><h2><b>The file ". basename( $_FILES['file']['name']). " is uploaded successfully.</b></h2></font>";
	}
	else
	{ 
	echo "<img src=error.png width=192 height=192><font color=red><h2><i>Problem uploading file.</i></h2></font>";
	}
}
?>
</center>
<center><br><br><br><br><br><br><br><br><br>
<footer><font color="white"><h5><b>Copyright &copy; File Uploader 2017 &bull;All rights reserved</footer>
</center>