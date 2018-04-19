<header class="masthead bg-primary text-white text-center">
</header>

<div class="container">
    <a class="btn btn-lg btn-success pull-right" href="<?php echo base_url('policy');?>">Add Policy</a>
    <div class="row">
        <div class="col-md-4">
            <table class="table table-bordered table-striped">
                <tr>
                    <th colspan="2"><h4 class="text-center">Policy List</h4></th>
                </tr>
                <?php foreach ($policies as $policy) { ?>
                    <tr>
                        <td>Policy</td>
                        <td><?php echo $policy->name; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <a href="<?php echo base_url('company/company_logout'); ?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
