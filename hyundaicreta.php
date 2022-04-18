<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fusion Car Showroom Website</title>
    <style>
    body{
    	font-family:"Comic Sans MS" , sans-serif;
    	margin:0px;
		background-color: white;
    }
	 
    header{

font-family: "Comic Sans MS" , sans-serif;
text-align: center;
background-image: url("https://images.unsplash.com/photo-1494905998402-395d579af36f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTl8fGNhcnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
        	color: yellow;
        	padding:50px;
        	font-size: 20px;

        }  
        footer{

font-family: "Comic Sans MS" , sans-serif;
text-align: center;
background-image: url("https://images.unsplash.com/photo-1485291571150-772bcfc10da5?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OHx8Y2FyfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
        	color:white;
			margin-top:10%;
        	padding:30px;
        	font-size: 20px;


        } 
 nav{
background-color: lightgrey;
overflow: hidden;

} 
  nav ul{
  	list-style: none;
  	padding: 0px;
  	margin: 0px;

  }
  nav ul li{
  	float: left;

  }	
  nav ul li a{
  	text-decoration: none;
  	color:black;
  	padding: 10px 25px;
  	display: inline-block;
  	font-size: 18px;

  } 
  nav ul li a:hover{
  	background-color: yellow;
  } 
  nav ul li a.active{
  	background-color: grey;
  }	

  
.title{
	background-image: url("https://images.unsplash.com/photo-1528459584353-5297db1a9c01?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mnx8cGxhaW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
  width: 100%;
  padding: 12px 20px;
  margin-top: 40px;
  text-align:center;
  text-transform: Uppercase;
  font-weight: 800;
  font-size: 30px;
}



    	
    </style>
  
    
</head>
<body>
<!-- main header -->
<header>
	<h1>Fusion Car Showroom</h1>
	<p>A site which can make your dream car real</p>
</header>
<!-- main nav -->
<nav>
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="#">Contact</a></li>
	<li><a href="order_car.php">Order</a></li>
	<li><a href="#">Customer</a></li>
	<li><a href="details.php">Details</a></li>

</ul>
</nav>    

<!-- contents -->

  <section id = "section1">
		<div class="title" align="center"> Details  </div><br><br>
		<div style="margin-left:3%; margin-right:3%">
		 <img src="https://images.carandbike.com/car-images/colors/hyundai/creta/hyundai-creta-red-mulberry.png?v=1602051013" width="600" height="380" >
<img align="right" src="https://images.carandbike.com/car-images/colors/hyundai/creta/hyundai-creta-galaxy-blue.png?v=1602051026" width="600" height="380">
<img src="https://images.carandbike.com/car-images/colors/hyundai/creta/hyundai-creta-lava-orange-dual-tone.png?v=1602051053" width="600" height="380" >
<img align="right" src="https://images.carandbike.com/car-images/colors/hyundai/creta/hyundai-creta-deep-forest.png?v=1602051095" width="600" height="380">
<table width="100%">
	<th>Hyundai Creta</th>
	<th>Hyundai Creta</th>
	
</table>
<br>
		
		
 <div style="margin-left:5%; margin-right:5%; margin-top:50px; margin-bottom:50px;text-align:center;background: #ffcccc">
<br>


   <table width="100%">
       
            <tr>
               
                <th >Model</th>
				<th>Engine</th>
				<th >Transmission</th>
				<th>Mileage</th>
				<th>Max Power</th>
                <th >Fuel</th>
				<th>Color</th>
				<th> Availability</th>
				<th>Price</th>
				


            </tr>
            
       
			
		
			
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM hyundaicreta";
			$result = $conn-> query($sql);
			if($result-> num_rows > 0){
				
				
				while($row = $result-> fetch_assoc()){
				echo "<tr><td>".$row["Model"]."</td><td>".$row["Engine"]."</td><td>".$row["Transmission"]."</td><td>".$row["Mileage"]."</td><td>".$row["Max Power"]."</td><td>".$row["Fuel"]."</td><td>".$row["Color"]."</td><td>".$row["Availability"]."</td><td>".$row["Price"]."</td></tr>";
					
				}
				echo "</table>";
			}	
else{
	//echo "nothing";
}			
	$conn-> close();			
			?>
			
			
			
		
		
		</table>
	

		
		
</section>
<h2 align=center > To order visit <a href="user.php">here</a> For any query text <a href="contact.php">here</a></h2><br>



<scetion>
<h2 align = center> Watch Exclusive Promo</h2><br>


<iframe width="560" height="315" src="https://www.youtube.com/embed/woBtKfhvgA0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/2IgkwY03UVk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<!-- main footer -->
</section>
<footer>
<h2>Copyright &copy;2020 , Fusion Car Showroom</h2>
<p>All rights are reserved.</p>
<small>Developed & maintained by Fusion Car Showroom</small>	
</footer>
	

</body>
</html>


