<?php
// src/Wiki/MikiMaireBundle/Services/Crop.php

namespace Wiki\WikiMaireBundle\Services;


class Crop
{
    public function cropImage($x_offset,$y_offset,$iWidth,$iHeigth,$DestFolder,$SrcImage,$Quality,$ImageType)
    {
        $avatarWidth = 400;
        $avatarHeigth = 200;
        //Check Image size is not 0
        if($iWidth <= 0 || $iHeigth <= 0)
        {
            return false;
        }
        $NewCanves 	= imagecreatetruecolor($avatarWidth, $avatarHeigth);
        if(imagecopyresampled($NewCanves, $SrcImage,0, 0, $x_offset, $y_offset, $avatarWidth, $avatarHeigth, $iWidth, $iHeigth))
        {
            switch(strtolower($ImageType))
            {
                case 'image/png':
                    imagepng($NewCanves,$DestFolder);
                    break;
                case 'image/gif':
                    imagegif($NewCanves,$DestFolder);
                    break;
                case 'image/jpeg':
                case 'image/pjpeg':
                    imagejpeg($NewCanves,$DestFolder,$Quality);
                    break;
                default:
                    return false;
            }
            //Destroy image, frees memory
            if(is_resource($NewCanves)) {imagedestroy($NewCanves);}
            return true;
        }
    }
}