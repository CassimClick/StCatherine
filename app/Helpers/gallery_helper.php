<?php
function galleryBlock($image)
{
    return "
    <div class='single-gallery'>
      <img src='$image' alt='Images'>
         <a href='$image' class='gallery-icon'>
         <i class='bx bx-plus'></i>
     </a>
     </div>
   ";
}