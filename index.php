<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Talentshow | ROCA12</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/modernizr.js"></script>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body id="top">

    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/background.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=top>
        <div class="shadow-overlay"></div>
        <div class="home-content">
            <div class="row home-content__main">
                <h1>
                This is your chance <br>
                </h1>
                <p>
                Get ready to make it big <br>
                </p>
            </div>
        </div>
    </section>

    <section id='about' class="s-about">

        <div class="row section-header">
            <div class="col-full">
                <h1 class="display-1">Sign yourself up!</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-full">
                <p class="lead">

                  <?php
                    $ip = "localhost";
                    $uid = "root";
                    $pw = "";
                    $db = "roca12-talentshow";

                    $conn = new mysqli($ip, $uid, $pw, $db);
                    $GLOBALS['server'] = $conn;

                    if(mysqli_connect_errno())
                    {
                      echo "Could not connect to database! Tell a programmer!";
                      exit();
                    }
                    else
                    {
                      echo "Connected to database\n";
                    }
                  ?>

                <form method = "post">
                  First Name: <input type="text" name="firstname" value="David"><br>
                  Last Name: <input type="text" name="lastname" value="Nap"><br>
                  Talent: <br>
                  <textarea name="desc" rows="10" cols="30">Absolutely nothing.</textarea>
                  <br>
                  <input type="submit" name="signup" value="Sign Up">
                </form>

                  <?php
                    if(array_key_exists('signup', $_POST))
                    {
                      SignUp();
                    }

                    function SignUp()
                    {
                      $conn = $GLOBALS['server'];
                      $fName = $_POST["firstname"];
                      $lName = $_POST["lastname"];
                      $description = $_POST["desc"];

                      echo "fuck off ";

                      $insertquery = "INSERT INTO contestants (name, lastname, descrip) VALUES ('" . $fName . "', '" . $lName . "', '" . $description . "');";
                      mysqli_query($conn, $insertquery) or die("4: Failed :(");
                    }
                   ?>

                </p>
            </div>
        </div>

        <div class="row">

            <div class="about-process process block-1-2 block-tab-full">

                <div class="process__vline-left"></div>
                <div class="process__vline-right"></div>

            </div>
        </div>
    </section>
    </section>

    <div id="preloader">
        <div id="loader">
        </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
