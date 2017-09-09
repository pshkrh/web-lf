<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lost & Found | Welcome</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!--Custom CSS--->
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#" title="Get Back Your Lost Items">
        <img style="max-width:75px; margin-top: 0px;" src="./img/LFo.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 float-xs-right">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signUpWindow">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>

  <div id="stage">
    <div id="stage-caption">
      <h1 class="display-3">Lost & Found</h1>
      <p>A simple, easy to use system.</p>
      <p>Sign In / Register to get started.</p>
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
                    <form role="form">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <a href="#" data-toggle="modal" data-target="#forgotWindow" data-dismiss="modal">Forgot Password?</a>
                    </form>
                </div>

                <!-- button -->
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block">Submit</button>
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
                    <form role="form" action="./includes/signup-inc.php" method="POST">
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Username">
                      </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <a href="#" data-toggle="modal" data-target="#popUpWindow" data-dismiss="modal">Already Registered?</a>
                    </form>
                </div>

                <!-- button -->
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary btn-block" value="Submit">
                </div>

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
                            <input type="email" class="form-control" placeholder="Registered Email">
                        </div>
                    </form>
                </div>

                <!-- button -->
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block">Submit</button>
                </div>

            </div>
        </div>
    </div>
      </div>

      <hr>

      <footer>
        <p>Lost & Found, Copyright &copy; 2017</p>
      </footer>
    </div> <!-- /container -->


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
