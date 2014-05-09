<?php
include('header.php');
$get_id = $_GET['id'];
?>
<?php include('session.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="home.php" name="top">ShoeYou</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
					<li class="divider-vertical"></li>
					<li><a href="product.php"><i class="icon-th icon-white"></i> Products</a></li>
					<li class="divider-vertical"></li>
					<li><a href="member.php"><i class="icon-group icon-white"></i> Members</a></li>
					<li class="divider-vertical"></li>
                  	<li><a href="orders.php"><i class="icon-truck icon-white"></i> Orders</a></li>
					<li class="divider-vertical"></li>
					<li><a href="reports.php"><i class="icon-file icon-white"></i> Reports</a></li>
					<li class="divider-vertical"></li>
					<li><a href="user.php"><i class="icon-user icon-white"></i> User</a></li>
					<li class="divider-vertical"></li>
				</ul>
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i> Admin	<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="icon-share"></i> Logout</a></li>
					</ul>
				</div>
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container-fluid -->
	</div>
	<!--/.navbar-inner -->
</div>
            <!--- end navbar -->
            <div class="hero-unit-header">
                    <?php include('user_name.php'); ?>
            </div>

            <div class="container">

                <div class="row-fluid">
                    <div class="span2">
                        <div class="hero-unit-table">
                            <!-- left nav -->


                            <a href="product.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>

                            <!-- right nav -->
                        </div>
                    </div>
                    <div class="span10">

                        <div class="hero-unit-table">   
                            <?php
                            $query = mysql_query("select * from tb_products where productID='$get_id'") or die(mysql_error());
                            $row = mysql_fetch_array($query);
                            ?>

                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit Product</strong></div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Name</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="inputEmail" value="<?php echo $row['name']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Description</label>
                                    <div class="controls">
                                        <input type="text"  name="description"   value="<?php echo $row['description']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Category</label>
                                    <div class="controls">
                                        <select type="text" name="category" >
                                            <option><?php echo $row['category']; ?></option>
                                            <option>Boots</option>
                                            <option>Sandals</option>
                                            <option>Heels</option>
                                            <option>Pumps</option>
                                            <option>Takkies</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Price</label>
                                    <div class="controls">
                                        <input type="text" name="price"   value="<?php echo $row['price']; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Quantity</label>
                                    <div class="controls">
                                        <input type="text" name="quantity"   value="<?php echo $row['quantity']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="input01">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image"> 
                                    </div>
                                </div>


                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['update'])) {

                                $name = $_POST['name'];
                                $description = $_POST['description'];
                                $category = $_POST['category'];
                                $price = $_POST['price'];
                                $quantity = $_POST['quantity'];

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
//
                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $location = "upload/" . $_FILES["image"]["name"];

                                mysql_query("update tb_products set name='$name',description='$description',category='$category',price='$price',quantity='$quantity',location='$location' where productID='$get_id'") or die(mysql_query());
                                header('location:product.php');
                            }
                            ?>


                        </div>

                    </div>
                </div>

            

            </div>
        </div>
    </div>
</body>
</html>


