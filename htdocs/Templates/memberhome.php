<!DOCTYPE html>
    <html>
    <?php
    include_once('defaults/head.php');
    ?>
    <body>
        <div class="container-fluid background">
            <header>
            <?php
            include_once ('defaults/menu.php');
            ?>
            </header>
            <main>
            <div class="container text">
                <div class="row">
                    <div class="col-sm imag">
                    <h4>Sportcenter HealthOne</h4>
                   welkom 
                   <?php echo $name; ?> bij de sportschool HealthOne. jij bent nu ingelogd
                    </div>
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                        <img class="homeImage" src='/img/Logo.jpg' style="height:60vh" />
                    </div>
                </div>
            </div>
            <?php
            include_once ('defaults/footer.php');
            ?>
            </main>
        </div>
    </body>
</html>
