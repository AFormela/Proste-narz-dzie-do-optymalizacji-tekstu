<!DOCTYPE html>
<html lang="pl">
<head>
    <title> Load File </title>
    <link href="style/style_upload.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="page">

    <?php
    session_start();
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
    include("DocxConversion.php");

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
            <h3>Załaduj plik tekstowy:</h3>

<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="plik" /><br/><br/><br/>
<input type="submit" value="Prześlij"/><br/><br/><br/>
</form>
<?php
$max_rozmiar = 500000;
if (is_uploaded_file($_FILES['plik']['tmp_name'])) {

    if ($_FILES['plik']['size'] > $max_rozmiar) {
        echo "<br/><br/><br/>";
        echo 'Błąd! Plik jest za duży!';
    } else {
 //       echo "<br/><br/><br/>";
 //       echo 'Odebrano plik. o nazwie: '.$_FILES['plik']['name'];
 //       echo '<br/><br/>';
        if (isset($_FILES['plik']['type'])) {
            $targetFile = 'upload/' . $_FILES['plik']['name'];
            move_uploaded_file (  $_FILES['plik']['tmp_name'] , $targetFile);
                if(mime_content_type($targetFile) == "text/plain") {
                    $input = file_get_contents($targetFile);
                } else {
                    $docObj = new DocxConversion($targetFile);
                    $input = $docObj->convertToText();
                }
                  //name --> tmp_name //
                 $_SESSION['input'] = $input;
                 $_SESSION['base_input'] = $input;
         //           file_put_contents('input.txt', $input);
         //   file_put_contents('input".session_id(). ".txt', $input);
                 sleep(1);
                 header('Location: index.php');
            }
        }
    }
?>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  <a href='index.php'> Wróć na stronę główną </a>
  </center>

    </div id="centralunit">

    <div id="bottomunit">
        <h5>Edyta Bartoś, Aleksandra Formela, Marcin Grelewicz * Informatyka zaoczna * rok 3<br/>
            Budowa i integracja systemów informatycznych * Projekt zaliczeniowy: Narzędzie optymalizacji tekstu<br/>
        <b> &copy; PJATK * Wszelkie prawa zastrzeżone * </b></h5>
    </div>

</div id="page">
</body>
</html>