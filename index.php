<?php
require_once("tsukamoto.php");

$hari = $_POST['hari'];

if(isset($_POST['timur1']) && isset($_POST["timur2"]) && isset($_POST["timur3"]) && isset($_POST["timur4"])) {
    $timur1 = $_POST['timur1'];
    $timur2 = $_POST['timur2'];
    $timur3 = $_POST['timur3'];
    $timur4 = $_POST['timur4'];

    $timurResult = Rule($timur1, $timur2, $timur3, $timur4);
    foreach($timurResult as $key => $lama) {
        if($key == $hari) {
            $timur[$key] = $lama;
        }
    }
}

if(isset($_POST['selatan1']) && isset($_POST["selatan2"]) && isset($_POST["selatan3"]) && isset($_POST["selatan4"])) {
    $selatan1 = $_POST['selatan1'];
    $selatan2 = $_POST['selatan2'];
    $selatan3 = $_POST['selatan3'];
    $selatan4 = $_POST['selatan4'];

    $selatanResult = Rule($selatan1, $selatan2, $selatan3, $selatan4);
    foreach($selatanResult as $key => $lama) {
        if($key == $hari) {
            $selatan[$key] = $lama;
        }
    }
}

if(isset($_POST['barat1']) && isset($_POST["barat2"]) && isset($_POST["barat3"]) && isset($_POST["barat4"])) {
    $barat1 = $_POST['barat1'];
    $barat2 = $_POST['barat2'];
    $barat3 = $_POST['barat3'];
    $barat4 = $_POST['barat4'];

    $baratResult = Rule($barat1, $barat2, $barat3, $barat4);
    foreach($baratResult as $key => $lama) {
        if($key == $hari) {
            $barat[$key] = $lama;
        }
    }
}

if(isset($_POST['utara1']) && isset($_POST["utara2"]) && isset($_POST["utara3"]) && isset($_POST["utara4"])) {
    $utara1 = $_POST['utara1'];
    $utara2 = $_POST['utara2'];
    $utara3 = $_POST['utara3'];
    $utara4 = $_POST['utara4'];

    $utaraResult = Rule($utara1, $utara2, $utara3, $utara4);
    foreach($utaraResult as $key => $lama) {
        if($key == $hari) {
            $utara[$key] = $lama;
        }
    }
}

function main() {
    global $timur, $selatan, $barat, $utara;

    // die(var_dump($timur))

    $arahs = array(
        "Timur" => $timur, 
        "Selatan" => $selatan, 
        "Barat" => $barat, 
        "Utara" => $utara
        );
    include 'view.php';
    // die(var_dump($arahs));
}

main();