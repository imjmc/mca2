<?php 
foreach ($products as $product){ 
?>
	<a href="<?php echo base_url() ?>/<?php echo $product->id;?>"><?php echo $product->name; ?></a>
<?php
} ?>