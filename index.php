<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>text tool</title>
    <meta name="keywords" content="najlepszy, best, text, tekst, narzędzie" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="Marcin Grelewicz" />
    <link href="style/style.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="page">

    <?php
    session_start();
    setcookie('scookie', '', time() + 360);
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
    ?>

    <div id="topunit">
        <h1>NARZĘDZIE DO ANALIZY I TRANSFORMACJI TEKSTU</h1>
    </div>

    <div id="rightunit">
        <br/><br/>
        <fieldset style="border: 1px solid grey; width: 280px">
        <i style="color: lightgray; text-shadow: 2px 2px black"><center><br/> Panel użytkownika </center></i><br/><br/><br/>
        <br/><center><b><a href='file_upload.php'> Załaduj plik z dysku </a></b></center><br/>                
            <br/><center><b><a href='file_preview.php'> Przeglądaj cały plik  </a></b></center><br/>
			<br/><center><b><a href='file_download.php'> Przejdź do strony pobierania </a></b></center><br/><br/><br/>
			<br/><center><i><a href='direct-download.php'> Natychmiastowe pobranie </a></i></center><br/>
            <br/><center><i><a href='user-manual.php'> Instrukcje użycia </a></i></center><br/>
            <br/><center><b></b></center>
		<br/><br/>

        <br/><br/><center><i><a  style="font-size: small" href='leave_message.php'> Masz uwagi / sugestie? Zostaw wiadomość </a></i></center><br/>
        </fieldset>

    </div id="rightunit">

    <div id="leftunit">
        <br/>
        <fieldset style="border: 1px solid grey; width: 280px">
            <br/><i style="color: lightgray; text-shadow: 2px 2px black">Panel skryptów </i><br/><br/>
            <h3><b>Wybierz polecenie:</b>
            <br/>
            <form name="form1" action="" method="post">
                                <h5><b>Transformacje</b></h5>
                <select name="kategoria1:">
                    <option value="">- wybierz opcję -</option>
                    <option value="skrypt1">Wszystkie litery wielkie</option>
                    <option value="skrypt2">Wszystkie litery małe</option>
                    <option value="skrypt3">Koduj losowo znaki</option>
                    <option value="skrypt4">Ustaw wyrazy w kolumnę</option>
					<option value="skrypt5">Konwersja polskich znaków</option>
                </select>
                <input type="submit" name="kat1" value="Apply" />
            </form>
                <?php
                $input = $_SESSION['input'];
                if (isset($_POST['kat1'])) {
                    if ($_POST['kategoria1:'] == "skrypt1") {
						$output1 = strtoupper($input);
                        $output = $output1;
                    }
                    else if ($_POST['kategoria1:'] == "skrypt2") {
						$output2 = strtolower($input);
                        $output = $output2;
                    }
                    else if ($_POST['kategoria1:'] == "skrypt3") {
						$output3 = str_rot13($input);
                        $output = $output3;					
                    }
                    else if ($_POST['kategoria1:'] == "skrypt4") {
                       $output4 = preg_replace("/\s/", "\n", $input);
                       $output = $output4;					
                    }
					else if ($_POST['kategoria1:'] == "skrypt5") {
                       $output5a = preg_replace("/ą/", "a", $input); 
					   $output5b = preg_replace("/ć/", "c", $output5a); 
					   $output5c = preg_replace("/ę/", "e", $output5b); 
					   $output5d = preg_replace("/ł/", "l", $output5c); 
					   $output5e = preg_replace("/ń/", "n", $output5d); 
					   $output5f = preg_replace("/ó/", "o", $output5e); 
					   $output5g = preg_replace("/ś/", "s", $output5f); 
					   $output5h = preg_replace("/ź/", "z", $output5g); 
					   $output5i = preg_replace("/ż/", "z", $output5h);
					   $output5j = preg_replace("/Ą/", "A", $output5i); 
					   $output5k = preg_replace("/Ć/", "C", $output5j); 
					   $output5l = preg_replace("/Ę/", "E", $output5k); 
					   $output5m = preg_replace("/Ł/", "L", $output5l); 
					   $output5n = preg_replace("/Ń/", "N", $output5m); 
					   $output5o = preg_replace("/Ó/", "O", $output5n); 
					   $output5p = preg_replace("/Ś/", "S", $output5o); 
					   $output5q = preg_replace("/Ź/", "Z", $output5p); 
					   $output5r = preg_replace("/Ż/", "Z", $output5q); 
                       $output = $output5r;					
                    }
					
				    $_SESSION['output'] = $output;
                }
                ?>
            <br/>
            <form name="form2" action="" method="post">
                <h5><b>Usuwanie znaków</b></h5>
                <select name="kategoria2:">
                    <option value="">- wybierz opcję -</option>
                    <option value="skrypt6">Usun tagi</option>
                    <option value="skrypt7a">Usun przecinki</option>
					<option value="skrypt7b">Usun kropki</option>
					<option value="skrypt7c">Usun dwukropki</option>
					<option value="skrypt7d">Usun średniki</option>
                    <option value="skrypt8">Usun nadmiarowe biale znaki</option>
                    <option value="skrypt9">Usun spacje</option>
                    <option value="skrypt10">Usun nie-słowa</option>
                    <option value="skrypt11">Usun cyfry</option>
					<option value="skrypt12">Usun wszystko poza cyframi</option>
					<option value="skrypt13">Usun myślniki</option>
					<option value="skrypt14">Usun podkreślniki</option>
					<option value="skrypt15">Usun polskie znaki</option>
					<option value="skrypt16">Usun znaki inne niż ASCII</option>
                </select>
                <input type="submit" name="kat2" value="Apply" />
            </form>
                <?php
				$input = $_SESSION['input'];
                if (isset($_POST['kat2'])) {
                    if ($_POST['kategoria2:'] == "skrypt6") {
						$output6 = preg_replace("/<..>/", "", $input);
						
						$output = $output6;
                    }
                    else if ($_POST['kategoria2:'] == "skrypt7a") {
						$pattern = "/,/";
						$replacement = "";
						$output7a = preg_replace($pattern, $replacement, $input);
						$output = $output7a;
                    }
					else if ($_POST['kategoria2:'] == "skrypt7b") {
						$pattern = "/\./";
						$replacement = "";
						$output7b = preg_replace($pattern, $replacement, $input);
						$output = $output7b;
                    }
					else if ($_POST['kategoria2:'] == "skrypt7c") {
						$pattern = "/:/";
						$replacement = "";
						$output7c = preg_replace($pattern, $replacement, $input);
						$output = $output7c;
                    }
					else if ($_POST['kategoria2:'] == "skrypt7d") {
						$pattern = "/;/";
						$replacement = "";
						$output7d = preg_replace($pattern, $replacement, $input);
						$output = $output7d;
                    }
                    else if ($_POST['kategoria2:'] == "skrypt8") {
 //                       exec('python 3-whitespacesremove.py');
						$pattern = "/\s\s+/";
						$replacement = "";
						$output8 = preg_replace($pattern, $replacement, $input);
						$output = $output8;						
                    }
                    else if ($_POST['kategoria2:'] == "skrypt9") {
 //                       exec('python 13-allspacesremove.py');
						$pattern = "/ /";
						$replacement = "";
						$output9 = preg_replace($pattern, $replacement, $input);
						$output = $output9;
                    }
                    else if ($_POST['kategoria2:'] == "skrypt10") {
 //                       exec('python 12-tabremove.py');
						$pattern = "/\W/";
						$replacement = "";
						$output10 = preg_replace($pattern, $replacement, $input);
						$output = $output10;
                    }
                    else if ($_POST['kategoria2:'] == "skrypt11") {
 //                       exec('python 10-digitsremove.py');
						$pattern = "/[0-9]/";
						$replacement = "";
						$output11 = preg_replace($pattern, $replacement, $input);
						$output = $output11;
                    }
					else if ($_POST['kategoria2:'] == "skrypt12") {
						$pattern = "/\D/";
						$replacement = " ";
						$output12 = preg_replace($pattern, $replacement, $input);
						$output = $output12;
                    }
						else if ($_POST['kategoria2:'] == "skrypt13") {
						$pattern = "/-/";
						$replacement = "";
						$output13 = preg_replace($pattern, $replacement, $input);
						$output = $output13;
                    }
						else if ($_POST['kategoria2:'] == "skrypt14") {
						$pattern = "/_/";
						$replacement = "";
						$output14 = preg_replace($pattern, $replacement, $input);
						$output = $output14;
                    }
						else if ($_POST['kategoria2:'] == "skrypt15") {
						$charset = "UTF-8";
						$output15 = iconv($charset, "ASCII//TRANSLIT//IGNORE", $input);						
						$output = $output15;
                    }
						else if ($_POST['kategoria2:'] == "skrypt16") {
						$output16 = preg_replace('@[^\0-\x80]@u', "", $input); 
						$output = $output16;
                    }					
					
					$_SESSION['output'] = $output;
                }
                ?>
            <br/>
            <form name="form3" action="" method="post">
                <h5><b>Zamiana znaków</b></h5>
                <select name="kategoria3:">
                    <option value="">- wybierz opcję -</option>
                    <option value="skrypt17a">Zamień przecinki na średniki</option>
					<option value="skrypt17b">Zamień kropki na ukośniki</option>
					<option value="skrypt17c">Zamień dwukropki na czterokropki</option>
					<option value="skrypt17d">Zamień średniki na przecinki</option>
                    <option value="skrypt18">Zamień biale znaki na myślniki</option>
                    <option value="skrypt19">Zamień spacje na podkreślniki</option>
                    <option value="skrypt20">Zamień spacje na tabulatory</option> 
                    <option value="skrypt21">Zamień cyfry na pytajniki</option>
					<option value="skrypt22">Zamień nie-cyfry na myślniki</option>
					<option value="skrypt23">Zamień myślniki na podkreślniki</option>
					<option value="skrypt24">Zamień podkreślniki na myślniki</option>
					<option value="skrypt26">Zamień tabulatory na spacje</option>
                </select>
                <input type="submit" name="kat3" value="Apply" />
            </form>
                <?php
				$input = $_SESSION['input'];
                if (isset($_POST['kat3'])) {
                    if ($_POST['kategoria3:'] == "skrypt17a") {
						$pattern = "/,/";
						$replacement = ";";
						$output17a = preg_replace($pattern, $replacement, $input);
						$output = $output17a;
                    }
					else if ($_POST['kategoria3:'] == "skrypt17b") {
						$pattern = "/\./";
						$replacement = "/";
						$output17b = preg_replace($pattern, $replacement, $input);
						$output = $output17b;
                    }
					else if ($_POST['kategoria3:'] == "skrypt17c") {
						$pattern = "/:/";
						$replacement = "::";
						$output17c = preg_replace($pattern, $replacement, $input);
						$output = $output17c;
                    }
					else if ($_POST['kategoria3:'] == "skrypt17d") {
						$pattern = "/;/";
						$replacement = ",";
						$output17d = preg_replace($pattern, $replacement, $input);
						$output = $output17d;
                    }
                    else if ($_POST['kategoria3:'] == "skrypt18") {
 //                       exec('python 3-whitespacesremove.py');
						$pattern = "/\s/";
						$replacement = "-";
						$output18 = preg_replace($pattern, $replacement, $input);
						$output = $output18;						
                    }
                    else if ($_POST['kategoria3:'] == "skrypt19") {
 //                       exec('python 13-allspacesremove.py');
						$pattern = "/ /";
						$replacement = "_";
						$output19 = preg_replace($pattern, $replacement, $input);
						$output = $output19;
                    }
                    else if ($_POST['kategoria3:'] == "skrypt20") {
						$pattern = "/ /";
						$replacement = "\t";
						$output20 = preg_replace($pattern, $replacement, $input);
						$output = $output20;
                    }
                    else if ($_POST['kategoria3:'] == "skrypt21") {
 //                       exec('python 10-digitsremove.py');
						$pattern = "/[0-9]/";
						$replacement = "?";
						$output21 = preg_replace($pattern, $replacement, $input);
						$output = $output21;
                    }
					else if ($_POST['kategoria3:'] == "skrypt22") {
						$pattern = "/\D/";
						$replacement = "-";
						$output22 = preg_replace($pattern, $replacement, $input);
						$output = $output22;
                    }
						else if ($_POST['kategoria3:'] == "skrypt23") {
						$pattern = "/-/";
						$replacement = "_";
						$output23 = preg_replace($pattern, $replacement, $input);
						$output = $output23;
                    }
						else if ($_POST['kategoria3:'] == "skrypt24") {
						$pattern = "/_/";
						$replacement = "-";
						$output24 = preg_replace($pattern, $replacement, $input);
						$output = $output24;
                    }
						else if ($_POST['kategoria3:'] == "skrypt26") {
						$output26 = preg_replace("/\t/", " ", $input); 
						$output = $output26;
                    }					
					
					$_SESSION['output'] = $output;
                }
                ?>
            <br/>
            <form name="form4" action="" method="post">
                <h5><b>Konwersje dat: miesiące</b></h5>
                <select name="kategoria4:">
                    <option value="">- wybierz opcję -</option>
                    <option value="skrypt41">słowa na cyfry</option>
                    <option value="skrypt42">cyfry na słowa</option>
                    <option value="skrypt43">polskie na angielskie</option>
                    <option value="skrypt44">angielskie na polskie</option>
                    <option value="skrypt45">arabskie na rzymskie</option>
					<option value="skrypt46">rzymskie na arabskie</option>
                </select>
                <input type="submit" name="kat4" value="Apply" />
            </form>
                <?php
				$input = $_SESSION['input'];
                if (isset($_POST['kat4'])) {
                    if ($_POST['kategoria4:'] == "skrypt41") {
                       $output41a = preg_replace("/ stycznia /", ".01.", $input); 
					   $output41b = preg_replace("/ lutego /", ".02.", $output41a);
					   $output41c = preg_replace("/ marca /", ".03.", $output41b); 
					   $output41d = preg_replace("/ kwietnia /", ".04.", $output41c); 
					   $output41e = preg_replace("/ maja /", ".05.", $output41d); 
					   $output41f = preg_replace("/ czerwca /", ".06.", $output41e); 
					   $output41g = preg_replace("/ lipca /", ".07.", $output41f); 
					   $output41h = preg_replace("/ sierpnia /", ".08.", $output41g); 
					   $output41i = preg_replace("/ września /", ".09.", $output41h);
					   $output41j = preg_replace("/ października /", ".10.", $output41i); 
					   $output41k = preg_replace("/ listopada /", ".11.", $output41j); 
					   $output41l = preg_replace("/ grudnia /", ".12.", $output41k); 
                       $output = $output41l;		
                    }
                    else if ($_POST['kategoria4:'] == "skrypt42") {
                       $output42a = preg_replace("/.01./", " stycznia ", $input); 
					   $output42b = preg_replace("/.02./", " lutego ", $output42a); 
					   $output42c = preg_replace("/.03./", " marca ", $output42b); 
					   $output42d = preg_replace("/.04./", " kwietnia ", $output42c); 
					   $output42e = preg_replace("/.05./", " maja ", $output42d); 
					   $output42f = preg_replace("/.06./", " czerwca ", $output42e); 
					   $output42g = preg_replace("/.07./", " lipca ", $output42f); 
					   $output42h = preg_replace("/.08./", " sierpnia ", $output42g); 
					   $output42i = preg_replace("/.09./", " września ", $output42h);
					   $output42j = preg_replace("/.10./", " października ", $output42i); 
					   $output42k = preg_replace("/.11./", " listopada ", $output42j); 
					   $output42l = preg_replace("/.12./", " grudnia ", $output42k); 
                       $output = $output42l;
                    }
                    else if ($_POST['kategoria4:'] == "skrypt43") {
                       $output43a = preg_replace("/ stycznia /", " January ", $input); 
					   $output43b = preg_replace("/ lutego /", " February ", $output43a); 
					   $output43c = preg_replace("/ marca /", " March ", $output43b); 
					   $output43d = preg_replace("/ kwietnia /", " April ", $output43c); 
					   $output43e = preg_replace("/ maja /", " May ", $output43d); 
					   $output43f = preg_replace("/ czerwca /", " June ", $output43e); 
					   $output43g = preg_replace("/ lipca /", " July ", $output43f); 
					   $output43h = preg_replace("/ sierpnia /", " August ", $output43g); 
					   $output43i = preg_replace("/ września /", " September ", $output43h);
					   $output43j = preg_replace("/ października /", " October ", $output43i); 
					   $output43k = preg_replace("/ listopada /", " November ", $output43j); 
					   $output43l = preg_replace("/ grudnia /", " December ", $output43k); 
                       $output = $output43l;
                    }
                    else if ($_POST['kategoria4:'] == "skrypt44") {
                       $output44a = preg_replace("/ January /", " stycznia ", $input); 
					   $output44b = preg_replace("/ February /", " lutego ", $output44a); 
					   $output44c = preg_replace("/ March /", " marca ", $output44b); 
					   $output44d = preg_replace("/ April /", " kwietnia ", $output44c); 
					   $output44e = preg_replace("/ May /", " maja ", $output44d); 
					   $output44f = preg_replace("/ June /", " czerwca ", $output44e); 
					   $output44g = preg_replace("/ July /", " lipca ", $output44f); 
					   $output44h = preg_replace("/ August /", " sierpnia ", $output44g); 
					   $output44i = preg_replace("/ September /", " września ", $output44h);
					   $output44j = preg_replace("/ October /", " października ", $output44i); 
					   $output44k = preg_replace("/ November /", " listopada ", $output44j); 
					   $output44l = preg_replace("/ December /", " grudnia ", $output44k); 
                       $output = $output44l;
                    }
                    else if ($_POST['kategoria4:'] == "skrypt45") {
                       $output45a = preg_replace("/.01./", " I ", $input); 
					   $output45b = preg_replace("/.02./", " II ", $output45a); 
					   $output45c = preg_replace("/.03./", " III ", $output45b); 
					   $output45d = preg_replace("/.04./", " IV ", $output45c); 
					   $output45e = preg_replace("/.05./", " V ", $output45d); 
					   $output45f = preg_replace("/.06./", " VI ", $output45e); 
					   $output45g = preg_replace("/.07./", " VII ", $output45f); 
					   $output45h = preg_replace("/.08./", " VIII ", $output45g); 
					   $output45i = preg_replace("/.09./", " IX ", $output45h);
					   $output45j = preg_replace("/.10./", " X ", $output45i); 
					   $output45k = preg_replace("/.11./", " XI ", $output45j); 
					   $output45l = preg_replace("/.12./", " XII ", $output45k); 
                       $output = $output45l;
                    }
					
					else if ($_POST['kategoria4:'] == "skrypt46") {
                       $output46a = preg_replace("/ I /", ".01.", $input); 
					   $output46b = preg_replace("/ II /", ".02.", $output46a); 
					   $output46c = preg_replace("/ III /", ".03.", $output46b); 
					   $output46d = preg_replace("/ IV /", ".04.", $output46c); 
					   $output46e = preg_replace("/ V /", ".05.", $output46d); 
					   $output46f = preg_replace("/ VI /", ".06.", $output46e); 
					   $output46g = preg_replace("/ VII /", ".07.", $output46f); 
					   $output46h = preg_replace("/ VIII /", ".08.", $output46g); 
					   $output46i = preg_replace("/ IX /", ".09.", $output46h);
					   $output46j = preg_replace("/ X /", ".10.", $output46i); 
					   $output46k = preg_replace("/ XI /", ".11.", $output46j); 
					   $output46l = preg_replace("/ XII /", ".12.", $output46k); 
                       $output = $output46l;
                    }
					$_SESSION['output'] = $output;
                }
                ?>
                <form name="restoreForm" action="" method="post">
                    <h5><b>Przywróć do stanu bazowego</b></h5>
                    <input type="submit" name="restoreSubmit" value="Apply" />
                </form>
                <br/>

            <br/><br/><br/></h3>
        </fieldset>
    </div>

    <div id="centralunit">

        <br/><br/>
        <br/><b style="color: orangered; text-shadow: 1px 1px black">Podgląd tekstu bazowego:</b><br/>
            <?php
            $input = $_SESSION['base_input'];
            echo '<textarea>' . htmlspecialchars($input). '</textarea>';
            ?>
        <br/>
        <br/><b style="color: orangered; text-shadow: 1px 1px black">Podgląd działania skryptu:</b><br/>
        <textarea><?php
        $output = $_SESSION['output'];
        if (isset($_POST['kat1']) || isset($_POST['kat2']) || isset($_POST['kat3']) || isset($_POST['kat4'])) {
            echo htmlspecialchars($output);
        }
        $_SESSION['input'] = $output;
        ?></textarea>
        <?php
        if(isset($_POST['restoreSubmit'])) {
            echo 'KUPA';
            $_SESSION['input'] = $_SESSION['base_input'];
        }
        ?>
        <br/><br/><br/><br/><br/><br/>
    </div id="centralunit">

    <div id="bottomunit">
        <h5>Edyta Bartoś, Aleksandra Formela, Marcin Grelewicz * Informatyka zaoczna * rok 3<br/>
            Budowa i integracja systemów informatycznych * Projekt zaliczeniowy: Narzędzie optymalizacji tekstu</h5>
        <h4><b> &copy; PJATK * Wszelkie prawa zastrzeżone * </b></h4>
    </div>

</div id="page">
</body>
</html>