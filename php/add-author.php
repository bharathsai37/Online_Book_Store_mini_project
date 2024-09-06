<?php
session_start();


if(isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) 
{
    include "../db_conn.php";

    /*checiking if the author name is submitted */
        if(isset($_POST['author_name'])){


                    // getting data from POST request and storing in var
                    $name=$_POST['author_name'];

                    #form validation
            if(empty($name))
                 {
                        $em="The author name is required";
                        header("Location: ../add-author.php?error=$em");
                        exit; 
                 }
            else{
                        #insert into database
                        $sql="INSERT INTO authors (name) 
                            VALUES (?)";
                    $stmt = $conn->prepare($sql);
                    $res  = $stmt->execute([$name]);

                    // if there is no error while inserting the data
                    if($res){
                            #success message
                            $sm="Successfullay created..!!";
                            header("Location: ../add-author.php?success=$sm");
                            exit;
                        }
                    else{
                            #error message
                            $em="Unkown Error Occurred..!!";
                            header("Location: ../add-author.php?error=$em");
                            exit;
                        }
                }
        }
        else{
            header("Location: ../admin.php");
            exit;
        }
} else {
  header("Location: ../login.php");
  exit;
} 
?> 