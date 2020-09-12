<?php 
    function set_notification($body, $title, $user){
        global $conn;
        $alert = $title."\n".$body;
        foreach($user as $value){
            $checkQuery = "INSERT INTO notification (alert, user_id) VALUES('".$alert."', '".$value."')";
            mysqli_query($conn, $checkQuery);
        }
    }

?>