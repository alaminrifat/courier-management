<?php
    require('connection.php');
      session_start();
    if(isset($_POST["submit"])){
        $sname = $_POST["sname"];
        $sphone = $_POST["sphone"];
        $saddress = $_POST["saddress"];
        $rname = $_POST["rname"];
        $rphone = $_POST["rphone"];
        $raddress = $_POST["raddress"];
        $pweight = $_POST["pweight"];


        $sql = "INSERT INTO parcel ( sname, sphone, saddress, rname, rphone, raddress, pweight) 
        VALUES ( '$sname', '$sphone', '$saddress', '$rname', '$rphone', '$raddress', '$pweight')";
        $query = $conn->query($sql);

        if ($query == TRUE) {

            echo "New record created successfully";
            header ("refresh:2; url = parcel_send.php");

            $getSql = "SELECT pid FROM parcel ORDER BY pid DESC LIMIT 1";
            $result = $conn->query($getSql);
            $row = $result->fetch_assoc();
            $pid = $row["pid"];

            //update parcel id to tracking
            $pidUpdate = "INSERT INTO parcel_track (pid) VALUES('$pid')";
            $query2 = $conn->query($pidUpdate);
            if($query2 == TRUE){

            echo '<br>'.$pid.' has been recorded to tracking' ;
            
            }

          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    }

?>