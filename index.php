<?php
  // Start the session
  session_start();
?>

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
    <?php include 'allpages.php';?>
  <div id="stage">
    <div id="stage-caption">
      <h1 class="display-3">Lost & Found</h1>
      <p>A simple, easy to use system.</p>
      <a role="button" href="#" class="btn btn-success" data-toggle="modal" data-target="#signUpWindow">Sign Up Here</a>
    </div>
  </div>

  <br>

  <div class="container">
    <h3 class="display-4">Technologies Used</h3>
  </div>

  <br>

  <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <img src="./img/logo_bootstrap.png">
          <h2>Bootstrap 4</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="https://getbootstrap.com" role="button">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img src="./img/logo_html.png">
          <h2>HTML5 Markup</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/HTML5" role="button">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img src="./img/logo_css.png">
          <h2>CSS3 Styling</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" role="button">Learn More &raquo;</a></p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <img src="./img/logo_php.png">
          <h2>PHP Scripting</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="https://secure.php.net/manual/en/intro-whatis.php" role="button">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img src="./img/logo_mysql.png">
          <h2>MySQL Database</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="https://www.mysql.com/" role="button">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img src="./img/logo_atom.png">
          <h2>Atom Text Editor</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="https://atom.io/" role="button">Learn More &raquo;</a></p>
        </div>
      </div>

      <?php
        // Set session variables
        $_SESSION["username"] = "";
        $_SESSION["pwd"] = "";
        echo "Session variables are set.";
      ?>


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
                            <form role="form" action="includes/login.php" method="POST" id="loginform">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                                    <div class="invalid-feedback">
                                      Please enter a valid username.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    <div class="invalid-feedback">
                                      Please enter a valid password.
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#forgotWindow" data-dismiss="modal">Forgot Password?</a>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-block" name="loginbtn" value="button">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
              </div>

              <!-- Login alert-->

              <div id="loginalert" class="alert alert-warning alert-dismissible collapse" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
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
                        <form role="form" action="includes/signup.php" method="POST" id="needs-validation2" novalidate>
                          <div class="form-group">
                              <input type="text" class="form-control" name="username" placeholder="Username" required>
                              <div class="invalid-feedback">
                                Please enter a username.
                              </div>
                          </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                <div class="invalid-feedback">
                                  Please enter a password.
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                <div class="invalid-feedback">
                                  Please enter an email address.
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#popUpWindow" data-dismiss="modal">Already Registered?</a>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-block" name="signupbtn" value="submit">Sign Up</button>
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

      <?php include 'footer.php';?>
</body>
</html>
