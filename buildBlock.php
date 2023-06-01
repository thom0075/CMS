<!DOCTYPE html>
<html>
    <head>
        <title>buildBlock</title>
</head>
<body>
    <?php

        $password = filter_input(INPUT_POST, "password");
        $blockType = filter_input(INPUT_POST, "blockType");
        $title = filter_input(INPUT_POST, "title");
        $pageID = filter_input(INPUT_POST, "pageID");
        $content = filter_input(INPUT_POST, "content");
        $pageName = filter_input(INPUT_POST, "pageName");


        if($pageID == 9999){
            $con = new PDO('mysql:host=localhost; dbname=abc', 'root', '');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt_pageName = $con->prepare('INSERT INTO cmspages VALUES (null, ?)');
            $result_pageName = $stmt_pageName->execute(array($pageName));
        }
        else{
            if($password == "thom0075"){
                manageResults();
            }
            else{
                print("Wrong password!");
            }   
        }
        function manageResults(){
            global $blockType, $title, $pageID, $content, $pageName;

            print<<<HERE
            <h2>Page input:</h2>
            <p>
                blockType: $blockType<br>
                title: $title <br>
                pageID: $pageID<br>
                content: $content<br>
                pageName: $pageName<br>
            </p>
HERE;
            try{
                $con = new PDO('mysql:host=localhost; dbname=abc', 'root', '');
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                //creation of a prepared insert statement
                $stmt = $con->prepare('INSERT INTO cmsBlock VALUES(null, ?, ?, ?, ?)');
                $result = $stmt->execute(array($blockType, $title, $content, $pageID));

                if($result){
                    print 'Operation succeded';
                }
                else{
                    print 'There was an error';
                }
            }
            catch(PDOException $e){
                echo 'ERROR: ' . $e->getMessage();
            }   //end try/catch
        }   //end function
    ?>
    <p><a href="new_block.php">Return to cms</a></p>
    <p><a href="page1.php">Return to site</a></p>
</body>
</html>
