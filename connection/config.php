<?php
date_default_timezone_set('Asia/Jakarta');
session_start();

$con = mysqli_connect('localhost','n1574959_kowalsky',')uFcxl6x2Org','n1574959_pesanportofolio');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}

function base_url($url = null){
    $base_url = "https://milki.pangahtani.net/";
    if($url != null){
        return $base_url."/".$url;
    }else{
        return $base_url;
    }
}
?>