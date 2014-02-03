
<?php
$page = $_SERVER['REQUEST_URI'];
$pagetitle = 'default';

if (strpos($page, 'index'))
    $pagetitle = "Magnum Hiproject Home Page";
if (strpos($page, 'category-view'))
    $pagetitle = "Magnum Hiprojects | Product details.";
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> 
        <?php
        if (!($pagetitle == 'default')) {
            echo $pagetitle;
        } else {
            echo "Magnum Hiprojects";
        }
        ?> </title>