<?php
    $server="localhost";
    $user="root";
    $password="";
    $database="atvi_blog";

    //$server="sql300.infinityfree.com";
    //$user="if0_37572174";
    //$password="Hak1m123";
    //$database="if0_37572174_db_buku";

    
    $con=mysqli_connect($server,$user,$password,$database) or
    die ("hidupkan server");
?>