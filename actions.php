<?php 

include('functions.php');



if($_GET['action']== "loginSignup"){

   $error ="";
// validation
   if(!$_POST['email']){
   
     $error = 'an email is required';

   }else  if(!$_POST['password']){

    $error = "Password is required";

   }else if ($filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)===false){

    $error = "Please enter a valid email address";

   }

     if($error != ""){

    	echo $error;
    	exit();
    }
   

	// signing up or login 

	if($_POST['loginActive']=="0"){

		$query = "SELECT * FROM users WHERE username = '" . mysqli_real_escape_string($conn, $_POST['email'])."' LIMIT 1";
		
		$result = mysqli_query($conn, $query);

		if(mysqli_num_rows($result)==0) $error = "This email address is already taken";
		
		else{
          
          $query = "INSERT INTO users (`email`, `password`) VALUES('". mysqli_real_escape_string($conn, $_POST['email'])."', ".mysqli_real_escape_string($conn, $_POST['password']).")";

               if(mysqli_query($conn, $query)){

               $query = "UPDATE users SET password = '".md5(md5(mysql_insert_id($conn)).$_POST['password'])."' WHERE id = '".mysql_insert_id($conn)."' LIMIT 1";

               mysqli_query($conn, $query);

         
               	echo 1;
               }else{

               	$error= "Could not create user"
              
                 }
		    
       

        } else{


                         $query = "SELECT * FROM users WHERE username = '".mysqli_real_escape_string($conn, $_POST['email'])."' LIMIT 1";

					     $result = mysqli_query($conn, $query);

					     $row = mysqli_fetch_assoc($result);

					     	if($row['password']== md5(md5($row['id']).$_POST['password'])){

					     		echo 1
					     	}else{

					     		$error = "Could not find user pass combination";
					     	}
					     


	       }




        }


      if($error != ""){

    	echo $error;
    	exit();
        }



     
      if($error != ""){

    	echo $error;
    	exit();
        }
   

	
}




?>