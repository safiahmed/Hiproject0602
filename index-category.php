<?php
require_once './assets/my-controller.php';
$category = new Users();
$data = array();
$pro_details = $category->index_category_name($data);
?>

<style>
    .category-table-index{cursor: pointer;}
    .category-table-index img{width: 19px;}
    .category-table-index tr td:last-child{text-align: right;}
    .category-table-index tr td:first-child{width: 80%;}
</style>
<script>
    $(document).ready(function() {
//        $(".category-table-index tr").click(function() {
//            var t = $(this).children().find("a:first-child").attr("class");
//            location.href = "category-view.php?id="+t;
//        });
    });
</script>
<div class="middle_boxnew">
    <div class="content2">
        <p>Projects Kits By Category </p>
        <table class="table table-hover category-table-index">
            <tbody>
                <?php
                foreach ($pro_details as $prod) {
                    ?>
                    <tr>
                        <td><a href="javascript:void(0);" class="<?php echo $prod['cat_id_pk']; ?>"><?php echo $prod['cat_name']; ?></a></td>
                        <td><a href="javascript:void(0);" class="<?php echo $prod['cat_id_pk']; ?>"><img src="images/arrow_2.png" /></a></td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</div>