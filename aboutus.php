<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Blood bank Management System</title>
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.flexslider.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            SyntaxHighlighter.all();
        });
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: false,
                itemWidth: 210,
                itemMargin: 5,
                minItems: 2,
                maxItems: 4,
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
</head>

<body style="background: url('../Images/background.jpg')">
    <?php include('admin/function.php'); ?>
    <div class="h_bg">
        <div class="wrap">
            <div class="header">
                <div class="logo">
                    <h1><a href="index.php"><img src="Images/logo.jpg" alt="" width="120px" height="120px"></a></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="nav_bg">
    <div class="wrap">
        <?php require('header.php');?>
    </div>
    <div style="height:500px;">
        <form method="post" enctype="multipart/form-data">
        <div class="s_bg">
        <div class="wrap">
        <div class="cont_main">
        <div class="content">
            <h2 style="font-size:2.5em; text-align:left; color:#D50000;">About us</h2>
            <p style="font-size:0.9em; font-weight:bold; color:black"><img src="Images/123.jpg" height="200px" style="margin-bottom:40px" /></a>Every year, countries throughout every region of the world organize a huge variety of events and activities to celebrate the day, from football matches to free concerts, and from mobile blood donation clinics to monumental decorations.</p>
            <p style="font-size:0.9em; font-weight:bold; color:black" class="top">We and our partners have decided to focus on the idea that every one of us can become a hero simply by giving blood. The everyday hero responds to an immediate need, whatever the conditions, despite inconvenience, putting the needs of others above their own.</p>
            <p style="font-size:0.9em; font-weight:bold; color:black" class="top">Voluntary blood donors come from all walks of life, all regions, backgrounds, religions and ages. By choosing to donate blood without getting paid, these individuals commit an "heroic" act, a gesture of human solidarity with the power to save lives. Some of them do so dozens of times over several decades.</p>
            <p style="font-size:0.9em; font-weight:bold; color:black" class="top">Thank you and Happy Blood donating!</p>	
            <p style="font-size:0.9em; font-weight:bold; color:black" class="top">Alina Gabor</p>
            <p style="font-size:0.9em; font-weight:bold; color:black">Levente Papp</p>
            <p style="font-size:0.9em; font-weight:bold; color:black">Robert Stoltz</p>
            <p style="font-size:0.9em; font-weight:bold; color:black" class="top">Students at UAV</p>
        </div>
    </div>
    </div>
    </form>
    </div>
    <?php
        if(isset($_POST["sbmt"])) {
            $cn=makeconnection();
                $s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
            $q=mysqli_query($cn,$s);
            mysqli_close($cn);
            if($q>0) {
                echo "<script>alert('Record Save');</script>";
            } else {
                echo "<script>alert('Saving Record Failed');</script>";
            }
        }
    ?>
</body>
</html>