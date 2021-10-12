<?php
$myDir = "c:/xampp/htdocs/Prak-PWD/";
$dir = opendir($myDir);
echo "Isi folder klik link untuk download : ";
while($tmp = readdir($dir)){
echo "<a href='$tmp' target='_blank' download>$tmp</a><br>";
}
closedir($dir);
?>