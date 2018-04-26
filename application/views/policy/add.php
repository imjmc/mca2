<header class="masthead bg-primary text-white text-center">
</header>
<div class="container">
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
                    if(isset($get_policy)){
                         foreach($get_policy as $policy){
                            $name = $policy->name;
                            $type_id = $policy->policy_type_id;
                            $investment = $policy->inv_per_year;
                            $term = $policy->term;
                            $expected_return = $policy->expected_return;
                            $min_age = $policy->min_age;
                            $max_age = $policy->max_age;
                         }
                    }

                ?>




                <form role="form" method="post" action="<?php echo base_url('policy/add'); ?>">
                    <fieldset>
                        <div class="form-group">
                           <label for ="name">Name of Policy</label> <input class="form-control" placeholder="Name" name="name" type="text" required="true" value="<?php echo $name; ?>" autofocus>
                        </div>
                        <div class="form-group"> 
                            <label for ="type_id">Type: </label>

                            <select name="type_id" placeholder="Type ID" >
                                <?php

                                foreach($type_list as $row){
                           
                                ?>
                                <option <?php if($type_id==$row->id){ echo ' Selected="Selected" ';} ?> value="<?PHP echo $row->id;?>"><?PHP echo $row->name;?></option>
                                <?php
                            }
                            ?>
                            </select>
                            
                        </div>
                        <div class="form-group">
                           <label for ="inv_per_year">Inv per year</label>  <input class="form-control" placeholder="Inv per year" name="inv_per_year" type="number" required="true" value="<?php echo $investment; ?>">
                        </div>
                       <div class="form-group">
                            <label for ="term">Term (in year)</label> <input class="form-control" placeholder="Term (in year)" name="term" required="true" value="<?php echo $term; ?>">
                        </div>
                        <div class="form-group">
                           <label for ="expected_return">Expected Return</label>  <input class="form-control" placeholder="Expected Return" name="expected_return" required="true" value="<?php echo $expected_return; ?>">
                        </div>
                        <div class="form-group">
                           <label for ="min_age">Minimum age</label>  <input class="form-control" placeholder="Min. age" name="min_age" required="true" value="<?php echo $min_age; ?>">
                        </div>
                        <div class="form-group">
                           <label for ="max_age">Maximum Age</label>  <input class="form-control" placeholder="Max. Age" name="max_age" required="true" value="<?php echo $max_age; ?>">
                        </div>
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Save" name="register" >
                    </fieldset>
                </form>

               
            </div>
        </div>
    </div>
</div>