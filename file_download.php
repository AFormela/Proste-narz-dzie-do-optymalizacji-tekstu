<!DOCTYPE html>
<?php
session_start();
        if (isset($_SESSION['output'])){
            echo " ";
        }else {
            header('location: index.php');
        }
?>

<html lang="pl">
<head>
    <title>Download file</title>
    <link href="style/style_download.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="page">

<div id="topunit">
    <h1>NARZĘDZIE DO ANALIZY I TRANSFORMACJI TEKSTU</h1>
</div>

<div id="rightunit">
</div id="rightunit">

<div id="leftunit">
</div>

    <div id="centralunit">
        <center>
            <br/><br/><br/><br/><br/>
            <h2>Pobierz swój plik:</h2>
            <center>

    <br/><br/>
    <FORM action="" method="POST">
        <center>
            <INPUT style="font-size: x-large" name="dwnld" type="submit" value=" DOWNLOAD ">
            <?php
            $output = $_SESSION['output'];
            if (isset($_POST['dwnld'])) {
                header('Location: direct-download.php');
			}
            ?>
        </center>
    </FORM>

    <br/><br/><br/><br/><br/>
    <a href='index.php'> Wróć na stronę główną </a>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </div id="centralunit">


    <div id="bottomunit">
        <h5>Edyta Bartoś, Aleksandra Formela, Marcin Grelewicz * Informatyka zaoczna * rok 3<br/>
            Budowa i integracja systemów informatycznych * Projekt zaliczeniowy: Narzędzie optymalizacji tekstu</h5>
        <h4><b> &copy; PJATK * Wszelkie prawa zastrzeżone * </b></h4>
    </div>


</div id="page">
</body>
</html>
