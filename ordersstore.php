<!DOCTYPE html>
<html>
<head>
 <title>STORED ORDERS</title>
 <style>
  b{
    font-size: 20px;
    font-family: 'Arial';
    padding: 2px;
    text-align: center;
}
  table 
  {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 15px;
   text-align: left;
   font-family:"Verdana";
   font-weight: bold;
   text-align: center;
   
  } 
  th 
  {
   background-color: maroon;
   color: white;
   
  }
  h1{
    font-family: "times new roman";
    font-size: 40px;
    border: 9px solid grey;
    border-radius: 17px;
     color: maroon;
  }
  td{
    padding: 12px;
    font-family: "Verdana";
  
  }
  tr:nth-child(even) {background-color: #87CEFA; 
    border-radius: 14px;}
 </style>
</head>
<body style="background-color: lavender">
  <h1><center><font style="border:9px solid grey"> STORED PROCEDURE OF ORDERS TABLE </font></center></h1>
 <table>
 <tr>
     <th><br>ORD_ID<br><br></th> 
  <th><br>ITEM_ID<br><br></th> 
  <th><br>QUANTITY<br><br></th> 
     <th><br>ITEM_RATE<br><br></th>
     <th><br>TOTAL<br><br></th>
  <br><br>
 </tr>
 
     <?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"restaurant");
echo " Creating stored procedure<br/>";

$sql3="create procedure display() select * from orders";
mysqli_query($con,$sql3);
echo "Procedure  created successfully<BR/>";


echo " Calling Stored Procedure<BR/>";
if ($result = mysqli_query($con,"call display()"))
   {
     
      while($row = mysqli_fetch_assoc($result))
      {
      echo "<tr><td>" . $row["ORD_ID"]. "</td><td>" .$row["ITEM_ID"]. "</td><td>" .$row["QUANTITY"]. "</td><td>".$row["ITEM_RATE"]. "</td><td>" .$row["TOTAL"]. "</td></tr>";
      }
      echo "</table>";
      }
      else {
	  		    echo "0 results";
	  		}

	$con->close();
		?>
     
     
     
</table>
    <p style="font-family: Black And White Picture"><a href="orders.html"><font style="color:black">GO BACK</font></a></p>
</body>
</html>