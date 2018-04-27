<div class="container">
  	<div class="row">
    	<div class="col-md-10">
<br /><br />
<h2>Orders</h2>
    <div class="tab">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="historical">
                <div class="list-header">
                    <div class="list-head">
                        <ul>
<!--                             <li><h6>Order ID</h6></li>
 -->                            <li><h6>Policy</h6></li>
                            <li><h6>Order By</h6></li>
                            <li><h6>Date of Order</h6></li>
                        </ul>
                    </div>
                    <div class="list-offer ng-scope">

					<?php
					foreach($order_details as $orders)
					{
						?>
						<ul>
                            <!-- <li class="feature" style="text-align: center;">
                                <span class="premium-col ng-binding">
                                    <?PHP echo $orders->id;?>
                                </span>
                            </li> -->
                            <li class="feature" style="text-align: center;">
                                <span class="premium-col ng-binding">
                                    <?PHP echo $orders->name;?>
                                </span>
                            </li>
                            <li class="feature" style="text-align: center;">
                                <span class="premium-col ng-binding">
                                    <?PHP echo $orders->email;?>
                                </span>
                            </li>
                            <li class="feature" style="text-align: center;">
                                <span class="premium-col ng-binding">
                                    <?PHP echo $orders->date;?>
                                </span>
                            </li>
                        </ul>
                        <?php
                    }?>
                </div>
            </div>
        </div>
    </div>
</div>
	</div>
</div>
