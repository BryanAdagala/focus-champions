<div class="title">
<h1><i class="fa fa-thumbs-o-up"></i> Commitments</h1>
</div>


<div class="row">
<div class="col-md-2">
<?php $this->load->view("admin/sidebar"); ?>

</div>

<div class="col-md-10">
<table class="table">
<tr>
	<th width="2%">#</th>
	<th width="25%">Name</th>
	<th width="15%">Amount</th>
	<th width="15%">Type </th>
	<th>Period</th>
</tr>
<?php
$count = 0;
foreach($cm->result() as $row){
	$count++;
	echo "<tr>";
	echo "<td>$count </td>";
	echo "<td>$row->first_name $row->last_name </td>";
	echo "<td>$row->amount </td>";
	echo "<td>$row->name </td>";
	if($row->lifetime == 0){
		echo "<td>$row->date_from - $row->date_to </td>";
	}else{
		echo "<td>Lifetime</td>";
	}
	echo "</tr>";
}
?>

</table>

</div>

</div>
