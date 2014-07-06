<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Social Twitter demo</title>

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.2.1/bootstrap-social.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Social Twitter demo</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href=".">Home</a></li>
                    </ul>
                    <?php if ($twitter->isAuth()): ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="logout.php">Log out</a></li>
                        </ul>
                    <?php endif ?>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container">
            <?php if (!$twitter->isAuth()): ?>
                <div class="text-center">
                    <a href="login.php" class="btn btn-twitter btn-lg ">
                        <i class="fa fa-twitter"></i>
                        Log in with Twitter
                    </a>
                </div>
            <?php else: ?>
            <?php endif ?>
        </div><!-- /.container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>
