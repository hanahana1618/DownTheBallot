<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>

        <!-- Mobile Responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">


    </head>
    <body>
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <form action="../../index.php" method="get">
                  <button type="submit" class="btn btn-default" role="button" name="lang" value="eng"><li class="active"><img alt="English" height="30" width="40" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRFAW-QUu9HvmXRnhcoIqHcmt7rLGABMqIBNZcXjk_slNN8kr0GDw"><span class="sr-only">(current)</span></li></button>
                  <button type="submit" class="btn btn-default" role="button" name="lang" value="esp"><li><img alt="Spanish" height="30" width="40" src="http://wallpapercave.com/wp/Uxx6YBy.png"></li></button>
                </form>
              </ul>

              <form action="../../word.php" method="get" class="navbar-form navbar-right">
                <button type="submit" class="btn btn-default navbar-btn" name="lang" value="eng">Add word</button>
              </form>

              <form action="../../login.php" method="get" class="navbar-form navbar-right">
                <button type="submit" class="btn btn-default navbar-btn" name="lang" value="eng">Log in</button>
              </form>

              <form class="navbar-form navbar-right" role="search" id="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default" role="button" name="lang" value="esp">Go!</button>
              </form>

              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <!-- <a class="navbar-brand" href="#"></a> -->

              </div>


            </div><!-- /.navbar-collapse -->

          </div><!-- /.container -->
        </nav>
