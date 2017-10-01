<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lost & Found | Home</title>
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
  <?php include 'allpages.php';?>

  <div class="container">
    <h3 class="display-3">Lost an Item?</h3>
    <h3 class="text-muted display-4">Please enter the item details below.</h6>
  </div>

  <div class="container">
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
      <div class="form-group col-lg-4">
        <label for="">Model(If applicable)</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group col-lg-4">
        <label for="">Colour</label>
        <select class="form-control" name="colour">
          <option value="1">Violet</option>
          <option value="2">Indigo</option>
          <option value="3">Blue</option>
          <option value="4">Green</option>
          <option value="5">Yellow</option>
          <option value="6">Orange</option>
          <option value="7">Red</option>
        </select>
      </div>
      <div class="form-group col-lg-4">
        <label for="">Message</label>
        <textarea class="form-control" rows="10"></textarea>
      </div>
      <div class="form-group col-lg-12">
        <input type="hidden" name="savebtn" value="contact">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div></form>
  </div>

  <?php include 'footer.php';?>
    </body>
    </html>
