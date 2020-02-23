<!DOCTYPE html>
<html lang="en">
<head>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/lightgallery.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/newSelectStyle.css">
    <link rel="stylesheet" href="css/reports.css">
    <script src="//unpkg.com/popper.js"></script>
    <script src="js/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">




    <?php
    // Initialize the session

    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }

    if($_SERVER['REQUEST_URI']!="/read.php"){
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';
    echo '';

    }
    ?>
    <title>Shufersal Maintanance Shoham &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>
<body>
<style>
    h6 {
        font-size: 8pt;
    }

</style>
<div class="site-wrap">



    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">

            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-3" role="banner" style="background-color: #E8E7E6">


      <div class="container" style="background-color: #E8E7E6;">



          <div class="row align-items-center">


              <div class="col-6 col-xl-2">

                <h1 style="position: relative;"><a href="index.php" class="text-black h2 mb-0">Automation<span class="text-primary"></span></a></h1>

              </div>
              <div class="col-10 col-md-8 d-none d-xl-block" style="position:relative;">
                  <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                      <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                          <li class="active"><a href="index.php">Home</a></li>
                          <li class="has-children">
                              <a href="#">Malfunctions</a>
                              <ul class="dropdown">
                                  <li><a href="reports.php">Report Malfunction</a></li>
                                  <li><a href="read.php">List Of Malfunctions</a></li>

                                  <li class="has-children">
                                      <a href="#">Export Malfunctions</a>
                                      <ul class="dropdown">
                                          <li class="custom-li"><b><u>By Location</u></b></li>
                                          <li>





                                                <label for='styledSelect1' class='custom-select'>
                                                    <form action="filter.php" method="post" enctype="multipart/form-data">
                                                <select name="filter" id="#styledSelect" onchange="this.form.submit()">
                                                  <option selected="selected">Select Area</option>
                                                    <optgroup label="אזור הגנטרי">
                                                        <option value="עגורן 3">
                                                          עגורן 3
                                                        </option>
                                                        <option>עגורן 4</option>
                                                        <option>שאטל</option>
                                                        <option>רובוט 1</option>
                                                        <option>רובוט 2</option>
                                                        <option>רובוט 3</option>
                                                        <option>רובוט 4</option>
                                                        <option>Cell 1</option>
                                                        <option>Cell 2</option>
                                                        <option>מסועים</option>
                                                        <option>דיפליטייזר 1</option>
                                                        <option>דיפליטייזר 2</option>
                                                        <option>פליטייזר</option>
                                                        <option>דולי 1</option>
                                                        <option>דולי 2</option>
                                                        <option>אחר</option>
                                                    </optgroup>

                                                    <optgroup label="אזור הפרוזן">
                                                        <option>עגורן 1</option>
                                                        <option>עגורן 2</option>
                                                        <option>קבלה ריג׳קט</option>
                                                        <option>דלת גלילה בכניסה</option>
                                                        <option>דלת כניסה פנימית</option>
                                                        <option>דלת גלילה בריג׳קט</option>
                                                        <option>דלת פנימית בריג׳קט</option>
                                                        <option>סלואו מוברס</option>
                                                        <option>מסועים בקבלה</option>
                                                        <option>מסועים קומה 1</option>
                                                        <option>מסועים קומה 2</option>
                                                        <option>מסועים קומה 3</option>
                                                        <option>מסועים קומה 4</option>
                                                        <option>מסועים קומה 5</option>
                                                        <option>מסועים קומה 6</option>
                                                        <option>קומה 7 ומעלה</option>
                                                        <option>קרוסלה עלייה וירידה</option>
                                                        <option>פאסט מוברס קומה 1</option>
                                                        <option>פאסט מוברס קומה 2</option>
                                                        <option>פאסט מוברס קומה 3</option>
                                                        <option>פאסט מוברס קומה 4</option>
                                                        <option>פאסט מוברס קומה 5</option>
                                                        <option>פאסט מוברס קומה 6</option>
                                                        <option>פרוזן</option>
                                                    </optgroup>
                                                    <optgroup label="סורטר">
                                                        <option>סורטר</option>
                                                        <option>אזור 1</option>
                                                        <option>אזור 2</option>
                                                        <option>אזור 3</option>
                                                    </optgroup>
                                                    <optgroup label="שטיפה">
                                                      <option>פליטייזר</option>
                                                      <option>דיפליטייזר</option>
                                                      <option>מחסנית ארגזים A כניסה</option>
                                                      <option>מחסנית ארגזים B כניסה</option>
                                                      <option>מכונת שטיפה</option>
                                                      <option>מכונת סגירה A</option>
                                                      <option>מכונת סגירה B</option>
                                                      <option>מכונת פתיחה A</option>
                                                      <option>מכונת פתיחה B</option>
                                                      <option>מחסנית ארגזים A יציאה</option>
                                                      <option>מחסנית ארגזים B יציאה</option>
                                                      <option>מכונת ייבוש A</option>
                                                      <option>מכונת ייבוש B</option>
                                                      <option>מעליות</option>
                                                      <option>מסועים מקשרים 1 עד 21</option>
                                                    </optgroup>
                                                </select>
                                                </form>
                                                </label>



                                          </li>
                                          <br>
                                          <li class="custom-li"><b><u>By Reason</u></b></li>

                                          <li>


                                          <form action="filter_kind.php" enctype="multipart/form-data" method="post">
                                                <label for='styledSelect1' class='custom-select'>
                                              <select name="filter3" id="#styledSelect1" onchange="this.form.submit()">


                                            <option selected="selected">Select Reason</option>


                                                  <option>תפעול</option>
                                                  <option>גוף זר</option>
                                                  <option>תקלה מכנית</option>
                                                  <option>כתוצאה מנזק</option>
                                                  <option>תקשורת</option>
                                                  <option>תקלת systore</option>
                                                  <option>תקלת מטריקס</option>
                                                  <option>תקלת wms</option>
                                                  <option>רכיב כושל</option>
                                                  <option>תקלה חשמלית</option>
                                                  <option>תקלה אחרת</option>
                                                  <option>אזעקת אש</option>
                                                  <option>הפעלת לחצן חירום</option>
                                                  <option>תוכנה</option>

                                              </select>





                                            </label>

                                          </form>
                                          </li>
                                          <br>
                                          <li class="custom-li"><b><u>Between Dates</u></b></li>

                                            <li>

                                              <form action="filter_date1.php" method="post" enctype="multipart/form-data">
                                                  <meta charset="utf-8">
                                                  <meta name="datepicker1" content="width=device-width, initial-scale=1">










                                                        <input style="position: relative; display: block; margin: 0 auto;" data-date-format="yyyy-mm-dd" type="text" class="datepicker"  id="datepicker1" name="datepicker1" value="2019-01-01">



                                                            <li class="custom-li"><b><u>Untill:</u></b></li>


                                                                <input style="position: relative; display: block; margin: 0 auto;" data-date-format="yyyy-mm-dd" type="text" class="datepicker" id="datepicker2" name="datepicker2" value="2019-01-01">


                                                                  <br />







                                                   <input type="submit" formaction="filter_date1.php" class="custom-input" name="datepicker1" id="press" value="Send"/>
                                              </form>
                                              <br />

                                            </li>


                                      </ul>
                                  </li>
                              </ul>
                          </li>






                          <li>
                              <a href="ListTest.php">Maintenance</a>

                          </li>











                          <li><a href="inventory-master">Spare Parts</a></li>









                              <li class="has-children">
                                  <a href="#">Account</a>
                                  <ul class="dropdown">
                                      <li><a href="#">Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></a></li>
                                      <li><a href="resetpw.php">Change Password</a></li>
                                      <?php


                                      if(htmlspecialchars($_SESSION["username"]) == "jacoblev" || htmlspecialchars($_SESSION["username"]) == "andrey"){

                                          echo '<li><a href="register.php">Register New User</a></li>';
                                      }
                                      ?>
                                      <li><a href="logout.php">Sign Out</a></li>




                      </ul>
                              </li>








                  </nav>
              </div>

              <div class="col-6 col-xl-2 text-right" style="position:relative;">
                  <div class="d-none d-xl-inline-block">
                      <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                          <li>
                              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                          </li>
                          <li>
                              <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                          </li>
                      </ul>
                  </div>
                  <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              </div>

          </div>
      </div>

      </header>
<body>