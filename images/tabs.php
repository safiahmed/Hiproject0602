<style>
.tabs-outer {
background: url(tabs-line.gif) repeat-x left 18px;
width: 703px;
overflow: hidden;
margin: 0 10px 25px 10px;
}
.tabs-payment {
background: url(payment.png) no-repeat center;
height: 36px;
margin: 0 auto;
}
.tabs-confirm{
background: url(payment.png) no-repeat center;
height: 36px;
margin: 0 auto;
}
.tabs-complete {
background: url(payment.png) no-repeat center;
height: 36px;
margin: 0 auto;
}
.tabs-cont {
background: url(tab-bg.gif) no-repeat top center;
font-size: 12px;
font-weight: normal;
color: #666;
float: left;
width: 170px;
}
.tabs-order {
background: url(order.png) no-repeat center;
height: 36px;
margin: 0 auto;
}
div[Attributes Style] {
text-align: -webkit-center;
display: block;
}
</style>

		<div class="tabs-outer">
					<div class="tabs-cont customer-info-tab tab-active" id="step1">
						<div class="tabs-order"></div>
						<div align="center">Order Details</div>
					</div>
						<div class="tabs-cont delivery-modes-tab tab-disabled" id="step2">
							<div class="tabs-payment"></div>
							<div align="center">Shipping Details</div>
						</div>
					<div class="tabs-cont order-summary-tab tab-disabled" id="step3"
						style="">
						<div class="tabs-confirm"></div>
						<div align="center">Order Summary</div>
					</div>
					<div class="tabs-cont payment-tab tab-disabled" id="step4">
						<div class="tabs-complete"></div>
						<div align="center">Payment</div>
					</div>
				</div>
				
				