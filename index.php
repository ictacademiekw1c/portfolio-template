<?php
    include('includes/functies.php');
    include('includes/head.php');
?>
<div id="wrapper" class="clearfix">
    <div id="maincol">
        <div>
        <!-- content gedeelte die voor iedere pagina verschillend is -->
        <h1>Portfolio Abu Saebu</h1>

        <p>Ik ben Abu Saebu. Nu een fulltime docent, maar tot voor kort nog senior webdeveloper en senior frontend developer bij verschillende internetbedrijven en ook als zelfstandige ondernemer.</p>

        <p>Het ontwerpen en programmeren van mobiele en internettoepassingen is zowel mijn hobby als mijn werk.</p>

        </div>
         
    </div>
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
