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
    <h3 class="display-3">Found an Item?</h3>
    <h3 class="text-muted display-4">Please enter the item details below.</h6>
  </div>

  <div class="container">
    <form action="">
      <div class="form-row">
        <div class="col-md-4">
          <label for="type">Type</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option value="" disabled selected>Select a Type</option>
            <option>Mobile Phone</option>
            <option>Laptop</option>
            <option>Water Bottle</option>
            <option>Lunch Box</option>
            <option>Notebook</option>
            <option>Wallet</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="colour">Colour</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option value="" disabled selected>Select a Colour</option>
            <option>Violet</option>
            <option>Indigo</option>
            <option>Blue</option>
            <option>Green</option>
            <option>Yellow</option>
            <option>Orange</option>
            <option>Red</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="model">Model (If applicable)</label>
          <input class="form-control" type="Text" placeholder="Enter Model">
        </div>

        <div class="form-group col-md-4">
          <label for="model">Manufacturer / Company</label>
          <input class="form-control" type="Text" placeholder="Enter Manufacturer">
        </div>

        <div class="form-group col-md-4">
          <label for="model">Last known location</label>
          <select class="form-control">
            <option value="" disabled selected>Select location</option>
            <option>A-Block</option>
            <option>B-Block</option>
            <option>C-Block</option>
            <option>D-Block</option>
            <option>E-Block</option>
            <option>F-Block</option>
            <option>M-Block</option>
            <option>S-Block</option>
            <option>Y-Block</option>
            <option>VSIT</option>
            <option>VP</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="model">Time when you lost the item (HH:MM)</label>
          <input class="form-control" type="Text" placeholder="Enter time">
        </div>

        <div class="form-group col-md-12">
          <label for="model">Extra Details</label>
          <textarea class="form-control" rows="5" placeholder="Describe your lost item in detail here..."></textarea>
        </div>

        <div class="form-group col-md-12">
          <label for="image">Upload an Image</label>
          <br>
          <label class="custom-file">
            <input type="file" id="file2" class="custom-file-input">
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
