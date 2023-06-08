<?php
/*
if($title = filter_input(INPUT_GET,"one")){
    echo $title;
}
*/
if($_GET['page']){
    $title = $_GET['page'];
    echo $_GET['page'];
}

//echo $_GET['web'];

$con = new PDO('mysql:host=localhost; dbname=abc', 'root', '');
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt_pageContent = $con->prepare('SELECT title, content FROM cmsblock where title = ?');
$stmt_pageContent->execute(array($title));

$result = $stmt_pageContent->fetchAll();
$content = $result[0]["content"];
echo $content;


//var_dump($result);
?>