<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap index</title>
        <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    </head>
    <body>
        <div>
            <form action="buildBlock.php" method="post">
                <fieldset>
                    <label>Password</label>
                    <input type="password" name="password">
                    <label>pageName</label>
                    <input type="text" name="pageName">

                    <select name="blockType">
                        <option value="1">head</option>
                        <option value="2">menu</option>
                        <option value="3">content1</option>
                        <option value="4">content2</option>
                        <option value="5">footer</option>
                    </select>

                    <label>Title</label>
                    <input type="text" name="title" maxlength="45">

                    <label>Content</label>
                    <textarea name="content" rows="10" cols="40"></textarea>

                    <select name="pageID">
                        <?php
                            $con = new PDO('mysql:host=localhost; dbname=abc', 'root', '');
                            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $query = "SELECT * FROM `cmspages`";
                            $result = $con->query($query);
                            //$row = $result->fetch(PDO::FETCH_ASSOC);

                            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                //row is equal to an associative array
                                //prints the values contained in the array using the keys
                                print<<<HERE
                                <option value="{$row['cmsPageID']}">{$row['pageName']}</option>
HERE;
                            }
                        ?>
                        <option value="9999">Add</option>
                    </select>
                    <button type="submit">submit</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>
