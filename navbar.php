<nav class="menu sticky navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">TRANG CHỦ</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse col-sm-10">
			<ul class="nav navbar-nav">
				<?php 
				include('connect.php');
				$sl="select * from menu_ngang";
				$exec= mysqli_query($connect, $sl);
				while($row=mysqli_fetch_array($exec)){
				?>
				<li><a href="?menu=<?php echo $row['loaimenu']; ?>"><?php 
				echo $row['title']; ?></a></li>
				<?php } ?>
			</ul>
		</div><!-- /.navbar-collapse -->
		<div class="col-md-5 right">
			<div class="search row">
				<form class="search row" action="?menu=search" action="post">
					<input type="hidden" name="menu" value="search">
					<input class="form-control" type="search" name="search" placeholder="Nhập tên sản phẩm..">
					<button type="submit" class="form-control formcontrol" name="submit"><span class="fa fa-search"></span></button>
				</form>
				<div class="cart ">
				<a class="btn btn-warning" href="?menu=gio_hang"><span class="fa fa-shopping-cart"></span> (<?php if(isset($_SESSION['giohang'])){
						$cart= count($_SESSION['giohang']);
						echo $cart;
					} 
				else { $cart=0;
					echo $cart;} ?>)</a>
			</div>
			</div>
			
		</div>
	</div>
</nav>