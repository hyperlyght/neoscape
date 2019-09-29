<?php

  $strJsonFileContents = file_get_contents(dirname(__FILE__)  . "/json/images.json");
  $images = json_decode($strJsonFileContents, true);
  $totalImages = count($images);

?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>&#9734; Neoscape Slideshow Demo &#9734;</title>
      <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="css/neoscape.css" rel="stylesheet">   
  </head>

  <body>
    <section class="slider">
      <div class="slides">
        <?php

          $imageCounter = 1;
          $nextImage = 0;
          $prevImage = 0;

          foreach ($images as $image) {
            echo "<div id='slide-$imageCounter'>";
            echo "<h1>$image[title]</h1>";

            if (strpos($image["filename"], '.png') !== false) {
              echo "<img src='images/$image[filename]' />";
            } else {
              echo "<object data='images/$image[filename]' type='image/svg+xml'></object>";
            }

            $prevImage = $imageCounter - 1;
            if ($prevImage < 1) {
              $prevImage = $totalImages;
            }

            $nextImage = $imageCounter + 1;
            if ($nextImage > $totalImages) {
              $nextImage = 1;
            }

            echo "<a class='arrow arrow-prev' href='#slide-$prevImage'></a>";
            echo "<a class='arrow arrow-next' href='#slide-$nextImage'></a>";
            echo "</div>";

            $imageCounter += 1;
          } 

        ?>
      </div>

      <div class="pagination">
        <?php

          $paginationCounter = 1;

          foreach ($images as $imagePagination) {
            echo "<a href='#slide-$paginationCounter'></a>";
            $paginationCounter += 1;
          }
        ?>
      </div> 
    </section>
  </body>
</html>
