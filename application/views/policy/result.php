
<br><span class="res_head" style="font-size: 28px; margin-left: 150px;">Here are your suitable policies!</span>
<a href="<?PHP echo base_url();?>"><span class="btn btn-sm btn-primary pull-right" style="margin-right: 10px;">Back <i class="fa fa-arrow-left"></i></span></a>
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
                     if($search->num_rows()==0){
                            echo '<h4 align="center">Sorry, no suitable policies found.</h4>';
                     }
                    ?>

                <?php
                if(isset($search)){
                    foreach($search->result( ) as $row){
                ?>
                    <ul>
                        <li>
                            <?php
                            if(isset($row->logo)){ ?>
                            <img src="<?php echo base_url();?>user_data/company_logo/<?php echo $row->logo;?>">
                            <?php
                            }
                            else
                            ?><img src="<?php echo base_url();?>assets/images/new_logo.png">
                            <p class="ng-binding"><?php echo $row->cname; ?> - </p>
                            <p class="ng-binding"><?php echo $row->name; ?></p>

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
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>