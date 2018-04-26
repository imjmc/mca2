<p>&nbsp;</p>
<div class="container">
    <a class="btn btn-lg btn-success pull-right" href="<?php echo base_url('policy');?>">Add Policy</a>
    <div class="row">
        <div class="col-md-4">
            <h4 class="text-center">Policy List</h4>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Policy Name</th>
                    <th>Investment Per Year</th>
                    <th>Term</th>
                    <th>Expected Return</th>
                    <th>Minimum Age</th>
                    <th>Maximum Age</th>
                    <th colspan="2">Action</th>
                    
                </tr>
                <?php foreach ($policies as $policy) { ?>
                    <tr>
                        <td><?php echo $policy->name; ?></td>
                        <td><?php echo $policy->inv_per_year; ?></td>
                        <td><?php echo $policy->term; ?></td>
                        <td><?php echo $policy->expected_return; ?></td>
                        <td><?php echo $policy->min_age; ?></td>
                        <td><?php echo $policy->max_age; ?></td>
                        <td>
                            <a href="<?php echo base_url();?>Policy/editPolicy/<?php echo $policy->id; ?>">
                                <img src="<?php echo base_url()?>assets/images/edit.png" title="Edit"/> Edit <?php echo $policy->id; ?></a>
                        </td>
                        <td>
                            <a href="">
                                <img src="<?php echo base_url()?>assets/images/delete.png" title="Delete"/>Delete <?php echo $policy->id; ?>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <a href="<?php echo base_url('company/company_logout'); ?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
