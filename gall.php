<?php 

     ini_set('display_errrors', 1);
     error_reporting(E_All);
     require_once('admin/phpscripts/init.php');
     $tbl = "tbl_gallery";
     $getGalleries = getAll($tbl);

    $pageTitle = "Gall";
    include "includes/header.php";
    include "includes/nav.php";
    
 ?>
 <section>
    <div class="row">
    <div class="small-10 medium-10 large-12 columns">
   <h2 class="text-center">Gallery</h2>
   <ul class="small-block-grid-2 medium-block-grid-6 large-block-grid-9">
            <?php
          if(!is_string($getGalleries)) {
            while($row = mysqli_fetch_array($getGalleries)) {
              echo "<li><img src=\"gallery/{$row['gallery_thumbnail']}\" alt=\"{$row['gallery_description']}\">";
              // echo "<li><a href=\"gallery/{$row['gallery_image']" data-lightbox=\"$row['gallery_title']">"<img src=\"gallery/{$row['gallery_thumbnail']}\" alt=\"{$row['gallery_description']}\">"/"</a>;
              //echo "<h2>{$row['album_name']}</h2>";
              //echo "<p>{$row['album_media']}</p>";
              //echo "<p>$ {$row['album_price']}</p>";
              //echo "<br><br>";
            }
          }else{
            echo "<p>{$getGalleries}</p>";
          }
        
        ?></ul>
      <!-- <li><a href="gallery/1.jpg" data-lightbox="gallery"><img src="gallery/Thumbs/Pic_01_TH.jpg" alt=""></a></li>
      <li><a href="gallery/2.jpg" data-lightbox="gallery"><img src="gallery/Thumbs/Pic_02_TH.jpg" alt=""></a></li>
      <li><img src="gallery/Thumbs/Pic_03_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_04_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_05_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_06_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_07_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_08_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_09_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_10_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_11_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_12_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_13_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_14_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_15_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_16_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_17_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_18_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_19_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_20_TH.jpg" alt=""></li> -->
    <!-- </ul> -->

   

  
    </div>
    </div>
    </section>

     <?php 
    include "includes/footer.php";
     ?>