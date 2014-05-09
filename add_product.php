<?php include('header.php'); ?>
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
						<i class="icon-user"></i> admin	<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="icon-wrench"></i> Settings</a></li>
						<li class="divider"></li>
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
<!--/.navbar -->
            <div class="hero-unit-header">
                <?php include('user_name.php'); ?>
            </div>

            <div class="container">

                <div class="row-fluid">
                    <div class="span2">
                     <a href="product.php" class="btn btn-success"><i class="icon-arrow-left"></i>&nbsp;Back</a>
                    </div>
                    <div class="span10">

                        <div class="hero-unit-table">   


                            <form class="form-horizontal" method="post"  enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Add Product:</strong></div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Name:</label>
                                    <div class="controls">
                                        <input type="text" name="name" id="inputEmail" placeholder="Name">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Description:</label>
                                    <div class="controls">
                                        <input type="text"  name="description"  placeholder="Description" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Category:</label>
                                    <div class="controls">
                                        <select type="text" name="category"  placeholder="Category" >

                                            <option>Boots</option>
                                            <option>Sandals</option>
                                            <option>Heels</option>
                                            <option>Pumps</option>
                                            <option>Takkies</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Price:</label>
                                    <div class="controls">
                                        <input type="text" name="price"  placeholder="Price" >
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Quantity:</label>
                                    <div class="controls">
                                        <input type="text" name="quantity" placeholder="Quantity"  >
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

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Save</button>
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

                                //image
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
//
                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $location = "upload/" . $_FILES["image"]["name"];


                                mysql_query("insert into tb_products (name,description,category,price,quantity,location)
                            	values ('$name','$description','$category','$price','$quantity','$location')
                                ") or die(mysql_error());

                                header('location:product.php');
                            }
                            ?>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>



    <?php include('footer.php'); ?>

</body>
</html>


