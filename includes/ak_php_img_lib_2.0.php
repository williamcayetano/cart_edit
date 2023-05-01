<?php
// ----------------------- IMAGE RESIZING FUNCTION -----------------------
function ak_img_resize($target, $newcopy, $w, $h, $ext) {
    list($w_orig, $h_orig) = getimagesize($target);
    $scale_ratio = $w_orig / $h_orig;
    if (($w / $h) > $scale_ratio) {
           $w = $h * $scale_ratio; //if original image width is greater than height
    } else {
           $h = $w / $scale_ratio; //if original image height is greater than width
    }
    
    $ext = exif_imagetype($target);

    if ($ext == "IMAGETYPE_PNG") {
      $img = imagecreatefrompng($target);
    } else {
      $img = imagecreatefromjpeg($target);
    }

    $tci = imagecreatetruecolor($w, $h);//makes a black rectangle with width and height you specify
    // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);

    imagejpeg($tci, $newcopy, 84);
}
// ------------- THUMBNAIL (CROP) FUNCTION -------------
// Function for creating a true thumbnail cropping from any jpg, gif, or png image files
function ak_img_thumb($target, $newcopy, $w, $h, $ext) {
    list($w_orig, $h_orig) = getimagesize($target);
    //capture center point of source image and subtract destination images center point
    //the left top corner will be offset to get exact center crop
    $src_x = ($w_orig / 2) - ($w / 2);
    //(h_orig / 2) gives exact center, I (William), wanted to capture upper portion more, so I used 3
    $src_y = ($h_orig / 3) - ($h / 2);

    $img = imagecreatefromjpeg($target);

    $tci = imagecreatetruecolor($w, $h);
    //crops a square out of source image using set coordinates
    imagecopyresampled($tci, $img, 0, 0, $src_x, $src_y, $w, $h, $w, $h);

    imagejpeg($tci, $newcopy, 84);

    imagedestroy($img); 
}
// -------------- IMAGE MAXSIZE FUNCTION  -----------------
// Function for setting a maxsize on an image
function ak_img_maxsize($target, $newcopy, $w, $h, $ext) {  
    list($w_orig, $h_orig) = getimagesize($target);
    $scale_ratio = $w_orig / $h_orig;
    if (($w / $h) > $scale_ratio) {
           $w = $h * $scale_ratio; 
    } else {
           $h = $w / $scale_ratio; 
    }

    $ext = exif_imagetype($target);

    if ($ext == "IMAGETYPE_PNG") {
      $img = imagecreatefrompng($target);
    } else {
      $img = imagecreatefromjpeg($target);
    }


    if ($w_orig > $w || $h_orig > $h) {
    	$tci = imagecreatetruecolor($w, $h);
    	imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
    	imagejpeg($tci, $newcopy, 100); 
    } else { 
    	imagejpeg($img, $newcopy, 100); 
    }
    imagedestroy($img); 
}

// ----------------------- IMAGE WATERMARK FUNCTION -----------------------
function ak_img_watermark($target, $wtrmrk_file, $newcopy, $w, $h, $ext) { 
    $watermark = imagecreatefrompng($wtrmrk_file); 
    list($w_orig, $h_orig) = getimagesize($target);
    $scale_ratio = $w_orig / $h_orig;
    if (($w / $h) > $scale_ratio) {
           $w = $h * $scale_ratio; 
    } else {
           $h = $w / $scale_ratio; 
    }
    imagealphablending($watermark, false); 
    imagesavealpha($watermark, true);

    $ext = exif_imagetype($target);

    if ($ext == "IMAGETYPE_PNG") {
      $img = imagecreatefrompng($target);
    } else {
      $img = imagecreatefromjpeg($target);
    }

    
    if ($w_orig > $w || $h_orig > $h) {
    	$tci = imagecreatetruecolor($w, $h);
    	$cri = imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
    	$img_w = imagesx($tci); 
    	$img_h = imagesy($tci); 
    	$wtrmrk_w = imagesx($watermark); 
    	$wtrmrk_h = imagesy($watermark); 
    	$dst_x = ($img_w - 90) - ($wtrmrk_w / 2); // For centering the watermark on any image
    	$dst_y = ($img_h - 45) - ($wtrmrk_h / 2) ; // For centering the watermark on any image
    	//actually places the watermark
    	imagecopy($tci, $watermark, $dst_x, $dst_y, 0, 0, $wtrmrk_w, $wtrmrk_h); 
    	//actually creates the new image blended together
    	imagejpeg($tci, $newcopy, 100); 
    } else {
    	$img_w = imagesx($img); 
    	$img_h = imagesy($img); 
    	$wtrmrk_w = imagesx($watermark); 
    	$wtrmrk_h = imagesy($watermark); 
    	$dst_x = ($img_w - 90) - ($wtrmrk_w / 2); // For centering the watermark on any image
    	$dst_y = ($img_h - 45) - ($wtrmrk_h / 2); // For centering the watermark on any image
    	imagecopy($img, $watermark, $dst_x, $dst_y, 0, 0, $wtrmrk_w, $wtrmrk_h); 
    	imagejpeg($img, $newcopy, 100); 
    }
    //since these are not needed anymore, destroy them
    //since these are not needed anymore, destroy them
    //imagedestroy($img); 
    //imagedestroy($watermark); 
}
?>
