<?php

	include("includes/config.php");
	include("includes/db.php");

	$query = "SELECT * FROM categories";
	
	$categories = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BlogCMS</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          
		  <?php if($categories->num_rows > 0){ 
		  while($row = $categories->fetch_assoc()){
		  ?>
		  <a class="blog-nav-item" href="#"><?ph echo $row['text']; ?></a>
          <?php }}?>
        </nav>
      </div>
    </div>

    <div class="container">


	
      <div class="row">

        <div class="col-sm-8 blog-main">