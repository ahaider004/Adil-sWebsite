
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reviews</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="nav.css">
  </head>
  <body>
    <header>
      <a href="index.php" class="header-brand">adilnyc</a>
      <nav>
        <ul>
          <li><a href="index.php#myHeader">Sneek Peek</a></li>
          <li><a href="index.php#opening">About me</a></li>
          <li><a href="index.php#fourth">Contact</a></li>
        </ul>
  
      </nav>
    </header>
    <main>

      <section class="gallery-links">
        <div class="wrapper"><br>
		
          <h2>Client Reviews</h2>
		  <hr>

          <div class="gallery-container">
            <?php
            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
            global $con;
			$stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = $conn -> query($sql);

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#">
                  <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                  <h3>'.$row["titleGallery"].'</h3>
                  <p>'.$row["descGallery"].'</p>
                </a>';
              }
            }
            ?>
          </div>

          <?php
           
            echo '<div class="gallery-upload">
              <h2>Upload</h2>
              <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="Your Email...">
                <input type="text" name="filetitle" placeholder="Your Name...">
                <input type="text" name="filedesc" placeholder="Your Comment...">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
              </form>
            </div>';
          
          ?>

        </div>
      </section>

    </main>
    
  </body>
</html>
