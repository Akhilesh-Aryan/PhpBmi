<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BMI Calculator</title>
        <link href="bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
            <a href="index.php" class="navbar-brand">BMI Calculator</a>
        </nav>
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                   <div class="card bg-light">
                       <div class="card-body">
                   <form action="index.php" method="get">
                    <h5 class="text-warning">BMI Calculator</h5>
                         <hr  />
                          <?php include "include/bmi.php";?>
                          <div class="form-group">
                              <label for="body_weight">Body Weight(in kgs)</label>
                              <input type="text" name="body_weight" class="form-control">
                          </div>
                            <div class="form-group">
                              <label for="body_height">Body Height(in cms)</label>
                              <input type="text" name="body_height" class="form-control">
                          </div>
                            <div class="form-group">
                              <input type="submit" name="send" value="calculate now" class="form-control btn btn-warning display-block">
                          </div>
                           </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>