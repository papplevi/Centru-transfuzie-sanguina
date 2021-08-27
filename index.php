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
    <div>
    <div class="h_btm_bg">
        <div class="wrap">
            <div class="h_btm">
                <div class="header-para">
                    <p>Blood is essential to life. Blood circulates through our body and delivers essential substances
                    like oxygen and nutrients to the body’s cells. It also transports metabolic waste products away from those same cells.
                    There is no substitute for blood. It cannot be made or manufactured.
                    Generous blood donors are the only source of blood for patients in need of a blood transfusion.</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="s_bg">
    <div class="wrap">
    <div class="main_cont">
    <section class="slider">
        <div class="flexslider carousel">
            <ul class="slides">
                <li>
                <img src="Images/slider1.jpg" height="250px"/>
                </li>
                <li>
                <img src="Images/slider2.jpg" height="250px"/>
                </li>
                <li>
                <img src="Images/slider3.jpg" height="250px"/>
                </li>
                <li>
                <img src="Images/slider4.jpg" height="250px"/>
                </li>
                <li>
                <img src="Images/slider5.jpg" height="250px"/>
                </li>
                <li>
                <img src="Images/slider6.jpg" height="250px"/>
                </li>
                <li>
                <img src="Images/slider7.jpg" height="250px"/>
                </li>
                <li>
                <img src="Images/slider8.jpg" height="250px"/>
                </li>
            </ul>
        </div>
    </section>
    <div class="ribben">
        <div class="l-triangle-top"></div>
        <div class="l-triangle-bottom"></div>
            <div class="rectangle"></div>
            <div class="r-triangle-top"></div>
        <div class="r-triangle-bottom"></div>
        <div class="clear"></div>
    </div>
    <div class="main">
        <div class="content">
            <h4>How to do it:</h4>
            <p>Donating blood is a simple thing to do, but it can make a big difference in the lives of others. The donation process from the time you arrive until the time you leave takes about 30 minutes. The donation itself is only about 8-10 minutes on average. The steps in the process are :</p>
            <span style="font-weight:bold"><b>Before Donating Blood</b>
            <p>Eat something substantial before your appointment.
            Have plenty of liquid the day before donation, especially in warm weather. In the 3 hours before donating, have at least 3 to 4 good-sized glasses of water/juice.</p>
            <span style="font-weight:bold"><b>Registration of Donor</b>
            <p>Our volunteer/staff will ask you to fill a form with brief information on contact details and medical history.</p>
            <span style="font-weight:bold"><b>Physical Health check-up</b>
            <p>You will be examined by a doctor to answer some questions about your health history. Your blood pressure and hemoglobin level will be checked.</p>
            <span style="font-weight:bold"><b>Blood Donation</b>
            <p>We will cleanse an area on your arm and insert a brand new sterile needle for the blood draw. This feels like a quick pinch and is over in seconds.
            The actual donation takes about 8-10 minutes, during which you will be seated comfortably.
            When a unit of blood (350 – 450 ml) has been collected, the donation is complete.
            A staff person will place a bandage on your arm</p>
            <span style="font-weight:bold"><b>Safety</b>
            <p>All equipment is sterile; needles are used only once and then discarded. In the great majority of individuals, a donation of 450 ml is less than 10% of your total body volume and may be given safely every 3 months. Your body keeps on discarding and replenishing blood all the time whether you give blood or not, so this amount is quickly replenished.</p>
            <span style="font-weight:bold"><b>AFTER DONATION</b>
            <span style="font-weight:bold"><b>Relax & Refresh</b>
            <p>You can have something to eat and drink in and relax for about 15-20 minutes before departing. Within 24-48 hours your blood volume is completely restored. Apart from enjoying our refreshments and souvenir, other things to help you recover quickly include
            Drink plenty of water, fruit juice etc. and avoid alcohol for 8 hours after you’ve given blood.
            Avoid any strenuous activity or heavy lifting with the ‘donating arm’ for 24 hours after you’ve given blood.
            If you become unwell in any way after giving blood, speak to the doctor in-charge straight away.</p>
            <span style="font-weight:bold"><b>Donate Blood Again</b>
            <p>Whole blood donors can give blood again after 3 months.
            Apheresis plasma or platelet donors can give blood in around 2-3 weeks time.</p>
            <span style="font-weight:bold"><b>Spread the word</b>
            <p>Tell your friends, colleagues and family about the wonderful feeling you experience on donating blood and saving lives.
            Enjoy the feeling of knowing that you helped save precious lives!</p>
        </div>
        <div class="sidebar">
            <h2>Latest News</h2>
            <div class="blog_posts">
                <marquee direction="up" scrolldelay="300"><table >
                <tr><td>
                <div class="blog_desc">
                <div class="blog_heading">
                <span style="font-weight:bold"><b>Possible Treatment for COVID-19</b>
                <p>To fight a virus our immune system generates Y-shaped proteins, called antibodies,
                which latch onto the surface of the virus and inactivate or neutralize it.
                Many preventive vaccines are designed to induce these antibodies as a way of shielding us from exposure to a pathogen.
                But antibodies can also be used to treat viruses. During the COVID-19 pandemic, we’ve been hearing a lot 
                about how doctors are infusing patients with blood products containing antibodies in hopes it will help them recover.</p></span>
            </div>
            <br />
                <span style="font-weight:bold"><b>Upcoming World Blood Donation Day</b>
                <p> World Blood Donor Day takes place every year on 14 June. As well as thanking blood donors,
                it is a day to raise awareness about the global need for safe blood and how everyone can contribute.
                So.. “Donate blood and be a hero of someone’s life.”</p></span>
        </div>
        </td></tr>
        </table></marquee>
        <div class="clear"></div>
        </div>
        </div>
        <div class="clear"></div>
        </div>
    </div>
    </div>
    </div>

    </div>
    <div class="clear"></div>
</body>
</html>