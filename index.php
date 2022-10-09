<?php
$reg_image = '/^images\/IMG_[0-9]*\.(jpg|png|gif)$/';
$arr = ["IMG_986.jpg","images/IMG_3456.jpg","/rty/IMG_267.png","images/IMG_456/png",];
for ($i=0; $i < count($arr); $i++) { 
if (preg_match($reg_image, $arr[$i], $matches))
    echo "$arr[$i] - правильно";
else
    echo "$arr[$i] - неправильно";
    echo "\n";
    print_r($matches);
}