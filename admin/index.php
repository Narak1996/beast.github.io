<?php
  include 'layouts/header.php'





?>
<?php

$u_id=$_SESSION['c_user'];
$stm=$conn->query("SELECT * FROM tb_user where id='$u_id'");
while ($row=mysqli_fetch_object($stm)) {
	$name=$row->full_name;
	$email=$row->email;
	$phone=$row->phone;
	$position=$row->position;
	$dob=$row->dob;
	$pob=$row->pob;
	$addr=$row->address;
}


?>
<style type="text/css">
	.user_logged_info>h3{
		padding: 10px 0px;

	}
	.user_logged_info>h1{
		padding-bottom: 60px;
		text-align: center;
	}
</style>

					<!-- <div class="x_title">
                    	<div class="clearfix"></div>
                  	</div> -->
                  <div class="x_content">
                      <div class="user_logged_info">
                      	<h1>Welcome</h1>
	                    <h3>Name: <?= $name ?></h3>
	                    <h3>email: <?= $email ?></h3>
	                    <h3>Phone: <?= $phone ?></h3>
	                    <h3>Position: <?= $position ?></h3>
	                    <h3>Date of birth: <?= $dob ?></h3>
	                    <h3>Place of birth: <?= $pob ?></h3>
	                    <h3>Current Address: <?= $addr ?></h3>
                      </div>
                  </div>
<?php
  include 'layouts/footer.php';
?>