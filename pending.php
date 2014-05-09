<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">


            <!-- navbar -->
            <div class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">

                        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- Be sure to leave the brand out there if you want it shown -->
                        <a class="brand" href="#">Grande' Uva Vino</a>

                        <!-- Everything you want hidden at 940px or less, place within here -->



                        <div class="nav-collapse collapse">
                            <!-- .nav, .navbar-search, .navbar-form, etc -->

                            <ul class="nav">
                                <li><a href="home.php"><i class="icon-home"></i>&nbsp;Home</a></li>
                                <li><a href="product.php"><i class="icon-th"></i>&nbsp;Products</a></li>
                                <li><a href="member.php"><i class="icon-group"></i>&nbsp;Members</a></li>
                                <li class="active"><a href="orders.php"><i class="icon-truck"></i>&nbsp;Orders</a></li>
                                <li><a href="reports.php"><i class="icon-file"></i>&nbsp;Reports</a></li>
                                <li><a href="user.php"><i class="icon-user"></i>&nbsp;User</a></li>
                                <li><a  href="#myModal" role="button"  data-toggle="modal"><i class="icon-signout"></i>&nbsp;Logout</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!--- end navbar -->
            <div class="hero-unit-header">
           <?php include('user_name.php'); ?>
            </div>

            <div class="container">

                <div class="row-fluid">
                  
                    <div class="span12">

                        <div class="hero-unit-table"> 
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-condensed" id="example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Order Table</strong>
                                </div>
								    <ul class="breadcrumb"> 
	<li class="active">Orders<span class="divider">/</span></li>				
    <li><a href="#">Pending Orders</a> <span class="divider">/</span></li>
    <li><a href="#">Delivered</a> <span class="divider">/</span></li>
   
    </ul>
                                <thead>
                                    <tr>
                                        <th>Transction Code</th>
                                        <th>Product Name</th>
                                        <th>Customer Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Amount</th>
										<th>Status</th>
										<th>Mode of Payment</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    $cart_table = mysql_query("select  * from order_details status='Pending'") or die(mysql_error());
                                    $cart_count = mysql_num_rows($cart_table);
                                    while ($cart_row = mysql_fetch_array($cart_table)) {
                                        $order_id = $cart_row['orderid'];
                                        $product_id = $cart_row['productID'];
                                        $member_id = $cart_row['memberID'];
                                        $product_query = mysql_query("select * from tb_products where productID='$product_id'") or die(mysql_error());
                                        $product_row = mysql_fetch_array($product_query);
										$member_query = mysql_query("select * from tb_member where memberID = '$member_id'")or die(mysql_error());
										$member_row=mysql_fetch_array($member_query);
                                        ?>

                                        <tr>
                                            <td><?php echo $cart_row['transaction_code']; ?></td>
                                            <td><?php echo $product_row['name']; ?></td>
                                            <td><?php echo $member_row['Firstname']." ".$member_row['Lastname']; ?></td>
                                            <td><?php echo $cart_row['price']; ?></td>
                                            <td><?php echo $cart_row['qty']; ?></td>
                                            <td><?php echo $cart_row['total']; ?></td>
                                            <td><?php echo $cart_row['status']; ?></td>
										    <td><?php echo $cart_row['modeofpayment']; ?></td>
										    <td width="140"><a href="" class="btn btn-info"><i class="icon-pencil icon-large"></i>&nbsp;Update Status</a></td>
											
                                        </tr>
                                            
                                            
                                           
                                            <!-- product delete modal -->
                                  
                                    <!-- end delete modal -->

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>



    <?php include('footer.php'); ?>

</body>
</html>


