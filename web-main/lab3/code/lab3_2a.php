<?php
session_start();
if ($_POST['Our_text']) {
    $text = trim($_POST['Our_text']);
    $mas = explode(" ",$text);
    $str = implode($mas);
    echo (count($mas)), "\n";
    echo (($str)), "\n";
    echo mb_strlen($str,'UTF-8');
}