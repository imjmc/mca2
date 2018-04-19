
<div class="lside">
	&nbsp;
</div>
<div class="mside">
<h2 class="res_head">Here are your suitable policies!</h2>

<?php
if(isset($search)){

	foreach($search->result( ) as $row){
		?>
		<div class="res_list">

			<div class="res_name">
			<?php
			echo $row->name;
			?>
			</div>

			<div class="res_inv">
			<?php
			echo round($row->inv_per_year/12, 2) . ' per month';
			?>


			</div>

		</div>
		<?php
		}
}
?>
</div>