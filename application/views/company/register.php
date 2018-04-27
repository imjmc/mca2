<p>&nbsp;</p>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <?php if(isset($get_company)){ ?>
                    <ul class="nav in pull-right" id="side-menu">
                        <li>
                            <a href="<?PHP echo base_url();?>Company/dashboard" class=""><i class="fa fa-briefcase fa-fw"></i> View Policies  </a>&nbsp;
                        </li>|
                        <!--
                        <li>
                            <a href="<?PHP echo base_url();?>" class="active"><i class="fa fa-list fa-fw"></i> Orders</a>
                        </li>
                        -->
                        <li>
                            <a href="<?PHP echo base_url();?>Company/editCompany" class="active"><i class="fa fa-user fa-fw"></i> Edit Profile</a>
                        </li>
                    
                    <?php } ?>
                    </ul>
                    <?php if(isset($get_company)){ ?>
                    <h4 class="">Edit Company Profile</h3>
                    <?php }else{ ?>
                    <h3 class="panel-title">Company Registration</h3>
                <?php } ?>
                </div>
                <div class="panel-body">
                    <?php
                    $error_msg = $this->session->flashdata('error_msg');
                    if ($error_msg) {
                        echo $error_msg;
                    }
                    if(isset($get_company)){
                        foreach($get_company as $company){
                            $id = $company->id;
                            $name = $company->name;
                            $email = $company->email;
                            $address = $company->address;
                            $phone = $company->phone;
                            $fax = $company->fax;
                            $url = $company->url;
                        }
                    }
                    ?>
                    <form role="form" method="post" action="<?php if(isset($get_company)) echo base_url('Company/updateCompany'); else  echo base_url('Company/register_company'); ?>" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <label for="company_name">Company Name</label>
                                <input class="form-control" placeholder="Company Name" name="company_name" type="text" value="<?php if(isset($name)) echo $name; ?>"required="true" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="company_email">Email</label>
                                <input class="form-control" placeholder="Email" name="company_email" type="email" value="<?php if(isset($email)) echo $email; ?>" required="true" autofocus>
                            </div>
                            <?php if(!isset($get_company)){?>
                            <div class="form-group">
                                <label for="company_password">Password</label>
                                <input class="form-control" placeholder="Password" name="company_password" type="password" required="true">
                            </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="company_address">Address</label>
                                <input class="form-control" placeholder="Full Address" name="company_address" type="text" value="<?php if(isset($address)) echo $address; ?>" required="true">
                            </div>
                            <div class="form-group">
                                <label for="company_phone">Phone No.</label>
                                <input class="form-control" placeholder="Phone" name="company_phone" type="tel" value="<?php if(isset($phone)) echo $phone; ?>" required="true">
                            </div>
                            <div class="form-group">
                                <label for="company_fax">Fax</label>
                                <input class="form-control" placeholder="Fax" name="company_fax" value="<?php if(isset($fax)) echo $fax; ?>" type="tel">
                            </div>
                            <div class="form-group">
                                <label for="company_url">Website URL</label>
                                <input class="form-control" placeholder="http://www.companyurl.com" name="company_url" type="url" value="<?php if(isset($url)) echo $url; ?>"required="true">
                            </div>
                            <?php if(!isset($get_company)){?>
                            <div class="form-group">
                                <label for="company_logo">Upload Company Logo</label>
                                <input class="form-control" name="company_logo" type="file" required="true">
                            </div>
                            <?php } ?>
                            <input type="hidden" name="id" required="true" value="<?php if(isset($id)) echo $id ?>">
                            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Save" name="register" >
                        </fieldset>
                    </form>
                    <?php if(!isset($get_company)){?>
                    <center><b>Already registered ?</b> <br><a href="<?php echo base_url('company'); ?>">Login here</a></center>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>