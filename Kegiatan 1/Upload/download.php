<?php

    $myDir = "c:/xampp/htdocs/PWD/Kegiatan 1/Upload/$nama_file";
    $dir = opendir($myDir);
    echo "Isi folder (klik link untuk download : <br>"; 
    while($tmp = readdir($dir)){
        echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
    }
    closedir($dir);

    echo "<br><a href ='donwnload.php'>Download</a>";

?>
