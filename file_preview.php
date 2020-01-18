<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Preview</title>
    <link href="style/style_preview.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="page">

<?php
session_start();
        if (isset($_SESSION['output'])){
            echo " ";
        }else {
            header('location: index.php');
        }
?>

<div id="topunit">
    <h1>NARZĘDZIE DO ANALIZY I TRANSFORMACJI TEKSTU</h1>
</div>

<div id="rightunit">
</div id="rightunit">

<div id="leftunit">
</div>

    <div id="centralunit">
        <center>
            <br/>
            <h2>Twój plik z wybranymi filtrami:</h2><br/><br/>
            <center>
            <textarea name="preview"><?php
                    $output = $_SESSION['output'];
                    echo htmlspecialchars($output);
                    ?></textarea>
			</center>
            <br/>
            <br/><a href='file_download.php'> Pobierz plik </a><br/>
            
    <br/><a href='index.php'> Wróć na stronę główną </a><br/>
    </div id="centralunit">
	<br/><br/>
    <div id="bottomunit">
        <h5>Edyta Bartoś, Aleksandra Formela, Marcin Grelewicz * Informatyka zaoczna * rok 3<br/>
            Budowa i integracja systemów informatycznych * Projekt zaliczeniowy: Narzędzie optymalizacji tekstu</h5>
        <h4><b> &copy; PJATK * Wszelkie prawa zastrzeżone * </b></h4>
    </div>

</div id="page">
</body>
</html>