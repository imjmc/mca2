<p>&nbsp;</p>

<p style="font-size: 30px;">All Available Policies</p>

<div class="tab">
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="historical">
            <div class="list-header">
                <div class="list-head">
                    <ul>
                        <li>INSURER &amp; PLAN</li>
                        <li>PREMIUM</li>
                        <li>YEAR</li>
                        <li>DETAILS</li>
                        <li>&nbsp;</li>
                    </ul>
                </div>
                <div class="list-offer ng-scope">
                <?php
                    foreach($products as $row){
                ?>
                    <ul>
                        <li>
                            <img ng-src="http://ebeema.com/ebeema/frontend/web/css/images/logo/nlic.png" alt="NLIC" src="http://ebeema.com/ebeema/frontend/web/css/images/logo/nlic.png">
                            <p class="ng-binding"><?PHP echo $row->companies_name; ?> - </p>
                            <p class="ng-binding"><?php echo $row->policies_name; ?></p>

                        </li>
                        <li class="growth">
                            <div class="ttl hidden-md hidden-lg">PREMIUM</div>
                            <h3 class="premium-col ng-binding">
                                <?php
                                    echo "Rs. " . round($row->inv_per_year/12, 2) . ' per month <br />';
                                ?>

                            </h3>
                        </li>
                        <li class="growth">
                            <div class="ttl hidden-md hidden-lg">Premium Paying Years</div>
                            <h3 class="ng-binding"><i class="fa fa-calendar"></i>
                            </h3>
                                <?php
                                echo $row->term . ' years ' ;
                                ?>
                            </h3>
                        </li>
                        
                        <li>
                            <span>Expected Return</span>
                            <h3 class="ng-binding">
                                <?PHP
                                    echo $row->expected_return;
                                ?>
                            </h3>
                        </li>
                        
                        <li>
                            <a href="<?PHP echo base_url();?>form/orderreceived/<?PHP echo $row->id;?>"><span class="btn btn-sm btn-primary">Book Now <i class="fa fa-arrow-right"></i></span></a>
                        </li>
                    </ul>
                <?php
                }

                ?>
                </div>
            </div>
        </div>
    </div>
</div>