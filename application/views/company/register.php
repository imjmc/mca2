<header class="masthead bg-primary text-white text-center">
</header>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"> Company Registration</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $error_msg = $this->session->flashdata('error_msg');
                    if ($error_msg) {
                        echo $error_msg;
                    }
                    ?>
                    <form role="form" method="post" action="<?php echo base_url('company/register_company'); ?>">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="company_name" type="text" required="true" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="company_email" type="email" required="true" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="company_password" type="password" required="true">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Address" name="company_address" type="text" required="true">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Phone No" name="company_phone" type="tel" required="true">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Fax" name="company_fax" type="tel">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Url" name="company_url" type="url" required="true">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >
                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br><a href="<?php echo base_url('company'); ?>">Login here</a></center>
                </div>
            </div>
        </div>
    </div>
</div>