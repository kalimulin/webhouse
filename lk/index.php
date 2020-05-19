<?php session_start();

if (isset($_POST['auth_name']) && isset($_POST['auth_pass'])){
    $hostname = "localhost";
    $username = "webhouse_breefs";
    $password = "peqof0xX";
    $dbName = "webhouse_breefs";

    /* Подключение к серверу MySQL */
    $link = mysqli_connect(
        $hostname,  /* Хост, к которому мы подключаемся */
        $username,       /* Имя пользователя */
        $password,   /* Используемый пароль */
        $dbName);     /* База данных для запросов по умолчанию */

    $query = "SELECT * FROM lk_users WHERE login='".$_POST['auth_name']."' AND password='".md5($_POST['auth_pass'])."'";

    if ($result = mysqli_query($link, $query)) {
        $results = mysqli_fetch_assoc($result);
        if($results['user_id'] > 0){
            $_SESSION['auth'] = '1';
        }
    }
}
    if (isset($_GET['logout'])) {
        unset($_SESSION['auth']);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Личный кабинет</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">

    <link href="css/sweetalert.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
<!--                <li role="presentation" class="active"><a href="#">Home</a></li>-->
<!--                <li role="presentation"><a href="#">About</a></li>-->
                <li role="presentation"><a href="index.php?logout">Log out</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">Учет партнеров</h3>
    </div>

<!--    <div class="jumbotron">-->
<!--        <h1>Jumbotron heading</h1>-->
<!--        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>-->
<!--        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>-->
<!--    </div>-->

    <div class="row">

        <?php
            if (isset($_SESSION['auth']) and $_SESSION['auth'] == 1){ ?>
                <div class="col-lg-12">
                    <table class="table table-striped">

                    </table>
                </div>
            <?php } else { ?>
                <form method="POST" action="index.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="auth_name" name="auth_name" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="auth_pass" name="auth_pass" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            <?php } ?>

    </div>

    <footer class="footer">
        <p>&copy;</p>
    </footer>

</div> <!-- /container -->

<script src="../js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="js/sweetalert.min.js"></script>

</body>
</html>
