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
				<a href="indexAdmin.php"><h1>AdminBlog</h1></a>
			</div>
			<ul>
              <li><a href="indexAdmin.php">Articles</a></li>
              <li><a href="logout.php">Log out</a></li>
			</ul>
		</div>
		<div class="content">
			<h2 class="content-title">All Articles</h2>
			<hr>
		</div>
        <button class="btn btn-primary"><a href="createArticle.php">Create Article</a></button>
        <br>
        <div class="articles">
            There is all articles and you can add a new one.
        </div>
		<div class="footer">
			<p>MyBlog &copy; <?php echo date('Y'); ?></p>
		</div>
	</div>
</body>
</html>