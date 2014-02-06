<?php
require_once './assets/my-controller.php';
$product = new Users();
$data = array();

$subproduct=$product->subcategory_name2($cat_id);
$sub_size = sizeof($subproduct);
$category_details = $product->index_category_name($data);
?>
<style>
    .category-table-index{cursor: pointer;}
    .category-table-index img{width: 19px;}
    .category-table-index tr td:last-child{text-align: right;}
    .category-table-index tr td:first-child{width: 100%;}
</style>
<div class="col-left">

    <div class="block-layered-nav">

        <div class="block-content">
            <dl id="narrow-by-list">
                <dt class="odd">Sub Category</dt>
                <dd class="odd">
                    <table class="table table-hover category-table-index">
                        <tbody>
                            <?php
                            if ($sub_size != 1) {
                                foreach ($subproduct as $prod) {
                                    ?>
                                    <tr>
                                        <td><a href="subcategory-view.php?id=<?php echo $prod['subcat_random']; ?>" ><?php echo $prod['subcat_name']; ?></a></td>
                                        <td><a href="subcategory-view.php?id=<?php echo $prod['subcat_random']; ?>" ><img src="images/arrow_2.png" /></a></td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td><?php echo "!--|-No Sub Categories -|--!"; ?></td>
                                </tr>   
                            <?php }
                            ?>
                        </tbody>
                    </table>

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
                    <table class="table table-hover category-table-index">
                        <tbody>
                            <?php
                            foreach ($category_details as $prod) {
                                ?>
                                <tr>
                                    <td><a href="javascript:void(0);" class="<?php echo $prod['cat_id_pk']; ?>"><?php echo $prod['cat_name']; ?></a></td>
                                    <td><a href="javascript:void(0);" class="<?php echo $prod['cat_id_pk']; ?>"><img src="images/arrow_2.png" /></a></td>
                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>

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