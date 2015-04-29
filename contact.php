<?php
    include('includes/functies.php');
    include('includes/head.php');

    $msg = "Stel hier je vraag en we zullen je snel terugmailen";
  
    //var_dump($_POST);

    //validatie van het contactformulier
    if (isset($_POST['verzend'])) {
        $msg = '';


        if (empty($_POST['naam']) == TRUE) {
            $msg .= "Naam is niet ingevuld";
        }
       if (empty($_POST['email']) == TRUE) {
            $msg .= "<br>Email is niet ingevuld";
        }
       if (empty($_POST['vraag']) == TRUE) {
            $msg .= "<br>Vraag is niet ingevuld";
        }

        if (strpos($_POST['email'],"@") == FALSE || strpos($_POST['email'],"@") == 0 ) {
            $msg .= "<br>Ongeldig emailadres, geen @ of verkeerde positie"; 
        }

         if (strpos($_POST['email'],".") == FALSE) {
            $msg .= "<br>Geen . in emailadres"; 
        }

        if (empty($msg)) {
            header('location: bedankt.php');
        }
    }

echo <<<HTML
<div id="wrapper" class="clearfix">
    <div id="maincol">
        <div>
        <!-- content gedeelte die voor iedere pagina verschillend is -->
        <h1>Contactpagina</h1>

        <p>$msg</p>

        <p><form method="post" action="contact.php">
            <label>Naam: </label><input name="naam" type="text">
            <label>Email: </label><input name="email" type="text">
            <label>Vraag: </label><textarea name="vraag"></textarea>
            <input type="submit" name="verzend">
        </form>
        </p>

        </div>
         
    </div>
HTML;
?>
    <!-- einde contentgedeelte -->
    <div id="leftcol"> 
        <?php
            printMenu('Home');
        ?>
    </div>
</div>
<?php
    include('includes/footer.php');
?>
