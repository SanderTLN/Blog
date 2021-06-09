<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<meta charset="UTF-8">
	<title>Articles</title>
</head>
<body>
    <style>
        body {
            background-image: url(img/img.png);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
	<div class="container">
		<div class="navbar">
			<div class="logo_div">
				<a href="index.php"><h1>AdminBlog</h1></a>
			</div>
			<ul>
			  <li><a class="active" href="index.php">Home</a></li>
			  <li><a href="contact.php">Contact</a></li>
			  <li><a href="about.php">About</a></li>
              <li><a href="articles.php">Articles</a></li>
              <li><a href="admin.php">Log in</a></li>
			</ul>
		</div>
		<div class="content">
			<h2 class="content-title">All Articles</h2>
			<hr>
		</div>
        <div class="articles">
            On this page you will find all articles.
        </div>
		<div class="footer">
			<p>MyBlog &copy; <?php echo date('Y'); ?></p>
		</div>
	</div>
</body>
</html>