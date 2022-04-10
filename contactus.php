<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/CSS" href="style.css">
    <style>
        body {
            background-color: whitesmoke;
            
  margin:0%; 
  height: 150vh; 
 }
        
       #space{
           padding-top: 100px;
           text-align: center;
       }

        #mail {
            /* position: fixed; */
            bottom: 16em;
            left: 12em;
        }

      

        #maillogo {
            width: 40px;
            height: 34px;
            /* position: fixed; */
            left: 9em;
            bottom: 17em;
        }

        #conatactus {
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
           
        }

        .text {
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 40px;

        }
        .query{
            
            border-radius: 2px;
            /* position: fixed; */
            bottom: 18em;
            left: 60em;
        }
        #sendbtn{
            background-color: sandybrown;
            color: black;
            border: solid red;
            border-radius: 7px;
            padding: 4px;
        }
        #namebox{
            border-radius: 5px;
            margin: 3px 4px;
             padding: 5px 25px;
        }
        #emailbox{
            border-radius: 5px;
            margin: 3px 4px;
            padding: 5px 25px;
        }
        #querybox{
               border-radius: 5px;
               margin: 3px 4px;
               padding: 5px 25px;
        }
        #textone{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: xx-large;
        }
        #texttwo{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        #lefttext{
            font-size: 45px;
            /* position: fixed; */
            bottom: 7em;
            left: 3em;
            font-weight: bold;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
            
        }
        
    #foot{
  background-color: #098df1;
  text-align: center;
  width:112%;
  height:180px;
  font-size: 20px;
 
 }
    </style>
    
   
</head>
<body>
    <div id="head">
       
    
        <label >FitnessWolf</label>
        <img id="lobo"src="Images/gym_lobo.jpeg">
       <a href="https://api.whatsapp.com/send?phone=+916395948832"><img id="social"src="Images/whatsapp.jpeg"></a>
        <a href="https://instagram.com/fitness.com576?utm_medium=copy_link"><img id="social"src="Images/instagram.jpg"></a>
        <a href="https://www.facebook.com/Fitnesscom-102921852315058/"><img id="social1"src="Images/facebook.jpg"></a>
    

    </div>
 

    <div id="navigation">
       
            <nav>
               
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="program.php">Program/Classes</a></li>
                    <li><a href="packages.php">Packages</a></li>
                   
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                   
                
                </ul>
               
              
                <a  class="signup" href="signup.php">Join Us</a>
            
    
        </div>

        <form  id="space" action="contactushelp.php" method="POST">
           
            <p class="text">Have
                any questions? We'd love to hear from you.</p>
            <div id="lefttext">
                <p id="mid">Let's Chat.Tell me about your problems.</p>
            </div>
                <!-- <p id="mail"> <a href="https://www.google.com/search?q=mail&oq=mai&aqs=chrome.0.69i59j69i57j46i67i199i465j0i67j0i10i131i433j0i67j69i60l2.1005j0j7&sourceid=chrome&ie=UTF-8"> <img src="Images/mail.jpg" alt="error" id="maillogo"> </a> MAIL ME AT<br> <a
                    href="mailto: abc@example.com">dumbo@gmail.com</a></p> -->
            <div class="query">
                <p id="textone" >Send us a message.🚀</p>
                <input id="namebox" name="name" type="text" placeholder="FullName*" ><br>
                <input id="emailbox" name="email"type="email"  placeholder="Email*" ><br>
                <input id="querybox" name="querybox" type="text"  placeholder="query*" >
                <p id="texttwo">Tell us more about yourself. </p>
                <button type="submit" >Submit Query</button>
                  
            </div>
            <br>
        </form>
        <form action="signup.php">
      <div class="register">
         Ready to try a Fitness workout ?
            <input type="submit" value="Get Started Today" id="reg">
      </div>
      <form>

<div id="foot">
    FOLLOW OUR SOCIAL MEDIA HANDLES<br>
    <a href="https://api.whatsapp.com/send?phone=+916395948832"><img id="social"src="Images/whatsapp.jpeg">WHATSAPP</a><br>
        <a href="https://instagram.com/fitness.com576?utm_medium=copy_link"><img id="social"src="Images/instagram.jpg">INSTAGRAM</a><br>
        <a href="https://www.facebook.com/Fitnesscom-102921852315058/"><img id="social1"src="Images/facebook.jpg">FACEBOOK</a><br>
        FITNESSWOLF © 2022
            </div>
        </body>
        
        </html>