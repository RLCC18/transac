<?php
    require_once './resource/php/init.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="./resource/css/transaction.css">
    <script src="https://kit.fontawesome.com/9622798f89.js"></script>
    <title>Queueing System</title>
  </head>
  <body>

    <section>
      <nav class="navbar nav-dash">
        <a href="./queue.php" target="_blank">Dashboard</a>
      </nav>
      
      <?php user_valid(); ?>
      <div class="container-fluid">
        <div class="row">
          <div class="card">
            <div class="pl-5 pr-5">
            </div>
            <form class="form mt-5 mb-2" method="post">
                <div class="form-row">
                  <input class="form-control mb-5 ml-5 mr-5" placeholder="Enter your name" name="userbox">
                </div>
                <div class="transact">
                  <button class="btn btn-submit" type="submit" name="withbtn">
                      WITHDRAW
                  </button>
                  <button class="btn btn-submit" type="submit" name="depobtn">
                      DEPOSIT
                  </button>
                </div>  
            </form>
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
</html>
