<?php
function random_string($length)
{
   $string = "";
   $chars = "abcdefghijklmanopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   $size = strlen($chars);
   for ($i = 0; $i < $_GET['passwordLength']; $i++) {
       $string .= $chars[rand(0, $size - 1)];

   }
   return $string; 
}

$password = random_string($string)
?>
