<?php
//创建画布
$img = imagecreatetruecolor($width=100,$height=100);
//获取颜色
$white = imagecolorallocate($img,255,255,255);
$red = imagecolorallocate($img,255,0,0);
// 为背景填充白色
imagefill($img,0,0,$white);
//花园
imageellipse($img,50,50,90,90,$red);
header("Content-type:image/png");
imagepng($img);