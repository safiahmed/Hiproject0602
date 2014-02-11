<?php
include 'assets/my-controller.php';
$state = $_POST['state'];
$service = new Service();
$city = $service->service_city($state);
?>
<script type="text/javascript" src='js/jquery1.7.js'></script>
<div id="city">
    City : <select id="city1">
        <option>---Select City---</option>
        <?php
        foreach ($city as $row) {
            ?>
            <option value="<?php echo $row['ndcity_id_pk']; ?>"><?php echo $row['ndcity_name'] ?></option>
            <?php
        }
        ?>
    </select>
</div>

<script>
    $(document).ready(function() {
        $('#city1').change(function() {
            var city = $(this).val();
            $('#address').load('address.php', {city: city});
        });
    });
</script>




