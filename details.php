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

</ul>
</nav>    

<!-- contents -->

  <section id = "section1">
		<div class="title" align="center"> CAR List </div><br><br>
		<div style="margin-left:3%; margin-right:3%">
		<a href="marutisuzuki.php" target="_blank"> <img src="https://images.carandbike.com/car-images/large/maruti-suzuki/alto-800/maruti-suzuki-alto-800.webp?v=37" width="600" height="380" ></a>
<a href="hyundaicreta.php" target="_blank"><img align="right" src="https://images.carandbike.com/car-images/large/hyundai/creta/hyundai-creta.webp?v=57" width="600" height="380">
<table width="100%">
	<a href="marutisuzuki.php" target="_blank"><th>Maruti Suzuki Alto 800</th></a>
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
                <th >Fuel</th>
				<th> Availability</th>
				<th>Price</th>


            </tr>
            
       
			
		
			
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM details";
			$result = $conn-> query($sql);
			if($result-> num_rows > 0){
				
				
				while($row = $result-> fetch_assoc()){
				echo "<tr><td>".$row["Model"]."</td><td>".$row["Engine"]."</td><td>".$row["Transmission"]."</td><td>".$row["Fuel"]."</td><td>".$row["Availability"]."</td><td>".$row["Price"]."</td></tr>";
					
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


