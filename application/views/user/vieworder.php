<div class="container">
  	<div class="row">
    	<div class="col-md-4">
<br /><br />
<h2>View Orders</h2>
<table border="1">
	<tr><th>Order ID</th><th>Policy</th><th>Order By</th><th>Date of order</th></tr>

<?php
foreach($order_details as $orders)
{
	?>
	<tr>
		<td><?PHP echo $orders->id;?></td><td><?PHP echo $orders->name;?></td>
		<td><?PHP echo $orders->email;?></td><td><?PHP echo $orders->date;?></td>
	</tr>
<?php
}
?>
</table>
    	</div>
	</div>
</div>
