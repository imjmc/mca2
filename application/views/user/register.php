      <header class="masthead bg-primary text-white text-center">
      </header>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
              <div class="panel-heading">
                  <h3 class="panel-title">Registration</h3>
              </div>
              <div class="panel-body">

                <?php
                $error_msg=$this->session->flashdata('error_msg');
                if($error_msg){
                  echo $error_msg;
                }
                ?>

                <form role="form" method="post" action="<?php echo base_url('admin/register'); ?>">
                  <fieldset>
                    <div class="form-group">
                      <input class="form-control" placeholder="E-mail" name="email" type="email" required="true" autofocus>
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Password" name="password" type="password" required="true" value="">
                    </div>
                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register">
                  </fieldset>
                </form>
                <center><b>Already registered ?</b> <br><a href="<?php echo base_url('admin'); ?>">Login here</a></center>
              </div>
            </div>
          </div>
        </div>
      </div>