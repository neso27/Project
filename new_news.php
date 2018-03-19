<?php
	$category = isset($_GET['cid'])&&is_numeric($_GET['cid'])?$_GET['cid']:0;
	$q = mysqli_query($conn,"select * from knjige where category = $category");
	while($row=mysqli_fetch_object($q)){ 
	?>
	<div id="result">
		<tr><td>
		<p><?php echo $row->naziv?></p>
		<img class="news_pic" width="150px" height="230px"  src="Velike slike/<?php echo $row->slika?>"> 
		<p><?php echo $row->opis?></p>
		<p><?php echo $row->pisac?></p>
		</td></tr>
	  <div class="clear"></div>
	</div> 
<?php
}
?>

