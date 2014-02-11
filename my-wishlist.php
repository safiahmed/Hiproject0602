<?php include './assets/auth.php'; ?>
<h3 style="color:#939391;padding-left:5px;padding-bottom:3px;">My Orders</h3>
<div class="inner_account_content123456789">
    <?php
    include './assets/my-controller.php';
    $wishlist = new Users();
    $viewwishlist = $wishlist->view_my_wishlist();
    ?>
    <style>
        td{width: 0px !important;}
    </style>
    <table id="shopping-cart-table" class="data-table cart-table">
        <colgroup><col width="1">
            <col width="1">
            <col>

            <col width="1">
            <col width="1">
            <col width="1">
            <col width="1">

        </colgroup><thead>
            <tr class="newheader1">

                <th  width="" rowspan="2">Item Description</th>
                <th  width="" rowspan="2"><span class="nobr">Product Name</span></th>

                <th colspan="3" width=""><span class="nobr">Packages</span></th>
                <th rowspan="2" class="a-center">Action</th>
            </tr>
   <tr>
                <!--<td>aa</td>-->
                <td rowspan="2">Gold:</td>
                <td rowspan="2">Silver:</td>
                <td rowspan="2">Diamond:</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($viewwishlist as $wishlist) { ?>
                <tr class="odd">
                    <td class="cart-table-img" style="padding: 10px 40px;"><a href="#"class="product-image"><img src="images/sample.png" width="100" height="100" alt="Lorem ipsum dolor sit amet, quisque lacinia nisi in neque. Praesent pharetra libero at nisl. Vivamus non nunc ac elit rhoncus venenatis"></a></td>
                    <td>
                        <h2 class="product-name">
                            <p><?php echo $wishlist['prod_name']; ?></p>
                       
                        </h2>

                    </td>
                    <td class="a-right"><?php echo $wishlist['sp']; ?></td>

    <!--                        <span class="cart-price">

        <span class="price"><span class="WebRupee"> Rs.</span><?php //echo $wishlist['prod_org_price'];   ?></span>            
    </span>-->
                     <td class="a-right"><?php echo $wishlist['gp']; ?></td>    

                     <td class="a-right"><?php echo $wishlist['dp']; ?></td>
                    <td class="a-center">
                        <a href="product-details.php?id=<?php echo $wishlist['prod_random'];?>">view</a>||<a>remove</a>
                    </td>
                               </tr>
            <?php } ?>
        </tbody>
    </table>
<!--    <table>
        <thead>
            <tr>
                <th rowspan="2">name</th>
                <th colspan="3">Packages </th>

            </tr>
            
            <tr>
                <td>aa</td>
                <td rowspan="2">Gold:</td>
                <td rowspan="2">Silver:</td>
                <td rowspan="2">Diamond:</td>
            </tr></thead><tbody>
            <tr><td>aaa</td>
                <td>11</td>
                <td>22</td>
                <td>33</td>
            </tr>
        </tbody>
    </table>-->

</div>

