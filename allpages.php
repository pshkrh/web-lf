<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lost & Found | Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css"</link>

    <!--Custom CSS--->
    <link rel="stylesheet" href="./css/style.css">

  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php" title="Get Back Your Lost Items">
        <img style="max-width:75px; margin-top: 0px;" src="./img/LFo.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 float-xs-right">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Sign In Modal -->

        <div class="container">
          <div class="modal fade" id="popUpWindow">
          <div class="modal-dialog">
              <div class="modal-content">

                  <!-- header -->
                  <div class="modal-header">
                    <h3 class="modal-title">Sign In</h3>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- body (form) -->
                  <div class="modal-body">
                      <form role="form" action="includes/login.php" method="POST">
                          <div class="form-group">
                              <input type="text" class="form-control" name="username" placeholder="Username" required>
                              <div class="invalid-feedback">
                                Please provide a valid username.
                              </div>
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" name="pwd" placeholder="Password" required>
                              <div class="invalid-feedback">
                                Please provide a valid password.
                              </div>
                          </div>
                          <a href="#" data-toggle="modal" data-target="#forgotWindow" data-dismiss="modal">Forgot Password?</a>
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-primary btn-block" name="submit" value="button">Submit</button>
                          </div>
                      </form>
                  </div>

              </div>
          </div>
      </div>
        </div>

    <!-- Sign Up Modal -->


    <div class="container">
      <div class="modal fade" id="signUpWindow">
      <div class="modal-dialog">
          <div class="modal-content">

              <!-- header -->
              <div class="modal-header">
                <h3 class="modal-title">Sign Up</h3>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- body (form) -->
              <div class="modal-body">
                  <form role="form" action="includes/signup.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                      <div class="form-group">
                          <input type="password" class="form-control" name="password" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                      </div>
                      <a href="#" data-toggle="modal" data-target="#popUpWindow" data-dismiss="modal">Already Registered?</a>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary btn-block" name="submit" value="submit">Sign Up</button>
                      </div>
                  </form>
              </div>

              <!-- button -->

          </div>
      </div>
  </div>
    </div>


    <!-- Forgot Password Modal -->

    <div class="container">
      <div class="modal fade" id="forgotWindow">
      <div class="modal-dialog">
          <div class="modal-content">

              <!-- header -->
              <div class="modal-header">
                <h3 class="modal-title">Forgot Password</h3>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- body (form) -->
              <div class="modal-body">
                  <form role="form">
                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="Registered Email" required>
                      </div>
                  </form>
              </div>

              <!-- button -->
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </div>

          </div>
      </div>
  </div>
    </div>
<!-- /container -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
