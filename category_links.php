<?php
require_once './assets/my-controller.php';
$product = new Users();
$data = array();
$cat_details = $product->index_subcategory_subname($cat_id_index);
$category_details = $product->index_category_name($data);
?>
<style>
    #amount1{width: 35px;float: left;}
    #amount2{width: 35px;margin-left: 3%;}
    #slider-range{width: 91%;float: left;margin-right: 12px;}
    #go{width: 1%;float: left;}
    #go img{cursor: pointer;}
</style>
<script>
    $(document).ready(function() {
        $("#go").on('click', function() {
            var val1 = $("#amount1").val();
            var val2 = $("#amount2").val();
            window.location.href = "category-view.php?price=" + val1 + "," + val2
        });

    });
</script>
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
                            <input type="text" id="amount1" style="border:0; color:#f6931f; font-weight:bold;" disabled="disabled" />
                            <input type="text" id="amount2" style="border:0; color:#f6931f; font-weight:bold;" disabled="disabled" />
                        </p>
                        <div>
                            <div id="slider-range"></div>
                            <div id="go">
                                <img src="images/pricerange.jpg" class="go" />
                            </div>
                        </div>
                    </div>
                </dd>
                <dt class="odd">Category</dt>
                <dd class="odd">
                    <ol>
                        <?php foreach ($category_details as $prod) { ?>
                            <li>
                                <a href="category-view.php?id=<?php echo $prod['cat_id_pk']; ?>" target="_parent"><?php echo $prod['cat_name']; ?></a>
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
        </div>
    </div>
</div>