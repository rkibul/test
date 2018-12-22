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




<br/>			

<div>

	<div align="center">
			
       <button class="btn addbtn" style="border-radius:1px;" onclick="location.href='restaurant.php'">Show</button>
				</div>
	

	<br/><br/>
	
	<div>
<h1 align="center">List Of All The Good Mood Foods</h1>
<hr style="border:2px solid black; width:35%" ></hr>
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
