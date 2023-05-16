<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
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
=======
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="./resource/css/index.css">
    <script src="https://kit.fontawesome.com/9622798f89.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,700;1,100;1,400&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
    <title>Queueing System</title>
  </head>
  <body>

    <section>
      <nav class="navbar nav-dash">
        <i class="fa-solid fa-house"></i>
        <a href="./queue.php" class="board ml-3" target="_blank">Dashboard</a>
      </nav>

      <div class="container-fluid">
        <div class="row">
          <div class="card">
            <div class="transact">
              <form class="form" method="post" action="transac_1.php">
                <button class="btn btn-submit" type="submit"><b>Withdraw</b></button>
              </form>
              <form class="form" method="post" action="transac_2.php">
                <button class="btn btn-submit" type="submit"><b>Deposit</b></button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <footer id="sticky-footer" class="py-3 bg-dark text-white-50 fixed-bottom slide-in-right">
        <div class="container text-center">
          <div class="row">
            <div class="col col-sm-5 text-left text-light">
              <small>Copyright &copy;Westview University     All Rights Reserved 2023</small>
            </div>
            <div class="col text-right text-light">
              <small>Group 4: Marcus Bustos, Ralph Cruz, Angelique Gabriel, Krizia Lleva, Roderick Nucup, Emman Siva.</small>
            </div>
          </div>
        </div>

      </footer>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
>>>>>>> b2ffdbb5ee7ae882d00fc71d11413aa837cc18ff
</html>
