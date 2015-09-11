<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- <meta charset="utf-8"> -->
    <title>Manage Movies: Search Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../boot/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../../boot/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-static-top">
      <div class = "container">
        <div class="navbar-header">
          <a href=".." class = "navbar-brand"> My IMDB </a>
          <button class = "navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
      </div>
      <div class="collapse navbar-collapse navHeaderCollapse">
          <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href=".."> Home </a>
              </li>
              <li class = "active">
                  <a href="?goview"> Movies </a>
              </li>
              <li class = "dropdown">
                  <a href="#" class= "dropdown-toggle" data-toggle="dropdown"> Director <b class = "caret"></b> </a>
                  <ul class = "dropdown-menu">
                      <li> <a href="../directors/"> Director </a> </li>
                      <li> <a href="#"> Reserved </a> </li>
                      <li> <a href="#"> Reserved+ </a> </li>
                      <li> <a href="#"> Reserved </a> </li>
                  </ul>
              </li>
              <li>
                  <a href="../countries/"> Country </a>
              </li>
              <li>
                  <a href="#contact" data-toggle="modal"> Contact </a>
              </li>
          </ul>
        </div>
      </div>
    </div>

    

    <div class="container">
      <div class="jumbotron">
        <center><h1> Can't find? </h1>
        <p> Just add your own as long as we have the director. Please add the director otherwise. </p>
        <a href="?add" class="btn btn-default">Add new movie</a>
        <a href="../directors/" class="btn btn-info">  Add director </a> 
        <a href="?gosearchpage" class="btn btn-primary">  New Serach </a>
      </center>
      </div>
    </div>
    
    <div class="container">
      <div class ="row">
        

        <div class = "col-md-8 col-md-offset-2">
          <div class = "panel panel-default">
            <div class = "panel-body">
              
              <form action="" method="get">
                <div>
                  <?php if (isset($movies)): ?>
                  <table class="table table-striped">
                    <tr>
                      <th>Movie Name</th>
                      <th>Director</th>
                      <th>Score</th>
                      <th></th>
                    </tr> 

                    <?php foreach ($movies as $movie): ?>
                    <tr>
                      <td class = "col-md-4"><?php htmlout($movie['moviename']); ?></td> 

                      <td class = "col-md-3"><?php htmlout(getdirector($movie['directorid'])); ?></td> 
                      <td class = "col-md-1"><?php htmlout($movie['score']); ?></td> 
                      <td>
                        <form action="?" method="post">
                          <div>
                            <input type="hidden" name="id" value="<?php htmlout($movie['id']); ?>">
                            <input type="submit" name="action" value="Edit" class="btn btn-default ">
                            <input type="submit" name="action" value="Delete" class="btn btn-danger">
                          </div>
                        </form>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </table>
                  <?php endif; ?>
                </div> 
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class='wrapper'>
      <div class = "navbar  navbar-default navbar-fixed-bottom">
        <div class = "container">
          <p class = "navbar-text pull-left"> 
          </p>
          <a href = ".." class = "navbar-btn btn-default btn pull-right"> Return to homepage </a>
        </div>
      </div>  
    </div>  
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="../../../boot/js/bootstrap.js"></script>
  </body>
</html>