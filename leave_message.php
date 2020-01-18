<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Leave the message</title>
    <link href="style/style_message.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="page">

<?php
session_start();
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
        <h2>Zostaw wiadomość:</h2>

            <form action="" method="post">
                Twoje imię : <input type="text" name="name"><br/><br/>
                Twój e-mail: <input type="text" name="email"><br/><br/>
                Wiadomość:<br><textarea rows="5" name="message" cols="30"></textarea><br/><br/>
                <input type="submit" name="submit" value="Wyślij">
            </form>
            <?php
            if(isset($_POST['submit'])){
                $to = "s17692@pjwstk.edu.pl; s17699@pjwstk.edu.pl";
                $from = $_POST['email'];
                $name = $_POST['name'];
                $subject = "Form submission";
                $subject2 = "Copy of your form submission";
                $message = $name . " napisał:" . "\n\n" . $_POST['message'];
                $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

                $headers = "From:" . $from;
                $headers2 = "From:" . $to;
                mail($to,$subject,$message,$headers);
                mail($from,$subject2,$message2,$headers2);
                header('Location: thanx.php');
            }
            ?>
        <br/><br/><br/>
        <a href='index.php'> Wróć na stronę główną </a>
        <br/>
    </div id="centralunit">

    <div id="bottomunit">
        <h5>Edyta Bartoś, Aleksandra Formela, Marcin Grelewicz * Informatyka zaoczna * rok 3<br/>
            Budowa i integracja systemów informatycznych * Projekt zaliczeniowy: Narzędzie optymalizacji tekstu</h5>
        <h4><b> &copy; PJATK * Wszelkie prawa zastrzeżone * </b></h4>
    </div>

</div id="page">
</body>
</html>