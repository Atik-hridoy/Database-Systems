<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fusion Car Showroom Website</title>
    <style>
    body{
    	font-family:"Comic Sans MS" , sans-serif;
	background-color: white;
    	margin:0px;
		
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

  aside{
  	background-color: lightyellow;
  	float: left;
  	width: 200px;
  	text-align: center;
  	height:200px;
  	overflow-y: scroll;
}

aside ul{
	list-style-type: none;
	padding: 0px;
	margin: 0px;

}
aside ul li a{
	text-decoration: none;
	color:black;
	padding:10px 20px;
	display: block;

}
aside ul li a:hover{
	background-color:yellow;
	color:black; 
}
section{
	margin-left: 200px;
	border-left: 2px solid grey;
	padding: 10px;

}
details{
background-color: lightgrey;
margin: 5px;
padding: 10px;
border-radius: 50px;


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

.form_design{
	
    margin-top: 50px;
	margin-bottom: 50px;
	margin-left: 25%;
	width: 50%;
}
input[type=text], input[type=password]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 15px;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: grey;
  border: none;
  border-radius: 10px;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  margin-left: 40%;
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
	<li><a href="#">Home</a></li>
	<li><a href="contact.php">Contact</a></li>
	
	<li><a href="#">Customer</a></li>
	<li><a href="user.php">Order</a></li>
	<li><a href="details.php">Details</a></li>
	<li><a href="search.php">Search</a></li>
	
	

</ul>
</nav>    
<!-- side bar -->
<aside>
	<ul>
	<li><a href="#">Showrooms</a></li>
	<li><a href="#">Model</a></li>
	<li><a href="#">Available</a></li>
	<li><a href="#">Payment</a></li>
	<li><a href="#">Location</a></li>
	<li><a href="#">Review</a></li>

	</ul>
</aside>
<!-- contents -->

  <section id = "section1">
  <input class = "search-txt" type = "text" name = "" placeholder = "Type to Search" >
		<div class="title"> SIGN IN </div>
		
		<form action="signin.php" class="form_design" method="post">
			Username: <input type="text" name="fname"> <br/>
			Password: <input type="password" name="pass"> <br/> <br/>
			<input type="submit" value="Sign In">
		</form>
</section>

<!-- main footer -->
<footer>
<h2>Copyright &copy;2020 , Fusion Car Showroom</h2>
<p>All rights are reserved.</p>
<small>Developed & maintained by Fusion Car Showroom</small>	
</footer>	

	

</body>
</html>


