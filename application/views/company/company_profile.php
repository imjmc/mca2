        <header class="masthead bg-primary text-white text-center">
        </header>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th colspan="2"><h4 class="text-center">company Info</h4></th>
                        </tr>
                        <?php foreach ($company_details as $company_detail) { ?>
                            <tr>
                                <td>company Name</td>
                                <td><?php echo $company_detail->company_name; ?></td>
                            </tr>
                            <tr>
                                <td>company Email</td>
                                <td><?php echo $company_detail->company_email; ?></td>
                            </tr>
                            <tr>
                                <td>company address</td>
                                <td><?php echo $company_detail->company_address; ?></td>
                            </tr>
                            <tr>
                                <td>company phone</td>
                                <td><?php echo $company_detail->company_phone; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <a href="<?php echo base_url('company/company_logout'); ?>" >  <button type="button" class="btn-primary">Logout</button></a>
        </div>