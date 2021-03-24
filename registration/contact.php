<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    	<link rel="stylesheet" type="text/css" href="index.css">
        <!-- <link rel="stylesheet" type="text/css" href="estilo.css"> -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        
        <?php include('header.html') ?>

            <!-- contacto -->
            <br>
            <br>
            <br>
            <br>

            <h2 class="text-center">CONTACT</h2>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
            <div class="col-sm-5">
              <p>Report any problem or bug. We appreciate your feedback!</p>
              <p><span class="glyphicon glyphicon-map-marker"></span> Barcelona, Spain</p>
              <p><span class="glyphicon glyphicon-phone"></span> +ring rinnnnggg</p>
              <p><span class="glyphicon glyphicon-envelope"></span> tidytubes@gmail.com</p>
            </div>
            <div class="col-sm-7">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                  <button class="btn btn-default pull-right" type="submit">Send</button>
              </div>
            </div>
          </div>
        </div>
            <!-- Image of location -->
      <div class="jumbotron text-center" style="margin-bottom: 0px;">
          <h2>Find us in our second home</h2>
      </div>
      <img src="img/upf.jpg" style="width:100%">
    </body>
</html>
