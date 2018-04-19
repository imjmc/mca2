<header class="masthead bg-primary text-white text-center">
</header>
<div class="row">
    <div class="col-md-8 col-md-offset-4">
        <div class="login-panel panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Add Insurance Policy</h3>
            </div>
            <div class="panel-body">
                <?php
                $error_msg = $this->session->flashdata('error_msg');
                if ($error_msg) {
                    echo $error_msg;
                }
                ?>
                <form role="form" method="post" action="<?php echo base_url('policy/add'); ?>">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" type="text" required="true" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Type ID" name="type_id" type="text" required="true" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Inv per year" name="inv_per_year" type="number" required="true">
                        </div>
                       <div class="form-group">
                            <input class="form-control" placeholder="Term" name="term" type="number" required="true">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Expected Return" name="expected_return" type="number" required="true">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Min. age" name="min_age" type="number" required="true">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Max. Age" name="max_age" type="number" required="true">
                        </div>
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>