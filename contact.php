<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lost & Found | Contact Us</title>
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
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signUpWindow">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>

    <br>

    <div class="container">
      <div class="box">
        <div class="row">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Contact Us</h2>
            <hr>
            <p>Have any questions? You can drop us a message by filling out this form, and we will get back to you as soon as possible.</p>
            <form action=""><div class="row">
              <div class="form-group col-lg-4">
                <label for="">Name</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group col-lg-4">
                <label for="">E-Mail</label>
                <input type="email" class="form-control">
              </div>
              <div class="form-group col-lg-4">
                <label for="">Phone Number</label>
                <input type="tel" class="form-control">
              </div>
              <div class="form-group col-lg-12">
                <label for="">Message</label>
                <textarea class="form-control" rows="10"></textarea>
              </div>
              <div class="form-group col-lg-12">
                <input type="hidden" name="savebtn" value="contact">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div></form>
          </div>
        </div>
      </div>
    </div>





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
                  <form role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" placeholder="Confirm Password">
                      </div>
                      <a href="#" data-toggle="modal" data-target="#popUpWindow" data-dismiss="modal">Already Registered?</a>
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


<div class="container">
  <footer>
    <p>Lost & Found, Copyright &copy; 2017</p>
  </footer>
</div>

  </div> <!-- /container -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>