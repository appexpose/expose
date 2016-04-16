<?php
echo "<h1>Index of Resources</h1>";
$path = "<ul>";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<li><a href='$path/$file'>$file</a></li>";
        $i++;
    }
}
closedir($dh);
$path = "</ul>";
?>
