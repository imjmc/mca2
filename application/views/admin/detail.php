<div class="container">
  <div class="row">
    <div class="col-md-4">
      <table class="table table-bordered table-striped">
        <tr>
          <th colspan="2"><h4 class="text-center">Admin Info</h4></th>
        </tr>
        <tr>
          <td>company Name</td>
          <td><?php echo $this->session->userdata('company_name'); ?></td>
        </tr>
        <tr>
          <td>company Email</td>
          <td><?php echo $this->session->userdata('company_email');  ?></td>
        </tr>
        <tr>
          <td>company address</td>
          <td><?php echo $this->session->userdata('company_address');  ?></td>
        </tr>
        <tr>
          <td>company phone</td>
          <td><?php echo $this->session->userdata('company_phone');  ?></td>
        </tr>
      </table>
    </div>
  </div>
  <a href="<?php echo base_url('company/company_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
  