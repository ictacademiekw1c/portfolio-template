     
<?php
    
function printMenu($currentPagina='Home') {
echo <<<MENU
   <ul class="vert-one">
          <li><a href="#" title="Portfolio menu" class="current">Home</a></li>
          <li><a href="#" title="Portfolio menu">Over mij</a></li>
          <li><a href="#" title="Portfolio menu">Cijferlijst</a></li>
          <li><a href="#" title="Portfolio menu">Contact</a></li>
          <li><a href="#" title="Portfolio menu">Hobbies</a></li>
          <li><a href="#" title="Portfolio menu">Werkervaring</a></li>
          <li><a href="#" title="Portfolio menu">Studie</a></li>
        </ul>
MENU;
}


function printJaar() {
    date_default_timezone_set('Europe/Amsterdam');
    echo date('Y');
}

function printGroet() {

    @session_start();
    if (isset($_SESSION['gebruiker'])) {
        $gebruiker = $_SESSION['gebruiker']; 
        $link = "<a href='loguit.php'>Uitloggen</a>";
    } else {
        $gebruiker = "anonieme bezoeker";
        $link = "<a href='login.php'>Inloggen</a>";
    }

    echo "Welkom <span>$gebruiker</span>&nbsp;$link";
}
?>

