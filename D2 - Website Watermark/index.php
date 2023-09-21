<?php

function addWatermark($imageURL, $outputPath) {
    $image = imagecreatefromjpeg($imageURL);

    $watermark = imagecreatefrompng('logo.png');
    

    $image_width = imagesx($image);
    $image_height = imagesy($image);

    $watermark_width = imagesx($watermark);
    $watermark_height = imagesy($watermark);

    // Calculate the position for the watermark (e.g., top right corner)
    
    $watermark_x = $image_width - $watermark_width;
    $watermark_y = 0;
    // print_r($watermark_x);

    // Merge the watermark onto the image
    imagecopymerge($image, $watermark, $watermark_x, $watermark_y, 0, 0, $watermark_width, $watermark_height, 50);

    // Save the watermarked image
    imagejpeg($image, $outputPath);

    // Clean up
    imagedestroy($image);
    imagedestroy($watermark);
}

addWatermark('windah.jpg', 'output_image.jpg');