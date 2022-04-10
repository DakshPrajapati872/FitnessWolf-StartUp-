<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/CSS" href="style.css">
    <style>
    form{
        padding-top:100px;
    }
    h1 { text-align: center; font-size: 60px; }
		tr:hover{color: blue;}
		tr{font-size:22px;}
        
    #foot{
  background-color: #098df1;
  text-align: center;
  width:112%;
  height:180px;
  font-size: 20px;
 
 }
 body{
  margin:0%; 
  height: 150vh; 
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
            </nav>
            
    
        </div>
        <form>
        <h1>Packages</h1>
	<table border="1" cellpadding="10" cellspacing="5" width="100%" style="border-collapse: collapse ;">
		<thead>
			<tr>
				<th><b> Package</b></th>
				<th><b>Validity</b></th>
				<th><b>Price(In Rupees)</b> </th>
			</tr>
			<tbody>
				<tr>
					<td>A: 6 Days Per Week Schedule Workout</td>
					<td>3 Months</td>
					<td>2000</td>
				</tr>
				<tr>
				<td>B: 5 Days Per Week Schedule Workout</td>
					<td>3 Months</td>
					<td>1500</td>
				</tr>
				<tr>
                <td>C: 4 Days Per Week Schedule Workout</td>
					<td>4 Months</td>
					<td>2200</td>
				</tr>
				<tr>
				<td>D: 5 Days + 1 Day Special Per Week Schedule Workout</td>
					<td>3 Months</td>
					<td>2500</td>
				</tr>
				<tr>
                <td>E: 5 Days Schedule Workout For The Girls</td>
					<td>6 Months</td>
					<td>4000</td>
				</tr>
				
			</tbody>
		</thead>
	</table><br><hr>
	<hr>
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