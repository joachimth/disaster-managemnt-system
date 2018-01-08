
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Life Beyond</title>
 <link rel="shortcut icon" type="img/png" href="img/life.png">
    <link href="css/bootstrap.css" rel="stylesheet" />

    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <link href="css/font-awesome-animation.css" rel="stylesheet" />

    <link href="css/prettyPhoto.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
   </head>
<body>

     <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <img src="img/life.png" height="60px" width="200px">
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                     <li><a href="alerts.php">ALERTS</a></li>
                    <li><a href="Contact.php">CONTACT</a></li>
                    <li><a href="user_login.php">LOG IN</a></li>
                </ul>
            </div>

        </div>
    </div>
     <!--END NAV SECTION -->


    <section >
        <div class="container">

            <div class="row g-pad-bottom">
                <div class="col-md-6 ">
                    <h2>Contact Details </h2>

                    <p>
                         <strong> Address: </strong> <b>57, Ramakrishna Road, <br>Colombo – 06, Sri Lanka.<br>
              	           Hotline: +94(0) 722 727272<br>
			                  	E-mail: Contacts@urbana.lk</b>
                </p>
                    </p>

					<p>

					If you have any Request ?? Let me know
					</p>
                    <form method="post" action="indexcontact.php">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" name="publicname" class="form-control" required="required" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" name="publicemail" class="form-control" required="required" placeholder="Email address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <textarea name="publicmessage" id="" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-success">Submit Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!--END CONTACT SECTION-->





    <!--FOOTER SECTION -->
 <div id="footer">
   <footer class="footer-full" style="background-color: #2F4F4F;">


               <div class="footer-right">

                   <a href="#"><i class="fa fa-facebook"></i></a>
                   <a href="#"><i class="fa fa-twitter"></i></a>
                   <a href="#"><i class="fa fa-instagram"></i></a>
                   <a href="#"><i class="fa fa-linkedin"></i></a>


               </div>






               <div class="footer-left">

                   <p id="footer_desc">

                   We provide state of the art academic facilities and boasts a history of producing great graduates since 1976.
                   </p>

                   <p class="footer-links">
                       <a href="#">Home</a>
                       .
                       <a href="#">About</a>
                       .
                       <a href="#">Alerts</a>
                       .
                       <a href="#">Contact</a>






                   </p>

                   <p>Team_Veilux &copy; 2017</p>
               </div>



           </footer>


    <script src="plugins/jquery-1.10.2.js"></script>

    <script src="plugins/bootstrap.min.js"></script>

    <script src="plugins/jquery.isotope.min.js"></script>

    <script src="plugins/jquery.prettyPhoto.js"></script>

    <script src="js/custom.js"></script>

</body>
</html>
