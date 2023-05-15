<?php
    require_once './resource/php/init.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="./resource/css/main.css">
        <title>Transaction</title>
    </head>
    <body>
        <!--
            Please note na tinetest ko lng kung gumagana ung code, baguhin nyo na lng ✌
        -->
        <header class="row-fluid">
            <nav class="navbar navbar-expand bg-dark">
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
            <?php user_valid(); ?>
            <form class="form mt-5 mb-2" method="post">
                <div class="form-group">
                <input class="form-control" placeholder="Enter your name" name="userbox">
                </div>
                <button class="btn btn-primary" type="submit" name="withbtn">
                    WITHDRAW
                </button>
                <button class="btn btn-primary" type="submit" name="depobtn">
                    DEPOSIT
                </button>
            </form>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>
