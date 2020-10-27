

<?php 
    $email_array=[];
    $provider_array=[];
    if ($result->num_rows > 0){
         echo "<table>";
        while($row = $result->fetch_assoc()){
            $email_array[]=$row;
            echo "<tr><td>" . $row['email'] . "</td></tr>";
        }
        echo "</table>";
    }
    

   
    $con->close();


?>
