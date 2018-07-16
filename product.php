<?php include_once 'layout/header.php'; ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12​​ item">
	<img src="img/web-ing/axentwear.jpg" class="img-responsive" alt="Image">
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<h2>JBL Clip 2</h2>
		<h4>Price : 55$</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, libero, eaque. Cumque perspiciatis est possimus fugit culpa itaque rerum ipsam doloremque, esse ex reiciendis labore debitis, et quidem obcaecati fugiat!</p>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 jusk" >
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
			
		</div>
		<div class="col-xs-1 col-sm-1 col-md-3 col-lg-3">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 picb">
			<div class="img-box" style="background-image: url('img/68495_lcu7.png');"></div>
			<ul id="list-item">
				<li style="background-image: url('img/68495_lcu7.png')"></li>
				<li style="background-image: url('img/ml4p2_av4_result_3.jpg')"></li>
				<li style="background-image: url('img/beats_pill_plus.png')"></li>
				<li style="background-image: url('img/logo.jpg')"></li>
				<li style="background-image: url('img/img270118-15170203456509.png')"></li>
				
			</ul>
				
			
			
		</div>
		
	</div>
	<div class="clearfix">
	
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="container-fluid pro-info">
	<hr>
		<div class="video-demo">
			<iframe width="854" height="480" src="https://www.youtube.com/embed/s4I5FtdNeic" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen resize ></iframe>
		</div>
	</div>
	</div>
	<hr>

<script type="text/javascript">
	$(document).ready(function(){
		$('ul#list-item li').on({
			click:function(){
				var imgurl=$(this).css('backgroundImage');
				$('.img-box').css('backgroundImage',imgurl);
			}
		});
	});
</script>
<?php include_once 'layout/footer.php' ?>
	</div>