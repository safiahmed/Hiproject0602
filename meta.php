
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
    <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
    <!--Start of Zopim Live Chat Script-->
<!--<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?1tV9ILkIP5IMkwqcJK5f55fpwSy8UXzn';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>-->
<!--End of Zopim Live Chat Script-->