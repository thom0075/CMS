<?php
            $email = filter_input(INPUT_POST,"email");
            $password = filter_input(INPUT_POST, "password");
            
            if(isset($_POST['signup'])){
                $con = new PDO('mysql:host=localhost; dbname=abc', 'root', '');
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $con->prepare('INSERT INTO users VALUES (null, ?, ?)');
                $result = $stmt->execute(array($email, password_hash($password, PASSWORD_DEFAULT)));
            }

            else{
                $con = new PDO('mysql:host=localhost; dbname=abc', 'root', '');
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                //$dbp = "";

                $stmt = $con->prepare('SELECT password FROM users WHERE email=?');
                //echo $email;
                $stmt->execute(array($email));
                $result = $stmt->fetchAll();

                if(sizeof($result) >=1){
                    $hash = $result[0]["password"];

                    //var_dump($result);
                    //NOTE: result is a bi-dimensional array
                    //echo $result[0]["password"];
                    
                    if(password_verify($password, $hash)){
                        header("Location: /sito/new_block.php");
                        //echo "Signed in, Welcome!";
                    }
                    else{
                        header("HTTP/1.1 404 not Found");
                        //echo "Username or password problem, try again later";
                    }
                }
                else{
                    header("Location: /sito/login.php");
                }

            //print<<<HERE
            //<h2><p>Email: $email</p></h2><hr><h2>Password hash: $password</h2>
//HERE;
            //echo $GLOBALS["password"];
            }
?>
            