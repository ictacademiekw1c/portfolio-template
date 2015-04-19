<?php
    include('includes/functies.php');
    include('includes/head.php');
?>
<div id="wrapper" class="clearfix">
    <div id="maincol">
        <div>
        <!-- content gedeelte die voor iedere pagina verschillend is -->
        <h1>Titel van de pagina</h1>

        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

        <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>

        </div>
         
    </div>
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
