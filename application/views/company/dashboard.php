<p>&nbsp;</p>

<div class="container-fluid ng-scope" ng-controller="WholeLifeController">
    <div class="row">
        
        
        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 content-list offset-md-1" style="min-height: 400px;">
            <ul class="nav in pull-right" id="side-menu">
                <li>
                    <a href="<?PHP echo base_url();?>Company/dashboard" class="active"><i class="fa fa-briefcase fa-fw"></i> View Policies  </a>&nbsp;
                </li>|
                <!--
                <li>
                    <a href="<?PHP echo base_url();?>" class="active"><i class="fa fa-list fa-fw"></i> Orders</a>
                </li>
                -->
                <li>
                    <a href="<?PHP echo base_url();?>Company/editCompany"><i class="fa fa-user fa-fw"></i> Edit Profile</a>
                </li>
            
        
            </ul>

                   
            <h4>Policy List</h4>
            
            <div id="error_msg">
            <?php $error_msg = $this->session->flashdata('error_msg');
                if ($error_msg) {
                    echo $error_msg;
                }
                ?>
            </div>
            <div id="success_msg">
            <?php
                $success_msg = $this->session->flashdata('success_msg');
                if ($success_msg) {
                    echo $success_msg;
                }
            ?>
            </div>
            <div class="tab">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="historical">
                        <div class="list-header">
                            <div class="list-head">
                                <ul>
                                    <li><h6>Policy Name</h6></li>
                                    <li><h6>Investment Per Year</h6></li>
                                    <li><h6>Term</h6></li>
                                    <li><h6>Expected Return</h6></li>
                                    <li><h6>Minimum Age</h6></li>
                                    <li><h6>Maximum Age</h6></li>
                                    <li><h6>Action</h6></li>
                                </ul>
                            </div>
                            <div class="list-offer ng-scope">
                                <?php foreach ($policies as $policy) { ?>
                                <ul>
                                    <li class="feature">
                                        <span class="premium-col ng-binding">
                                            <?php echo $policy->name; ?>
                                        </span>
                                    </li>
                                    <li class="growth">
                                        <span class="premium-col ng-binding">
                                            <?php echo $policy->inv_per_year; ?>
                                        </span>
                                    </li>
                                    <li class="growth">
                                        <span class="premium-col ng-binding">
                                            <?php echo $policy->term; ?>
                                        </span>
                                    </li>
                                    <li class="growth">
                                        <span class="premium-col ng-binding">
                                            <?php echo $policy->expected_return; ?>
                                        </span>
                                    </li>
                                    <li class="growth">
                                        <span class="premium-col ng-binding">
                                            <?php echo $policy->min_age; ?>
                                        </span>
                                    </li>
                                    <li class="growth">
                                        <span class="premium-col ng-binding">
                                            <?php echo $policy->max_age; ?>
                                        </span>
                                    </li>
                                    <li class="growth">
                                        <a href="<?php echo base_url();?>Policy/editPolicy/<?php echo $policy->id; ?>">
                                            <img style= "height:25px; width: 25px;" src="<?php echo base_url()?>assets/images/edit.png" title="Edit"/>
                                        </a>
                                    
                                        <a href="<?php echo base_url();?>Policy/deletePolicy/<?php echo $policy->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                            <img style= "height:25px; width: 25px; margin-left:10px;" src="<?php echo base_url()?>assets/images/delete.png" title="Delete"/>
                                        </a>
                                    </li>
                                </ul>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            






        </div>

        </div>
    </div>
</div>