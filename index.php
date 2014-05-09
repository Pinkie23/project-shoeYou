<<<<<<< HEAD
<?php include('admin/connect.php'); 
?>
=======
<?php
//session_start();?>
>>>>>>> 27dd94b34124f646359dad0c2c07cb60c791fe46
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
<<<<<<< HEAD
	<title>Welcome to ShoeYou</title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap-responsive.min.css" />
	
=======
	<title>Welcome to admistration page</title>
	
	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap-responsive.min.css" />
	<link href="./js/google-code-prettify/prettify.css" rel="stylesheet"
>>>>>>> 27dd94b34124f646359dad0c2c07cb60c791fe46
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="./css/style.css" />

</head>
<body>

<<<<<<< HEAD
	<div class="navbar  navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="index.php">ShoeYou</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
								<li><a href="index.php">HOME</a></li>
								<li><a href="ecommerce-item.php">PRODUCTS</a></li>
								<li><a href="ecommerce-cart.php">SHOPPING CART</a></li>
								<li><a href="ecommerce-checkout.php">CHECKOUT</a></li>
								<li><a href="contact.php">CONTACT US</a></li>
								<li><a href="about.php">ABOUT US</a></li>
					</ul>
					<form action="#" class="navbar-search pull-left">
                     <input id="srchFld" type="text" placeholder="I'm looking for ..." class="search-query span3"/>
                    </form>
                    
                     <ul class="nav pull-right">
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">Login <b class="caret"></b></a>
							<div class="dropdown-menu">
							<form class="form-horizontal loginFrm">
							  <div class="control-group">								
								<input type="text" class="span2" id="inputEmail" placeholder="Email">
							  </div>
							  <div class="control-group">
								<input type="password" class="span2" id="inputPassword" placeholder="Password">
							  </div>
							  <div class="control-group">
								<button type="submit" class="btn pull-right">Sign in</button>
							  </div>
							</form>					
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
<br>
	<div class="container">
		<div class="row">
			<div class="span3">

				<div class="well">
					<ul class="nav nav-list">
						<li class="nav-header">CATEGORIES</li>
						<li class="active">
							<a href="index.html">BOOTS</a>
						</li>
						<li>
							<a href="ecommerce-item.php">SNEAKERS</a>
						</li>
						<li>
							<a href="ecommerce-item.php">PUMPS</a>
						</li>
						<li>
							<a href="ecommerce-item.php">OPEN TOES</a>
						</li>
						<li>
							<a href="ecommerce-item.php">SANDALS</a>
						</li>
						<li>
							<a href="ecommerce-item.php">SANDALED HEELS</a>
						</li>
					</ul>
				</div>
				<div class="well">
					<form method = "post" action = "login.php" class="form login-form">
						<h2>Sign in</h2>
						<div>
							<label>Username</label>
							<input id="Username" name="Username" type="text" />

							<label>Password</label>
							<input id="Password" name="Password" type="password" />

							<label class="checkbox inline">
								<input type="checkbox" id="RememberMe" value="option1"> Remember me
							</label>

							<br /><br />

							<button type="submit" class="btn btn-success">Login</button>
						</div>
						<br />
						<a href="register.php">register</a>
					</form>
				</div>
			</div>

			<div class="span9">
				<div class="hero-unit">
					<h1 class="">Special Offer</h1>
					<p class="">here is the best offer of the month! Do not loose it!</p>
					<p><a href="ecommerce-item.php" class="btn btn-primary btn-large">See more »</a></p>
				</div>
				
				<ul class="thumbnails">
				<?php
				$query = mysql_query("select * from tb_products") or die(mysql_error());
				while ($row = mysql_fetch_array($query)) {
					$id = $row['productID'];
					?>
					<li class="span3">
						<div class="thumbnail">
							<div class="alert alert-danger"><div class="font1"><?php echo $row['name']; ?></div></div>
							<hr>
							<a  href="#<?php echo $id; ?>"data-toggle="modal"><img src="admin/<?php echo $row['location'] ?>" class="img-rounded" alt="" width="160" height="200"></a>


							<p>
								<a> Price: R<?php echo $row['price']; ?></a>
							</p>
							<a href="#add<?php echo $id; ?>" data-toggle="modal" class="btn btn-success btn-medium"><i class="icon-shopping-cart "></i>&nbsp;View</a>

							<?php include('order_modal.php'); ?>
						<?php } ?>
						<?php
						if (isset($_POST['order'])) {
							$member_id = $_POST['member_id'];
							$quantity = $_POST['quantity'];
							$price = $_POST['price'];
							$product_id = $_POST['product_id'];
							$total = $quantity * $price;
							mysql_query("insert into order_details (memberID,qty,productID,price,total) values('$member_id','$quantity','$product_id','$price','$total')") or die(mysql_query);
							//header('location:ecommerce-item.php');
						}
						?>
					</ul>
=======
	<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#" name="top">ShoeYou</a>
			<div class="nav-collapse collapse">
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container-fluid -->
	</div>
	<!--/.navbar-inner -->
</div>
<!--/.navbar -->
<br></br>
<div class="container">
		<div class="row">
			<div class="span4 offset4 well">
				<legend>Please Sign In</legend>
					<?php  
						// check for a successful form post  
						if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
						// check for a form error  
						elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
					?>
						<form method="POST" action="login_contact_submission.php" accept-charset="UTF-8">
								<input type="text" id="username" class="span4" name="username" placeholder="Username">
								<input type="password" id="password" class="span4" name="password" placeholder="Password">
							<button type="submit" name="submit" class="btn btn-info btn-block">Sign in</button>
						</form>    
>>>>>>> 27dd94b34124f646359dad0c2c07cb60c791fe46
			</div>
		</div>
	</div>
	
<<<<<<< HEAD
	<hr />
	<?php include('footer.php'); ?>
=======
>>>>>>> 27dd94b34124f646359dad0c2c07cb60c791fe46
	<script src="./js/jquery-1.10.0.min.js"></script>
	<script src="./js/bootstrap/js/bootstrap.min.js"></script>
	<script src="./js/holder.js"></script>
	<script src="./js/script.js"></script>
<<<<<<< HEAD
=======
	  <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="./js/jquery.js"></script>
	<script src="./js/google-code-prettify/prettify.js"></script>
    <script src="./js/application.js"></script>
    <script src="./js/bootstrap-transition.js"></script>
    <script src="./js/bootstrap-modal.js"></script>
    <script src="./js/bootstrap-scrollspy.js"></script>
    <script src="./js/bootstrap-alert.js"></script>
    <script src="./js/bootstrap-dropdown.js"></script>
    <script src="./js/bootstrap-tab.js"></script>
    <script src="./js/bootstrap-tooltip.js"></script>
    <script src="./js/bootstrap-popover.js"></script>
    <script src="./js/bootstrap-button.js"></script>
    <script src="./js/bootstrap-collapse.js"></script>
    <script src="./js/bootstrap-carousel.js"></script>
    <script src="./js/bootstrap-typeahead.js"></script>
    <script src="./js/bootstrap-affix.js"></script>
    <script src="./js/jquery.lightbox-0.5.js"></script>
	<script src="./js/bootsshoptgl.js"></script>
	 <script type="text/javascript">
>>>>>>> 27dd94b34124f646359dad0c2c07cb60c791fe46
</body>
</html>