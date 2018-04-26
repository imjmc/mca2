
<br><h2 class="res_head">Here are your suitable policies!</h2>
<div class="mside">
	Form required
</div>

<div class="rside">

<br />
<?php
if(isset($search)){

	foreach($search->result( ) as $row){
		?>
		<div class="res_list">

			<div class="res_name">
				<strong> <?PHP echo $row->cname;?> -  </strong> 
			<?php
			echo $row->name;
			?>
			</div>

			<div class="res_inv" >
			<?php
			echo "Rs. " . round($row->inv_per_year/12, 2) . ' per month <br />for ' . $row->term . ' years ' ;

			
			?>
			</div>
			<span id="res_return">
			<?PHP
			echo "  Expected Return " . $row->expected_return;
			?>
		</span>
<a href="<?PHP echo base_url();?>form/orderreceived/<?PHP echo $row->id;?>"><span class="btn btn-lg btn-success" style="float:right;display:inline;">Book Now</span></a>
		</div>
		<br />
		<?php
		}
}
?>
</div>