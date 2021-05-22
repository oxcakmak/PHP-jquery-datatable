<?php require_once('config.php');
/*
* https://github.com/ThingEngineer/PHP-MySQLi-Database-Class
* Do you have a session? / Security
*/
if(isset($_SESSION['session'])){
        /*
        * Get User List
        */
        if(PERMISSION_VIEW_USER==1){
            if(isset($_POST['getUsers'])){
                header('Content-Type: application/json');
                $dbh->orderBy("id", "DESC"); $v = -1;
                foreach($dbh->get("user", null, array("firstname", "lastname", "username")) as $userRow){ $v++;
                    $data[]["id"] = $v; /* Add array to number (Ordering) */
                    $data[$v]["fullname"] = $ktf->strUpFirst($userRow['firstName']).'&nbsp;<span class="text-uppercase">'.$userRow['lastName'].'</span>';
                    $data[$v]["username"] = $userRow['username'];
                }
                echo json_encode($data);
            }
        }
    }
?>
