<?php
include('includes/functies.php');
 
 $msg ='';
 //de gebruikers die mogen inloggen met hun superveilige wachtwoorden
 $gebruikers = array(
    'Bart' => 'traB',
    'Maikel' => 'lekiaM',
    'Sam'  => 'maS',
    'Stan' => 'natS'
 );

 if (isset($_POST['verzend'])) {
     
     //$msg = 'Formulier is verzonden en nu kunnen we pas het inloggen testen.';
     $isGeldig = FALSE;
     foreach($gebruikers as $key => $value) {
         if($_POST['gebruikersnaam'] == $key && $_POST['wachtwoord'] == $value) {
             $isGeldig = TRUE;
             break;
         }
     }
     if ($isGeldig==TRUE) {
         @session_start();
         $_SESSION['gebruiker'] = $_POST['gebruikersnaam'];
         header('location: index.php');
     }

 }

//start html pagina
include('includes/head.php');
echo <<<HTML
<div id="wrapper" class="clearfix">
    <div id="maincol">
        <div>
        <!-- content gedeelte die voor iedere pagina verschillend is -->
        <h1>Inloggen</h1>
        <p>
        <form method='post' action='login.php'>
	        <label>Gebruikersnaam: </label><input name='gebruikersnaam' type='text' value=''><br>
	        <label>Wachtwoord: </label><input name='wachtwoord' type='password' value=''>
	        <input type='submit' value='verzend' name='verzend'>
        </form>
        </p>
        <p>$msg</p>
        </div>         
    </div>
HTML;
?>
<!-- einde contentgedeelte -->
    <div id="leftcol"> 
        <?php
            printMenu();
        ?>
    </div>
</div>
<?php
    include('includes/footer.php');
?>
