<?php
/*
* @Software: CopyKitty
* @Author: phpjsnerd
* @Email: phpjsnerd@gmail.com
*/
if(!@copy('http://example.com/archive.zip','archive.zip'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "File copied from remote!";
}
?>
