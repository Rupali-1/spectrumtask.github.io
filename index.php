<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>SPECTRUM CET</title>
        <link rel="stylesheet" href="css/style1.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <script src="https://kit.fontawesome.com/a076d05399.js" ></script>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        
  
    
    </head>
   
    <body>
       
         
             <div class="wrapper"display="block">
                 <nav>
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                      <i class="fas fa-bars"></i>
                    </label>
                     <div class="logo animate__animated animate__bounceInDown">
                           <img src="images/logo.png"width="300"height="70">
                     </div>
                           <ul>
                              <li><a class="active" href="#"><i class="fa fa-home"></i>Home</a></li>
                              <li><a href="#PROJECTS"><i class="fa fa-book"></i>Projects</a></li>
                              <li><a href="#ABOUT US"><i class="fas fa-address-book"></i>About</a></li>
                              <li>
                              <?php
                              if(isset($_SESSION['email']))
                              { 
                                  $name=$_SESSION['name'];
                                  echo '<a href="profile.php"><i class="fa fa-user"></i>'.$name.'</a>';
                              }else{
                                  echo '<a href="registration.php"><i class="fas fa-sign-in-alt"></i>Login</a>';
                              }
                               ?>
                              
                              </li>
                            </ul>
                     
                     
                    
                 </nav>
             </div>
          

          <div class="banner-area">
               
          </div>
          
          <div class="content-area ">
              <div class="wrapper">
                <div data-aos="flip-left">
                  <div class="col-sm-4 ">
                 <About id="ABOUT US">
                       <h1>ABOUT US</h1>   
                 </About><hr>
                   <P>
                     <img src="images/About_us.png" height="450"width="500" align="left"/>
                    
                     SPECTRUM ,Technical society of COLLEGE OF ENGINEERING AND TECHNOLOGY, BHUBANESWAR,
                     a place for all technical enthusiasts to learn,
                     discover and innovate new things in the field of Technology and Design.
                     The name of the club " SPECTRUM ", a contribution of our alumni of 2015 batch, is particularly used to describe the characteristic colors of visible light after passing through a prism, similarly students of CET consist of different skills within them and Spectrum acts like a prism, Spectrum recognises their skills helps them to strengthen it.
                     <br><br>
                     This club was established by " Bikram Keshari Panda (2015 batch) ".
                     Spectrum got its recognition in the year 2016 and got its workspace,
                     funding and other facilities. Primarily this was his idea to have an electronics
                     society in our college but with the efforts of other members we established two 
                     other wings - Software and Design.The other seniors who had their valuable 
                     contribution for this initiative were: Ankit Mishra, Zighnesh Biswal, Abhishek Dash, 
                     Avinash Nayak, Tapan Kumar Pal, Krutikesh Sahoo, Abhilash Das.
                   </P>
                </div>
                </div>
              </div>
              </div>
              <br>
                   
              <div class="content-area ">
                  <div class="wrapper">
                     <div data-aos="flip-right">
                      <div class="col-sm-4 ">
                        <h1>OUR WINGS</h1>
                      </div> 
                      <p> 
                      1. Our club SPECTRUM is so named as it provides us with different wings emitted by the hardwork from
                      our members, showing homologous transitions between Hardware, Software and Designing.
                      <br>
                      2. The HARDWARE team of the Club mainly focuses on VLSI, Embedded Systems and PCB Design.
                      We have developed many projects with implementation and testing of circuits, components,
                      systems, etc.
                      <br>
                      3. The SOFTWARE team is continuously striving for growth in the domains of Web Development,
                      App Development, Competitive Programming, Machine Learning and Data Science. Working as a team, 
                      inspiring each other we quickly develop viable solutions for a better outcome.
                      <br>
                      4. The DESIGN Wing of our Club has proven their creativity in UI/UX Poster Designing.
                      We believe visual communication is a major tool to enhance various creative projects.
                      </p>
                  </div>
                </div>
              </div>
              
          
          
      
      <div class="container"data-aos="fade-up">
          <div class="box animate__animated animate__bounceInLeft">
              <div class="col-md-4 col-12 wings p-3">
                  <div class="inner p-5">
              <div class="icon">01</div>
              <div class="content">
                  <h3>HARDWARE</h3>
                  <p>VLSI<br>EMBADED SYSTEMS<br>PCB DESIGN</p>
              </div>
              </div>
              </div>
          </div>
          <div class="box animate__animated animate__bounceInDown">
            <div class="col-md-4 col-12 wings p-3">
             <div class="icon">02</div>
             <div class="content">
                <h3>SOFTWARE</h3>
                <p>COMPETATIVE PROGRAMMING<br>WEB DEVELOPMENT<br>APP DEVELOPMENT<br>MACHINE LEARNING</p>
             </div>
            </div>
            </div>
        
        <div class="box animate__animated animate__bounceInRight">
            <div class="col-md-4 col-12 wings p-3">
            <div class="icon">03</div>
            <div class="content">
                <h3>DESIGN</h3>
                <p>UI/UX DESIGNING<br>POSTER DESIGNING</p>
            </div>
            </div>
        </div>
      </div>
        
          <div class="main">
            <div data-aos="flip-right">
            <Projects id="PROJECTS">
              
            <h1>PROJECTS</h1>
          </Projects><hr>
            </div>
          
            <div class="cards"height="600px"data-aos="fade-up">
              <div class="image">
                <img src="images/1 (3).jpeg"height="270"/>
              </div>
              <div class="title">
                <h2>Ultrasonic Radar Based Horn System</h2>
              </div>
              <div class="des">
                <p>It is a noiseless horn system for the vehicles to communicate with each other using ultrasonic waves.</p>
                <button><a href="https://github.com/Spectrum-CETB">GITHUB LINK</a></button>
              </div>
            </div>
         
            <div class="cards"data-aos="fade-up">
              <div class="image">
                <img src="images/WhatsApp Image 2021-06-28 at 09.41.52 (1).jpeg"height="310"/>
              </div>
              <div class="title">
                <h3>BHAAVANA</h3>
              </div>
              <div class="des">
                <p>device helps physically imapired people to understand the emotions of the person they are talking to</p>
                <button><a href="https://github.com/Spectrum-CETB">GITHUB LINK</a></button>
              </div>
            </div>
         
            <div class="cards"data-aos="fade-up">
              <div class="image">
                <img src="images/WhatsApp Image 2021-06-28 at 09.41.51.jpeg"height="275"/>
              </div>
              <div class="title">
                <h3>SUPPLY BOT</h3>
              </div>
              <div class="des">
                <p>Robots help to deliver food and medicine aid in flood scenarios to the affected people in remote areas. Semi finalist at IIT bombay, Eyantra competition 2019-20.</p>
                <button><a href="https://github.com/Spectrum-CETB">GITHUB LINK</a></button>
              </div>
            </div>
         
          
            <div class="cards"data-aos="fade-up">
              <div class="image">
                <img src="images/1 (2).jpeg"height="230"/>
              </div>
              <div class="title">
                <h3>FRIENDLY-MEDICO</h3>
              </div>
              <div class="des">
                <p>
                  In this pandemic not everyone of us have the courage to go to hospitals and check our own reports.
                  this app will take some short details and keep it in a database. In future it can be used by medicals to get the health data of a person and if any issue is found by the doctor they can directly
                   contact them and problems can be solved over phones.</p>
                <button><a href="https://github.com/Spectrum-CETB">GITHUB LINK</a></button>
              </div>
            </div>
          
         
            <div class="cards"data-aos="fade-up">
              <div class="image">
                <img src="images/1 (1).jpeg"height="275"/>
              </div>
              <div class="title">
                <h3>Extractive-Text-Summarization</h3>
              </div>
              <div class="des">
                <p>Extractive-Text-Summarization
                  A simple python program which can find the most important sentences in a paragraph 
                  and can give them as the output. 
                  Quite useful for the tasks of reading short summaries of news articles and such.</p>
                <button><a href="https://github.com/Spectrum-CETB">GITHUB LINK</a></button>
              </div>
            </div>
         
            <div class="cards"data-aos="fade-up">
              <div class="image">
                <img src="images/WhatsApp Image 2021-06-28 at 09.41.52.jpeg"height="235"/>
              </div>
              <div class="title">
                <h3>SMART TOILET FOR SENIOR CITIZENS AND PATIENTS</h3>
              </div>
              <div class="des">
                <p>SMART TOILET FOR SENIOR CITIZENS AND PATIENTS
                  A semi automated toilet that is designed for the elderly people and the patients.
                   This toilet helps them defecate and urinate with ease
                   and reduces the filthy labour for the hospital authorities.</p>
                <button><a href="https://github.com/Spectrum-CETB">GITHUB LINK</a></button>
              </div>
            </div>
          </div>
          
        <footer>
            <div class="footer-content">
               
                <h3>Contact Details</h3>
                <p><i class="fa fa-home"></i>College Of Engineering And Technology, Ghatikia, Bhubaneswar - 751003
                    <i class="fa fa-gmail"></i>spectrumclub.cetb@gmail.com<br>
                    <i class="fa fa-phone"></i>+91-8249063374
                </p>
                <ul class="socials">
                    <li><a href="https://www.facebook.com/spCETrum"><i class="fab fa-facebook-square"></i></a></li><br>
                    <li><a href="https://github.com/Spectrum-CETB"><i class="fab fa-github"></i></a></li><br>
                    <li><a href="https://www.instagram.com/spectrum.cetb/?hl=en"><i class="fab fa-instagram"></i></a></li><br>
                    <li><a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQE30klJ9eyKSgAAAXpM5Z_4K5s953DQEJaw3EfmypW2Qgyf5YQ-dTxblf41cfir7JoTlp0yWh-PJtvVU3LpJ9DTY-4i3QA2ziHW9LUm4fbw7hz8kobRYdzToWJsI3E1CUDLF38=&originalReferer=https://www.spectrumcet.com/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fspectrum-cet-3b71431b1%2F"><i class="fab fa-linkedin-square"></i></a></li><br>
                </ul>
            
            <div class="footer-botton">
                <p>copyright Spectrum cet.com</p>
            </div>
            </div>
            
        </footer>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
         <script>
             AOS.init({
             offset:300,
             duration:600
             });
         </script>
        
        
    </body>

</html>