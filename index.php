<?php

/**
 * @author MESMERiZE
 * @copyright 2010
 */

require_once "backend.php";
$linkInfo=array();
if(isset($_POST['searched']) && $_POST['url']!=""){
    $linkInfo=getInfo($_POST['url'],$_POST['keywords']);
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
<head>
    <title>Keyword Analysis tool</title>
</head>

<body>
<div id="wrapper"> 
    <div id="searchbar">
    <form action="index.php" method="post">
        <div id="url-bar">Enter the url (Include http://) <input type="text" name="url" /></div>
        <div id="keywrd-bar">Enter keywords you want to check <input type="text" name="keywords" /></div>
        <input type="hidden" name="searched" value="true" />
        <div id="submit"><input type="submit" value="Search" /></div>
    </form>
    </div>
    <?
    if($_POST['searched']==true){ 
     ?>
    <div id="result">
        <div id="menu-list">
        </div>
        <div id="summarized">
        <pre>
        <?
        print_r($linkInfo);
         ?></pre>
        </div>
    </div>
    <? 
    } ?>
</div>
</body>
</html>
