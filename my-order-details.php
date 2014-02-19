<?php include_once './assets/auth.php'; ?>
<style>
    .order-details{ width: 100%;}
    .lastUnit{overflow:hidden;_overflow:visible;_zoom:1; }
    .lastUnit{float:none;_position:relative;_left:-3px;_margin-right:-3px;width:auto}
    .padding5{padding:5px}
    .summary-section {border: solid 1px #ccc;-moz-box-shadow: 0 -2px 5px -1px #CCC;-webkit-box-shadow: 0 -2px 5px -1px #CCC;box-shadow: 0 -2px 5px -1px #CCC;}
    .line, .lastUnit {overflow: hidden;_overflow: visible;_zoom: 1;}
    .summary-section .unit, .summary-section .lastUnit {padding: 10px 0;}
    .size3of5 {width: 35%;}
    .unit {float: left;_zoom: 1;}
    .summary-section .unit .summary-inner {border-right: dotted 1px #ccc;min-height: 180px;height: auto!important;}
    .summary-section .summary-inner {padding: 0 13px;}
    .summary-section .summary-inner h2 {padding-bottom: 8px;margin-bottom: 3px;font-size: 16px;font-weight: normal;border-bottom: solid 1px #808080;}
    .summary-section ul {border-top: solid 1px #808080;display: block;list-style-type: disc;
                         -webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;-webkit-padding-start: 40px;
                         margin: 0 0 9px;    }
    ul li{border: 0;font-size: 100%;font: inherit;vertical-align: baseline; list-style: none;}
    .summary-section ul li {padding: 10px 0;border-bottom: solid 1px #e4e4e4;}
    .summary-section ul li.last {border-bottom: 0; border-right: none!important;}
    .summary-section ul li {padding: 3px 0;}
    .summary-section .unit,.summary-section .lastUnit {padding: 10px 0;}
    .lastUnit {float: none;_position: relative;_left: -3px;_margin-right: -3px;width: auto;}
    .line, .lastUnit {overflow: hidden;_overflow: visible;_zoom: 1;}
    .order-info label {color: #808080;font-size: 11px;}
    .fk-font-verybig {font-size: 22px;}
    .tpadding10 {padding-top: 10px;}
    .order-status .successmsg, .order-details-MP .order-status .failuremsg {background-image: url('images/delivered.png');
                                                                            background-position: 0 0;width: 18px;height: 18px;position: relative;top: 4px;}
    .fk-inline-block {display: inline-block;zoom: 1;}
    span{margin: 0;padding: 0;border: 0;font-size: 100%;font: inherit;vertical-align: baseline;}
    .order-row tbody .order-details-row:hover{list-style: none;}
    .order-row tbody tr{cursor: pointer;}
    .hi{display: none;}

</style>
<?php
include './assets/my-controller.php';
$dash = new Users();
$order = $dash->view_my_orders();
$o_size = sizeof($order);
//print_r($order);
?>
<?php if (!empty($o_size)) { ?>
    <table class="table table-striped table-bordered table-hover order-row" id="tab1">
        <thead>
            <tr>
                <th>Order no</th>
                <th style="width: 75px;">Date</th>
                <th>Product Name</th>
                <th colspan="2">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($order as $data) { ?>
                <tr  class="view1">
                    <td><?php echo $data['order_no']; ?>
                        <input type="hidden" id="<?php echo $data['ord_details_id_pk']; ?>"  value="<?php echo $data['ord_details_id_pk']; ?>"/></td>
                    <td><?php echo $data['order_date']; ?></td>
                    <td><?php echo $data['prod_name']; ?></td>
                    <td><img src="" class="img_track" alt="track" /></td>
                    <td>
                        <a href="javascript:void(0);"  onclick = "document.getElementById('light').style.display = 'block';
                                document.getElementById('fade').style.display = 'block'" >
                            <img src="" alt="add"/>
                        </a>
                    </td>
        <!--                    <td><color style="color:green;"><?php
//                if ($data['order_status'] == 1) {
//                    echo 'Delivered';
//                } else {
//                    echo 'Pending';
//                }
                    ?></color></td>-->
                </tr>
                <tr class="hi"><td colspan="5" style="background-color: white;">
                        <div class="my_order_details" id="12<?php echo $data['order_no']; ?>"></div>
                    </td></tr>
            <?php }
            ?>
        </tbody>
    </table>
    <?php
} else {
    echo "Orders Empty";
}
?>
<hr>

<div id="order-row"></div>
<!--add review css starts-->
<style>
/*    .black_overlay{	display: none; margin: 0 auto;	position: fixed;top: 0%;left: 0%;width: 100%;height: 100%;background-color: black;
                    z-index:1001;-moz-opacity: 0.8;opacity:.80;filter: alpha(opacity=80); overflow: auto;}*/
    .modalDialog1 {display: none;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0,0,0,0.8);
        z-index: 99999;
        opacity:0;

        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
        pointer-events: none;
        overflow:auto;
    }
    .modalDialog1:target {
        opacity:1;
        pointer-events: auto;
    }

    .modalDialog1 > div {
        width: 923px;
        position: relative;
        margin: 2% auto;
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background: #fff;
        background: -moz-linear-gradient(#fff, #999);
        background: -webkit-linear-gradient(#fff, #999);
        background: -o-linear-gradient(#fff, #999);

    }
    .white_content {display: none;position: absolute;top: 25%;left: 25%;width: 50%;height: 50%;padding: 16px;
                    border: 16px solid rgb(232, 229, 224);background-color: white;z-index:1002;overflow: auto;}
    </style>

    <div id="light" class="white_content">This is the lightbox content.
    <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display = 'none';
                        document.getElementById('fade').style.display = 'none'">Close</a></div>
<div id="fade" class="modalDialog1"></div>
