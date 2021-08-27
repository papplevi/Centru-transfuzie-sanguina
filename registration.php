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

<body>
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
        <div style="height:530px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#D3D3D3; border:2px solid red; box-shadow:4px 1px 20px black;">
        <form method="post" enctype="multipart/form-data">
        <table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " >
        <tr><td colspan="2">&nbsp;</td></tr>

        <h2 style="font-size:2.5em; text-align:center; color:#D50000; padding:20px">Registration</h2>
        <td style="vertical-align:top;padding-top:20px; padding-left:170px">
        <table cellpadding="0" cellspacing="0" style="width:100%; height:400px;">

        <tr><td class="lefttd">Donor Name:</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" /></td></tr>
        <tr><td class="lefttd">Gender</td><td><input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female" >Female</td></tr>
        <tr><td class="lefttd">Age</td><td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
        <tr><td class="lefttd">Mobile No</td><td><input type="number" name="t3" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." /></td></tr>
        <tr><td class="lefttd"> Blood Group </td><td><select name="t4" required><option value="">Select</option>
        <?php
            $cn=makeconnection();
            $s="select * from bloodgroup";
            $result=mysqli_query($cn,$s);
            $r=mysqli_num_rows($result);
            while ($data=mysqli_fetch_array($result)) {
                if (isset($_POST["show"])&& $data[0]==$_POST["s2"]) {
                    echo "<option value=$data[0] selected>$data[1]</option>";
                } else {
                    echo "<option value=$data[0]>$data[1]</option>";
                }
            }

            mysqli_close($cn);
        ?>



        </select></td></tr>
        <tr><td class="lefttd">E-Mail</td><td><input type="email" name="t5" required="required" /></td></tr>

        <tr><td class="lefttd">Password</td><td><input type="password" name="t6" required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
        <tr><td class="lefttd">Confirm Password</td><td><input type="password" name="t7" required="required" pattern="[a-zA-Z0-9 ]{2,10}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>

        <tr><td class="lefttd">Uplode Picture</td><td><input type="file" name="t8" /></td></tr>
        <tr><td>&nbsp;</td><td><input type="submit" value="Register" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>
        </td></tr>
        </table>
        </form>
    </div>


    <?php
        if(isset($_POST["sbmt"])) {
            $target_dir = "doner_pic/";
            $target_file = $target_dir . basename($_FILES["t8"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

            $check = getimagesize($_FILES["t8"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif") {
                echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
                $uploadok=0;
            } else {
                if(move_uploaded_file($_FILES["t8"]["tmp_name"], $target_file)) {
                    $cn=makeconnection();
                    $s="insert into donarregistration(name,gender,age,mobile,b_id,email,pwd,pic) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] .  "','" . basename($_FILES["t8"]["name"])  ."')";
                    mysqli_query($cn,$s);
                    mysqli_close($cn);

                    if($s>0) {
                        echo "<script>alert('Record Save');</script>";
                    } else {
                        echo "<script>alert('Record save');</script>";
                    }
                } else {
                    echo "sorry there was an error uploading your file.";
                }
            }
        }
    ?>
</body>
</html>