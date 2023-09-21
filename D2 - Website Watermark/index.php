<?php

function addWatermark($imageURL, $outputPath) {
    $image = imagecreatefromjpeg($imageURL);
    if (!$image) {
        die("<h1>unable to open image!</h1>");
    }

    $watermark = imagecreatefrompng('logo.png');
    if (!$watermark) {
        die("<h1>unable to open image!</h1>");
    }    

    $image_width = imagesx($image);
    $image_height = imagesy($image);

    $watermark_width = imagesx($watermark);
    $watermark_height = imagesy($watermark);

    // Calculate the position for the watermark (e.g., top right corner)
    
    var_dump("image width : $image_width");
    echo "<br>";
    var_dump("watermark width : $watermark_width");
    echo "<br>";

    $watermark_x = $image_width / 2;
    $watermark_y = 0;
    var_dump("watermark x : $watermark_x");


    // Merge the watermark into the image

    /* 
    bool imagecopymerge ( $dst_image, $src_image, $dst_x, $dst_y, 
    $src_x, $src_y, $src_w, $src_h, $pct )

    $dst_image: This parameter is used to set the destination image link resource.
    $src_image: This parameter is used to set the source image link resource.
    $dst_x: This parameter is used to set the x-coordinate of the destination point.
    $dst_y: This parameter is used to set the y-coordinate of the destination point.
    $src_x: This parameter is used to set the x-coordinate of the source point.
    $src_y: This parameter is used to set the x-coordinate of the source point.
    $src_w: This parameter is used to set source width.
    $src_h: This parameter is used to set source height.
    $pct: The two images will be merged with the help of $pct variables. The range of pct is 0 to 100. 
    If $pct = 0, then no action is taken, and when $pct = 100 then this function behaves similarly to imagecopy()
    function for palette images, except ignoring the alpha components. It implements alpha transparency for true color images.
    */

    imagecopymerge($image, $watermark, $watermark_x, $watermark_y, 0, 0, $watermark_width, $watermark_height, 60);

    // Save the watermarked image
    imagejpeg($image, $outputPath);

    // Clean up
    imagedestroy($image);
    imagedestroy($watermark);
}

addWatermark('windah.jpg', 'output_image.jpg');