<?php
require_once './assets/my-controller.php';
$product = new Users();
$data = array();
//$pro_details=array();
//$pro_details = $product->index_subcategory_name($cat_id_index);
//foreach ($pro_details as $prod) {
    //$cat_id = $prod['cat_id_pk'];
    //print_r($cat_id);
//}
$cat_details = $product->index_subcategory_subname($cat_id_index);
//print_r($cat_details);
$category_details = $product->index_category_name($data);
?>

<div class="col-left">

    <div class="block-layered-nav">

        <div class="block-content">
            <dl id="narrow-by-list">
                <dt class="odd">Sub Category</dt>
                <dd class="odd">

                    <ol>

                        <?php
                        foreach ($cat_details as $prod) {
                            ?>

                            <li> <a href='#'><?php echo $prod['subcat_name']; ?></a> </li>
                        <?php } ?>




                    </ol>

                </dd>
                <dt class="odd">Price</dt>
                <dd class="filter-price odd">

                    <div class="imagin">
                        <p>
                            <label for="amount">Range:</label>
                            <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range"></div>
                    </div>

                </dd>

                <dt class="odd">Category</dt>
                <dd class="odd">
                    <ol>


                        <?php foreach ($category_details as $prod) { ?>
                            <li>
                                <a href="category-view.php?id=<?php echo $prod['cat_random']; ?>" target="_parent"><?php echo $prod['cat_name']; ?></a>
                            </li> 

                        <?php } ?>		
                    </ol>


                </dd>





                <dt class="last even">Kit Type</dt>
                <dd class="last even">

                    <ol>
                        <li>
                            <a href="#">Do It Yourself Kit</a>
                            (128)
                        </li>
                        <li>
                            <a href="#">Project Kit</a>
                            (128)
                        </li>
                        <li>
                            <a href="#">Readymade Kit</a>
                            (128)
                        </li>
                    </ol>

                </dd>












            </dl>

            <?php
//$clientsquery = "select min(prod_org_price) from tbl_product order by prod_id_pk ";
//$clientrs = mysql_query($clientsquery);
//while($row3 = mysql_fetch_assoc($clientrs))   
//{
//$price=(min($row3));
//}
//
            ?>
            <?php
            //$clientsquery = "select max(prod_org_price) from tbl_product order by prod_id_pk ";
            //$clientrs = mysql_query($clientsquery);
            //  while($row3 = mysql_fetch_assoc($clientrs))   
            //{
            //$price1=(min($row3));
            //
			//}
            ?>
        </div>
    </div>

</div>