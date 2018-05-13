<?php  
 $connect = mysqli_connect("localhost", "root", "", "dynamic-field");  
 $number = count($_POST["name"]);  
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {    
                $name = mysqli_real_escape_string($connect, $_POST["name"][$i]);
                $price = mysqli_real_escape_string($connect, $_POST["price"][$i]);
                $sql = "INSERT INTO test(name,price) VALUES('".$name."','".$price."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?> 