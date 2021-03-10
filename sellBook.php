<?php
session_start();
if($_SESSION["loggedin"] != true){
    echo 'not logged in';
    header("Location: DevamLogin.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Victory Template
http://www.templatemo.com/tm-507-victory
-->
        <title>Dragon Trades</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

      
        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="main.js"></script>
        <script src="script.js"></script>
        </script>
        <link rel="stylesheet" href="style.css">
        
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <body style="background-color:	#C39482;;">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
  
  
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: C39482;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: center;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after{
  content: "";
  display: table;
  clear: both;
}
li a:hover {
  background-color: #45a049 !important;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
    <div class="header">
        <div class="container">
            
            <img src="logo1.JPG" alt="Dragon Trade" width="20" height="20">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-togglee" class="navbar-togglle" data-toggle="collapse" data-target="#main-nav">
                        <a href="index.php" class="navbar-brand scroll-top">Dragon Trades</a>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="sellBook.php">Sell Book</a></li>
                        <li><a href="DevamLogin.php">Log In</a></li>  
                        <li><a href="checkout.php">Checkout</a></li>  
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->
    



<div class="container">
  <div style="text-align:center">
    
    
  </div>
  <div class="row txt-center">
    <div class="column">
    </div>
    <div class="column">
      <form action="db.php" method="POST" enctype="multipart/form-data">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="department">Department</label>
        <select id="department" name="department">
            <option value="CCI">Arts and Sciences</option>
            <option value="College of Medicine">Bennett S. LeBow Coll. of Bus.</option>
            <option value="College of Arts">Center for Civic Engagement</option>
            <option value="College of Arts">Close Sch of Entrepreneurship</option>
            <option value="College of Arts">Col of Computing & Informatics</option>
            <option value="College of Arts">College of Engineering</option>
            <option value="College of Arts">Dornsife Sch of Public Health</option>
            <option value="College of Arts">Goodwin Coll of Prof Studies</option>
            <option value="College of Arts">Miscellaneous</option>
            <option value="College of Arts">Nursing & Health Professions</option>
            <option value="College of Arts">Pennoni Honors College</option>
            <option value="College of Arts">Sch.of Biomed Engr,Sci & Hlth</option>
            <option value="College of Arts">School of Education</option>
        </select>
        <label for="INumber">ISBN Number</label>
        <input type="text" id="INumber" name="isbnnumber" placeholder="ISBN Number">
        <label for="dEmail">Drexel Email</label>
        <input type="text" id="dEmail" name="drexelemail" placeholder="Drexel Email">
        <label for="subject">Book Name</label>
        <textarea id="subject" name="subject" placeholder="Enter Book Name.." style="height:170px"></textarea>
        <h3>Select a file:</h3>
          <label for="myfile">Select a file to upload:</label>
          <input type="file" id="myfile" name="fileToUpload" multiple><br><br>
          <input type="submit" name="sellBookSave" id="Submit" value="Submit">
      
      </form>
    </div>
  </div>
</div>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright &copy; 2020 Dragon Trades</p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="http://www.facebook.com/templatemo" target="_parent"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Designed by <em>Drexel Students</em></p>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>