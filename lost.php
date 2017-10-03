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
  <?php include 'loginpages.php';?>

  <div class="container">
    <h3 class="display-3">Lost an Item?</h3>
    <h3 class="text-muted display-4">Please enter the item details below.</h6>
  </div>

  <div class="container">
    <form action="includes/lostform.php" method="POST">
      <div class="form-row">
        <div class="col-md-4">
          <label for="type">Type</label>
          <select name="type" class="form-control" id="exampleFormControlSelect1">
            <option value="" disabled selected>Select a Type</option>
            <option value="mobile">Mobile Phone</option>
            <option value="laptop">Laptop</option>
            <option value="wb">Water Bottle</option>
            <option="lb">Lunch Box</option>
            <option="nb">Notebook</option>
            <option="wallet">Wallet</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="colour">Colour</label>
          <select name="colour" class="form-control" id="exampleFormControlSelect1">
            <option value="" disabled selected>Select a Colour</option>
            <option value="violet">Violet</option>
            <option value="indigo">Indigo</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
            <option value="orange">Orange</option>
            <option value="red">Red</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="model">Model (If applicable)</label>
          <input name="model" class="form-control" type="Text" placeholder="Enter Model">
        </div>

        <div class="form-group col-md-4">
          <label for="company">Manufacturer / Company</label>
          <input name="company" class="form-control" type="Text" placeholder="Enter Manufacturer">
        </div>

        <div class="form-group col-md-4">
          <label for="location">Last known location</label>
          <select name="location" class="form-control">
            <option value="" disabled selected>Select location</option>
            <option value="a">A-Block</option>
            <option value="b">B-Block</option>
            <option value="c">C-Block</option>
            <option value="d">D-Block</option>
            <option value="e">E-Block</option>
            <option value="f">F-Block</option>
            <option value="m">M-Block</option>
            <option value="s">S-Block</option>
            <option value="y">Y-Block</option>
            <option value="vsit">VSIT</option>
            <option value="vp">VP</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="tym">Time when you lost the item (HH:MM)</label>
          <input name="tym" class="form-control" type="Text" placeholder="Enter time">
        </div>

        <div class="form-group col-md-12">
          <label for="details">Extra Details</label>
          <textarea name="details" class="form-control" rows="5" placeholder="Describe your lost item in detail here..."></textarea>
        </div>

        <div class="form-group col-md-12">
          <label for="img">Upload an Image</label>
          <br>
          <label class="custom-file">
            <input name="img" type="file" id="file2" class="custom-file-input">
            <span class="custom-file-control"></span>
          </label>
        </div>

        <div class="form-group col-lg-12">
          <input type="hidden" name="savebtn" value="lost">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>

      </div>
  </div>

  <?php include 'footer.php';?>
    </body>
    </html>
