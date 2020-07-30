<!DOCTYPE html>
<html lang="en">
<head>
  <title>Credit Card Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
      .image_wrapper{
        background-image: url("image/clearpoints-card-gateway-sm.png"); 
        height: 350px;

    }
</style>
</head>
<body>

    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-lg-6">
             <h4><strong>Select The Options For Design the Credit Card</strong></h4>
             <br><br>
             <form action="/action_page.php">
              <div class="form-group">
               <select class="form-control" id="exampleFormControlSelect1">
                <option>Select Type</option>
                <option value="1">Predefined Design</option>
                <option value="2">Custom</option>

            </select>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputEmail1">Company Name</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company Name">
                <small id="emailHelp" class="form-text text-muted">Add a Company Name For Preview</small>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputEmail1">Select Background</label>
                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Select a Background Color For Preview</small>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="exampleInputEmail1">Upload a Logo</label>
                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Select a Logo  For Preview</small>
            </div>
        </div>


        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
<div class="col-lg-6">
    <h4><strong>Preview The Credit Card</strong></h4>
     <br><br>
 <div class="image_wrapper">
   
  
</div>
<br>
<button type="submit" class="btn btn-success mt-2 pt-2">Take Screenshot</button>

</div>
</div>

</div>

</body>
</html>
