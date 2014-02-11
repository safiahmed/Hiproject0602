
<?php
include 'assets/my-controller.php';
$city = $_POST['city'];
$service = new Service();
$address = $service->service_city($city);
$size = sizeof($address);
?>
<div id="address">
    <?php
    if($size > 0){
        foreach ($address as $ad){
    ?>
			 <address>
                             <?php echo $ad['ndcity_address'];  ?>
<!--  <strong>Twitter, Inc.</strong><br>
  795 Folsom Ave, Suite 600<br>
  San Francisco, CA 94107<br>-->
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>
 
<address>
  <strong>Full Name</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address>
<div class="bottomcontent">												
					<content>	
					<iframe width="390" height="252"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Mangium+Infotech+Pvt+Ltd,+Bangalore,+Karnataka&amp;aq=0&amp;oq=Mangiu&amp;sll=13.033157,77.634277&amp;sspn=0.935192,1.674042&amp;ie=UTF8&amp;hq=Mangium+Infotech+Pvt+Ltd,&amp;hnear=Bangalore,+Bangalore+Urban,+Karnataka&amp;ll=13.019017,77.59225&amp;spn=0.10432,0.006295&amp;t=m&amp;output=embed"></iframe>
</content>				
				</div>
        <?php } } ?>
</div>
