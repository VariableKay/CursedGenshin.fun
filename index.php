<!DOCTYPE html>
<html lang="en">
    <head>
	  	<script src="gallery.js"></script>
      	<link rel="icon" type="image/png" href="https://media.discordapp.net/attachments/819932803117875241/892754664179793970/6972eb9c-5c5c-4b00-bed3-4e3d6605d781.png?width=676&height=676">
        <meta charset="utf-8" />
		<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
      	<link href="gallery.css" rel="stylesheet">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="style.css">
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="description" content="Your favourite cursed images, all in one place."/>
        <title>Cursed Genshin Images</title>
    </head>
  	<body>
      <div class="topnav">
         <font face= "Comic Sans MS"><a class="active" href="https://cursedgenshin.fun">Home</a></font>
         <font face = "Comic Sans MS"><a href="/summary">About Us</a></font>
         <font face = "Comic Sans MS"><a href="/submit">Submit An Image</a></font>
         <div class="search-container">
         	<form action="/action_page.php">
  		 		<input type="text" placeholder="Search for images" name="search">
         		<button type="submit"><i class="fa fa-search"></i></button>
    		</form>
         </div>
	  </div>
      <h1>Cursed Genshin Fun<h1>
        <p>Click here to view <a href="https://cursedgenshin.fun/summary">a summary of this site</a></p> 
	  <div class="gallery">
        <?php
	  		$dir = __DIR__ . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR;
	  		$images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
 
	  		foreach ($images as $i) {
  	  			printf("<img src='uploads/%s'/>", basename($i));
	  		}
	  	?>
      </div>