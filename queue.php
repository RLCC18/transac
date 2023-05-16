<?php
    require_once './resource/php/init.php';
    $view = new view();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="refresh" content="60; URL=./queue.php">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="./resource/css/dash.css">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
        <title>Queue Dashboard</title>
    </head>
    <body>
        <!--
            Please note na tinetest ko lng kung gumagana ung code, baguhin nyo na lng ✌
            Kung gusto nyo idesign ung table puntahan nyo lng ung view.php
        -->
        <header class="row-fluid">
            <nav class="navbar navbar-expand">
                <span class="navbar-brand text-white">Highland Bank</span>
                <ul class="ml-auto navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="queue.php" target="_blank">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php" target="_blank">Display</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="container">
            <?php combo(); ?>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php
                        $view->viewPend();
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                        $view->viewDone();
                    ?>
                </div>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>
