
<?php


	session_start();

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
include("DocxConversion.php");


if (isset($_SESSION['output'])){

		$output = $_SESSION['output'];

	$format = "txt";
	$a = session_id();
	$filename = $a;
	$fullName = $filename . '.' . $format;
    header('Pragma: public');
    header("Content-Description: File Transfer");
    header("Content-Transfer-Encoding: binary");
    header('Expires: 0'); 
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0'); 
    header("Cache-Control: public");
    header('Content-Type: ' . $mime[$format]);
    header('Content-Disposition: attachment; filename="' . basename($fullName) . '"');
    echo $output;

	    }else {
            header('location: index.php');
			exit();
        }

				
 ?>


