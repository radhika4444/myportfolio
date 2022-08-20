<?php
$insert = false;
if(isset($_POST['txt_name'])){ 
   $server="localhost";
   $username="root";
   $password="";
   $con=mysqli_connect($server,$username,$password);

   if(!$con){
      //echo "failed connecting to the db due to ".mysqli_connect_error();
     }
     else{
      //echo "success connecting to the db  ";
     }

    $name=$_POST['txt_name'];
    $email=$_POST['txt_email'];
    $contact=$_POST['txt_phone'];
    $other=$_POST['txt_message'];

    $sql="INSERT INTO `portfolio info`.`info` ( `name`, `email`, `contact`, `other`, `dt`) 
    VALUES ('$name', '$email', '$contact', '$other', current_timestamp());";

    if($con->query($sql) == true){
      //echo "Successfully inserted";
      $insert=true;
    }
    else{
      //echo "error : $sql <br> $con->error";
    }

   //close database connection
   $con->close();
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
<body class="main-content">
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <!--<div class="h-shape"></div>-->
                <div class="image">
                    <img src="image.jpeg" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Hi, I'm <br><span class="colour_change n">Radhika Mittal</span>
                    <br>A Full Stack developer
                </h1>
                <button><a href="#">Download Resume</a></button>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h3>ABOUT <span class="colour_change">ME</span></h3>
            </div>
            <div class="about-container">
                <div class="left-about">
                    
                    <p>
                        Highly immensed and motivated FULL STACK DEVELOPER . Seeking a challenge career with a progressive organisation that provide an opportunity to capitalize my technical skills and ability in the field of IT.</div>
   
                    </p>
                    <!--<div class="btn-con">
                        <a href="#" class="main-btn">
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>-->
                </div>
                
            <div class="about-stats">
                <h3 class="stat-title">My Skills</h3>
                <h4>Front-End</h4>
                <br>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">html5</p>
                        <div class="progress-con">
                            <p class="prog-text">90%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">css3</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">javascript</p>
                        <div class="progress-con">
                            <p class="prog-text">60%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">react</p>
                        <div class="progress-con">
                            <p class="prog-text">50%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">bootstrap</p>
                        <div class="progress-con">
                            <p class="prog-text">30%</p>
                            <div class="progress">
                                <span class="bootstrap"></span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h4>Others</h4>
                    <br>
                    <div class="progress-bar">
                        <p class="prog-title">CPP</p>
                        <div class="progress-con">
                            <p class="prog-text">50%</p>
                            <div class="progress">
                                <span class="cpp"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">CORE JAVA</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="java"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">LINUX</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="linux"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">DBMS</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="dbms"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                
                <!--<div id="personal_skills">
                    <h3>Interpersonnal </h3>
                    <br>
                    <ul>
                        <li>
                         Ability to work independently and as a part of team
                         </li>
                         <li>Quick learner</li>
                         <li>Self motivated and hard working</li>
                     </ul>
                     </div>-->
            </div>
            <h4 class="stat-title">My Education</h4>
            <div class="timeline">
                <div class="timeline-item" class="odd">
                    <div class="tl-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <p class="tl-duration">August 2020 - Present (upto 4th Sem)</p>
                    <h5>Chitkara University (CU) ,Rajpura,Punjab</h5>
                    <p>
                        Bachelor of Engineering(BE) in Computer Science
                        (CGPA:9.93)
                    </p>
                </div>
                <div class="timeline-item" class="right">
                    <div class="tl-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <p class="tl-duration">April 2018 - April 2019</p>
                    <h5>Spring Fiels Public School,Yamuna nagar,Haryana</h5>
                    <p>
                        12th class
                        (Percentage:82%)
                    </p>
                </div>
                <div class="timeline-item"  class="odd">
                    <div class="tl-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <p class="tl-duration">April 2016 - April 2017</p>
                    <h5>Spring Fiels Public School,Yamuna nagar,Haryana</h5>
                    <p>
                        10th class
                        (CGPA:9.98)
                    </p>
                </div>
            </div>
        </section>
       <section class="container" id="portfolio">
            <div class="main-title">
                <h2>MY <span id="colour_change">WORK</span></h2>
            </div>
            <p class="port-text">
                Here are some of the projects that I have made.
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port1.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>My PORTFOLIO website</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                    <!--<div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>-->
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port3.jpg" alt="">
                    </div>
                    <!--<div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>-->
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port4.jpg" alt="">
                    </div>
                    <!--<div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>-->
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port5.jpg" alt="">
                    </div>
                    <!--<div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>-->
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                   <!--<div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
       
        <section class="container contact" id="contact">
            <div class="contact-container">
                <h2>CONTACT<span id="colour_change"> ME</span></h2>
                <div class="contact-parent">
                   <div class="contact-child child1">
                     <h3>Lets get in touch</h3>
                     <div class="line"></div>
                      <p>
                         <i class="fas fa-map-marker-alt colour_change"  ></i> Address <br >
                         <span> Yamunanagar,Haryana,India
                         </span>
                      </p>
                      <p>
                         <i class="fas fa-phone-alt colour_change"></i> Phone <br />
                         <span> 8059434016</span>
                      </p>
                      <p>
                         <i class=" far fa-envelope colour_change"></i> Email<br/>
                         <span>radhikamittal00842@gmail.com</span>
                      </p>
                      <div class="icons">
                        <div><a href="https://github.com/" target="blank"><i class="fab fa-github"></i></a></div>
                        <div><a href="https://www.linkedin.com/company/linkedin/?originalSubdomain=in" target="blank"><i class="fab fa-linkedin"></i></a></div>
                        <div><a href="https://www.instagram.com/?hl=en" target="blank"><i class="fab fa-instagram"></i></a></div>
                       
                      </div>
                   </div>
                   <div class="contact-child child2">
                      <div class="inside-contact">
                         <h2>Drop a Message</h2>
                        <form action="index.php" method="post">
                         <input id="txt_name" name="txt_name" type="text" Required="required" placeholder="YOUR NAME">
                         
                         <input id="txt_email" name="txt_email" type="text" Required="required" placeholder="YOUR EMAIL">
                         
                         <input id="txt_phone" name="txt_phone" type="text" Required="required" placeholder="YOUR CONTACT NO">
                        
                         <textarea id="txt_message" name="txt_message" rows="4" cols="20" Required="required" placeholder="MESSAGE HERE..."></textarea>
                         <input type="submit" id="btn_send" value="SEND">
                        </form>
                      </div>

                   </div>
                </div>
             </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>