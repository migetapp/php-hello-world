<!DOCTYPE html>
<html>
<head>
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <title>PHP Hello World</title>
</head>
</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card text-center">
          <div class="card-header">
            Welcome
          </div>
          <div class="card-body">
            <?php
                echo '<img src="images/miget-logo.png" width="128" height="128" class="d-inline-block align-top" alt="Logo"></img>';
            ?>
            <h5 class="card-title">Hello, world!</h5>
            <p class="card-text">This simple PHP application has been deployed to Miget.</p>
            <a href="https://miget.com" class="btn btn-primary">Click to learn more</a>
          </div>
          <br>
          <div class="card-footer text-muted">
            © miget.com
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>