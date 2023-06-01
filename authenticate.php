<!DOCTYPE html>
<html>
    <head>
        <title>Authentication</title>
        <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    </head>
    <body>
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

                $hash = $result[0]["password"];

                var_dump($result);
                //NOTE: result is a bi-dimensional array
                echo $result[0]["password"];
                //echo gettype($result);
                //echo sizeof($result); 
                
                if(password_verify($password, $hash)){
                    echo "Signed in, Welcome!";
                }
                else{
                    echo "Username or password problem, try again later";
                }
            }
            //print<<<HERE
            //<h2><p>Email: $email</p></h2><hr><h2>Password hash: $password</h2>
//HERE;
            //echo $GLOBALS["password"];
        ?>
</body>
</html>