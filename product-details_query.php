<?php

require_once './assets/my-controller.php';
$product = new Users();
$data = array();
//$pro_details=array();

$product_details = $product->product_details($prod_random);
$productid=$product_details['prod_id_pk'];
$productname = $product_details['prod_name'];
$image1 = $product_details['prod_image1'];
$image2 = $product_details['prod_image2'];
$image3 = $product_details['prod_image3'];
$image4 = $product_details['prod_image4'];
$modelno = $product_details['model_no'];
$videodesc = $product_details['project_video_desc'];
$cat_id_fk = $product_details['cat_id_fk'];
$videolink = $product_details['prod_videolink'];
$product_block = $product_details['project_blockdiagram'];
$download = $product_details['download_file'];
$prod_id = $product_details['prod_id_pk'];
$productsubdetails_details = $product->product_similar_details($cat_id_fk);
$review_details = $product->review_prod_details($prod_id);
$rows = count($review_details);
//print_r($rows);
$productkit_details = $product->review_productkit_details($prod_id);
foreach ($productkit_details as $prod) {
    $spprice = $prod['sp'];
    $gpprice = $prod['gp'];
    $dpprice = $prod['dp'];
}
$productkittype_details = $product->review_productkittypename_details($prod_id);
//print_r($productkittype_details);
$productkittypesp_details = $product->review_productkittypenamesp_details($prod_id);
$productkittypegp_details = $product->review_productkittypenamegp_details($prod_id);
$productkittypedp_details = $product->review_productkittypenamedp_details($prod_id);

$people_details = $product->peoplebought_details($prod_id);


?>