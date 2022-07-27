<?php
    require('connection.php');
    session_start();
    if(isset($_POST["submit"])){
        $cname = $_POST['cname'];
        $mail = $_POST['cmail'];
        $cphone = $_POST['cphone'];
        $caddress = $_POST['caddress'];
        $cdob = $_POST['cdob'];
        $cpass = $_POST['cpass'];

        $squery = "SELECT * FROM customer_table WHERE customer_email='$mail'";
        $query = $conn->query($squery);
        $row = $query->fetch_assoc();
        if($row > 0){
            echo $mail.' - Mail Alredy Registered';
            echo '<br>You will be redirected soon!';
            header ("refresh:3; url = csignupview.php");
        }
        else{
             $sql = "INSERT INTO customer_table (customer_name, customer_dob,customer_email,customer_address,customer_phone,customer_password)
             VALUES ('$cname','$cdob','$mail','$caddress','$cphone','$cpass')";
             $query2 = $conn->query($sql);
             if($query2 == TRUE) {
                 echo "New record created successfully";
                 $_SESSION['umail'] = $mail;
                 header ("refresh:2; url = private.php");               
               } 
               else{
                 echo "Error: " . $sql . "<br>" . $conn->error;
               }

            }
    


     $conn->close();
    }   

?>