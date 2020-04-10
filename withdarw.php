
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body onload="onloading()">
        <div class="sidebar2">
        <div class="notification">
            <span>Chat With Us</span>
            <span class="badge"><span class="inbadge"></span></span>
        </div>
    </div>
        <div class="container-fluid p-0 m-0" style="overflow: hidden;">
            <div class="container1">
                <div class="header">
                <div class="row justify-content-between c3">
                    <div class="col-lg-2 col-xl-2 col-md-2 col-sm-12 col-12">
                        <img src="assets/img/logo-main.png" id="main" width="150px" height="130px" class="m-auto">
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                        <div class="flex">
                            <div class="flex1">
                                <div>
                                    <div style="background-color: transparent; color:white; cursor: pointer; border: none;"  onclick="select()">
                                       <span id="select1"><img src="assets/img/unitedstates.png" id="img"> ENGLISH </span><span id="icon"></span>
                                    </div>  
                                        <div id="select">
                                        <div id='option' onclick="selectopt(this.innerHTML);"><img src="assets/img/unitedstates.png" id="img"> English</div>
                                        <div id='option2' onclick="selectopt(this.innerHTML);"><img src="assets/img/Russian.png" id="img"> Russian</div>
                                        <div id='option3' onclick="selectopt(this.innerHTML);"><img src="assets/img/germany.png" id="img"> Germany</div>
                                        <div id="option4" onclick="selectopt(this.innerHTML);"><img src="assets/img/Turkey.png" id="img"> Turkish</div>
                                  
                                </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="login.html"><img src="assets/img/Log-in.png" id="icon2" width="40px" height="40px"><span style="margin: 0px 0px;">Log in</span></a>
                                    <p style="position: relative; top: 7px;">/</p>
                                    <a href="index.html"><img src="assets/img/signup.png" id="icon2" width="40px" height="40px" ><span style="margin: 0px 0px;">Create Account</span></a>
                                </div>
                            </div>
                           <div style="margin-left: auto;" class="mt-3">
                            <nav class="navbar navbar-expand-md pr-0 m-auto rens" style="background-color: transparent!important;">                                
                                <button class="navbar-toggler" id='buttonnav' data-toggle="collapse" data-target="#collapse" >
                                    <div id="navicon"></div>
                                    <div id='navicon'></div>
                                    <div id='navicon'></div>
                                </button>
                                <div class="collapse navbar-collapse new" id="collapse">
                                    <div class="flexnav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a href="landing_page.php" class="nav-link">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="about us.php" class="nav-link">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="investment.php" class="nav-link">Investments</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="affliance.php" class="nav-link">Affliates</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="news.php" class="nav-link">News</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="faq.php" class="nav-link">Faq</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="videos.php" class="nav-link">Tesmonial</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="contactus.php" class="nav-link">Support</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                           </div> 
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'withdraw1.php';?>
                </div>
                
            </div>
            <div class="sidebar">
                <a href="paidout.php">PAID OUT</a>
            </div>
            <div class="footer23">
                <div style="margin: auto; margin-top: 40px;">
                    <ul style="margin-left: -35px!important; display: flex; justify-content: space-between;">
                        <li><img src="assets/img/bitcoin.png"></li>
                        <li><img src="assets/img/payeer.png"></li>
                        <li><img src="assets/img/perfectmoney.png"></li>
                        <li><img src="assets/img/litecoin.png"></li>
                        <li><img src="assets/img/dash.png"></li>
                        <li><img src="ethereum.png"></li>
                        <li><img src="assets/img/bitcoincash.png"></li>                     
                    </ul>
                </div> 
                </div>
                <div class="footer px-0">
                    <div class="row justify-content-center text p-0">
                        <div class="col-lg-2 col-xl-2 col-md-6 col-sm-6 align-self-center" style="text-align: center;">
                            <img src="assets/img/logo-main.png" width="130px" height="110px"><br>
                            <a href="#"><img src='assets/img/googlestore.png' width="130px" height="60px"></a>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 ml-0" style="padding-left: 0px!important;">
                                                 <div class="down">
                                       <ul class="flexfooter2" style="list-style-type: none;">
                                                   
                                                    <li class="">
                                                        <a href="about us.html" class="round">ABOUT US</a>
                                                    </li>
                                                    <li >
                                                        <a href="#" class="round">Our Team</a>
                                                    </li>
                        
                                                    <li >
                                                        <a href="investment.html" class="round">For Investors</a>
                                                    </li>
                                                    <li>
                                                        <a href="affliance.html" class="round">For Partners</a>
                                                    </li>
                                                    <li>
                                                        <a href="videos.html" class="round">Videos Tesmonial</a>
                                                    </li>
                                                </ul>
                                            </div>
                               <div class="mt-3 down">
                                <ul class="flexfooter2" style="list-style-type: none;">
                                    <li >
                                        <a href="terms & conditions.html" class="round">Terms & Conditions</a>
                                    </li>
                                    <li >
                                        <a href="privacy policy.html" class="round">Privacy Policy</a>
                                    </li>
                                    <li >
                                        <a href="news.html" class="round">News</a>
                                    </li>
                                    <li >
                                        <a href="faq.html" class="round">Faq</a>
                                    </li>
                                    <li >
                                        <a href="contactus.html" class="round">Contact US</a>
                                    </li>
                                    <li >
                                        <a href="#" class="round">Legal Documentation</a>
                                    </li>
                                  
                                </ul>
                              </div> 
                               
                               <div class="row mt-3 justify-content-end prd" style="width: 96%; margin: auto;">
                                   <div class="col-lg-3 col-xl-4 col-md-5 col-sm-4 col-12">
                                       <h6>Company Address</h6>
                                       <address>NEW LONDON HOUSE WTC 1 C.V. 6 LONDON STREET, THE CITY, ENGLAND, EC3R 7AD, UNITED KINGDOM</address>
                                   </div>
                                   <div class="col-lg-4 col-xl-4 col-md-4 col-sm-5 col-12 ">
                                    <h6>Technical Address</h6>
                                    <address>support@alphatrade.group
                                        </address>
                                </div>
                                <div class="col-lg-3 col-xl-2 col-md-3 col-sm-3 col-12 ">
                                    <h6>Phone</h6>
                                    <address>+447520626553</address>
                                </div>
                                <div class="col-lg-2 col-xl-2 col-md-4 text-right">
                                    <div class="d-flex justify-content-between" style="width: 100px; margin: auto!important;">
                                        <img src='assets/img/youtube.png' height="30px" width="30px">
                                        <img src="assets/img/facebook.png" height="30px" width="30px">
                                        <img src="assets/img/twitter.png" height="30px" width="30px">
                                    </div>
                                </div>
                               </div>
                            </div>
                      
                    </div>
                </div> 
        </div>
    </body>
    <script src="js/jquery.slim.min.js"></script> 
    <script src="js/Untitled-1.js"></script>
    <script src="js/bootstrap.min.js"></script>
      
  <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
  -->
    </html>
