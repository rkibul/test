<?php 
$connection = mysqli_connect("localhost", "root", "","restaurant");
$sql = "SELECT * FROM items";
$result = mysqli_query($connection,$sql);
?>

<html>
<head>
	<title>Register</title>
	<link href='css/style.css' rel='stylesheet'>
	<script src="js/register.js"></script>

</head>

<body>

<?php
	//Establishing Connection with Server
	$connection = mysqli_connect("localhost", "root", "","restaurant");

	//Selecting Database from Server

	
	if(isset($_POST['submit'])){
   
	//Fetching variables of the form which travels in URL
    
    $name = $_POST['itmname'];
	$type=$_POST['type'];
    $resname = $_POST['resname'];
    $loc = $_POST['address'];
    $price = $_POST['price'];
  

  //if ($name != "" && $type != "" && $resname != "" && $loc != "" && $price !="")
  // {
   
	mysqli_query($connection,"INSERT INTO items(name, type,resname,location, price) VALUES ('$name', '$type','$resname','$loc','$price')")
	 or die("Could not execute the insert query.");
     echo '<script> alert("Item Added successfully")</script>';
  // }
}
?>	


			

<div class="reg">
	<form name="myForm" onsubmit="return validateForm()" method="POST" action="">
		
            
              <table>
            <tr>
                <td>Item Name</td>
                <td><input type="text" name="itmname" class="input" >
				
				</td>
            </tr>
            <tr>
                <td>Item Type</td>
                <td><input type="text" name="type" class="input" > 
				</td>
            </tr>
            <tr>
				<td>Restaurant Name</td>
				<td><input type="text" name="resname" class="input" value="" >
				
				</td>
			</tr>
            <tr>
                <td>Location</td>
                <td><input type="text" name="address" class="input" value="" >
				
				</td>
            </tr>
			<tr> 
				<td>Price</td >
				<td><input type="text" name="price" class="input" value="" ></td>
			</tr>
      
			
			
		</table>
			   <div align="right">
				<input type="submit" name="submit" value="Add This Item" class="btn addbtn" style="border-radius:1px;">
			     </div>
				
		
	</form>
	<div align="center">
				<input type="submit" name="hide" value="Hide" class="btn cbtn" style="border-radius:1px;" onclick="location.href='hide.php'">
			     </div>
	

	<br/><br/>
	
	<div>
<h1 align="center">List Of All The Good Mood Foods</h1>
<hr style="border:2px solid black"></hr>
</div>
	
</div>

<div class="product_area">
		  <ul>
              <?php
              if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){ ?>
                        <li>
                         
                                <table class="single_product">
                                   
                                   <tr>
                                       <td> <h2><?= $row['name']; ?></h2></td>
								  </tr>
								    <tr>
                                        <td><h3>(<?= $row['type']; ?>)</h3></td>
								  </tr>
								    <tr>
                                       <td> <p>At <?= $row['resname']; ?>, <?= $row['location']; ?></p></td>
                                    </tr> 
                                     <tr>
									 <td><input type="text" name="vote" value="+2 Votes" style="box-shadow:0px 0px 1px 2px #123456;border:none;border-radius:1px; width:70px; float:left;" >
									 <input type="button" value="+" style="box-shadow:0px 0px 1px 2px #123456;border:none;border-radius:1px; 
									    width:20px;float:left;margin-left:8px;cursor: pointer;color:green;">
										<input type="button" value="-" style="box-shadow:0px 0px 1px 2px #123456;border:none;border-radius:1px; 
									    width:20px;float:left;margin-left:8px;cursor: pointer;color:red;">
										
									 </td>						          
                                     </tr>	

                                     								 
                                    
                                </table>
                          
                        </li>
                    <?php }
                }
              ?>
			  
		  </ul>
</div>	



  

</body>
<br/><br/><br/>

</html>
