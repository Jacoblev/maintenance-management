<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="utf-8" />
    <title>Shufersal Maintanance Shoham &mdash;</title>

    <!--Responsiveness-->
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <!--FontAwesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <!--CSS Style-->
    <link href="css/demo.css" rel="stylesheet" type="text/css" />
    <link href="css/ace-responsive-menu.css" rel="stylesheet" type="text/css" />


</header>
<body>


<div class="demo">


    <!-- Ace Responsive Menu -->
    <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">

            <h3>Menu</h3>
            <button type="button" id="menu-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Responsive Menu Structure-->
        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
            <li>
                <a href="javascript:;">
                    <i aria-hidden="true"></i>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i aria-hidden="true"></i>
                    <span class="title">Malfunctions</span>

                </a>
                <!-- Level Two-->
                <ul>
                    <li><a href="reports.php">Report Malfunction</a></li>
                    <li><a href="read.php">List Of Malfunctions</a></li>
                    <li>
                        <a href="javascript:;">
                            Export Malfunctions

                        </a>
                        <!-- Level Three-->
                        <ul>
                            <li><a href="#"><i aria-hidden="true"></i>Between Dates</a>
                                <form action="filter_date1.php" method="post" enctype="multipart/form-data">
                                    <meta charset="utf-8">
                                    <meta name="datepicker1" content="width=device-width, initial-scale=1">










                                    <input style="position: relative; display: block; margin: 0 auto;" data-date-format="yyyy-mm-dd" type="text" class="datepicker"  id="datepicker" name="datepicker" value="2019-01-01">



                            <li class="custom-li"><b><u>Untill:</u></b></li>


                            <input style="position: relative; display: block; margin: 0 auto;" data-date-format="yyyy-mm-dd" type="text" class="datepicker" id="datepicker2" name="datepicker2" value="2019-01-01">


                            <br />







                            <input type="submit" formaction="filter_date1.php" class="custom-input" name="datepicker1" id="press" value="Send"/>
                            </form>

                            </li>


                        </ul>
                    </li>

                </ul>
            </li>

            <li>
                <a href="ListTest.php">
                    <i aria-hidden="true"></i>
                   <span class="title">Maintanance</span>
                </a>
                <!-- Level Two-->



                    </li>




            </li>
            <li>
                <a class="" href="inventory-master">
                    <i aria-hidden="true"></i>
                    <span class="title">Spare Parts</span>

                </a>

            </li>

            <li>
                <a href="contact.php">
                    <i aria-hidden="true"></i>
                    <span class="title">Contact</span>
                </a>
            </li>
            <li>
                <a class="" href="javascript:;">
                    <i aria-hidden="true"></i>
                    <span class="title">Account</span>

                </a>
                <ul>
                    <li>
                        <a href="#">
                            <u><b>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></b></u>
                        </a>
                    </li>
                    <li>
                        <a href="resetpw.php">Reset Password</a>
                    </li>
                    <li>
                        <?php


                            if(htmlspecialchars($_SESSION["username"]) == "jacoblev" || htmlspecialchars($_SESSION["username"]) == "andrey"){

                                echo '<h6><a href="javascript:;"><a href="register.php">Register New User</a></a></h6>';
                            }
                            ?>


                    </li>
                    <li>
                        <a href="logout.php">Sign Out</a>

                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- End of Responsive Menu -->

</div>
<!--Scripts-->
<script src="js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="js/ace-responsive-menu.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#respMenu").aceResponsiveMenu({
            resizeWidth: '768', // Set the same in Media query
            animationSpeed: 'fast', //slow, medium, fast
            accoridonExpAll: false //Expands all the accordion menu on click
        });
    });
</script>

