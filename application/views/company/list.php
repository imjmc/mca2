        <header class="masthead bg-primary text-white text-center">
        </header>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th colspan="2"><h4 class="text-center">Company List</h4></th>
                        </tr>
                        <?php foreach ($companies as $company) { ?>
                            <tr>
                                <td>Company</td>
                                <td><a href="<?php echo base_url() ?>company/<?php echo $company->company_id;?>"><?php echo $company->company_name; ?></a></td>

                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <a href="<?php echo base_url('company/company_logout'); ?>" >  <button type="button" class="btn-primary">Logout</button></a>
        </div>
        