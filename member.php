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
<!--/.navbar -->
            <div class="hero-unit-header">
                <?php include('user_name.php'); ?>
            </div>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-table">   
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed table-striped table-bordered" id="example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Member Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Address</th>
                                  
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from tb_member") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $member_id = $row['memberID'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['Firstname']; ?></td> 
                                            <td><?php echo $row['Lastname']; ?></td> 
                                            <td><?php echo $row['Email']; ?></td> 
                                            <td><?php echo $row['Contact_Number']; ?></td> 
                                            <td><?php echo $row['address']; ?></td> 
                                                                               <td width="100">
                                                <a href="#userdel<?php echo $member_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>

                                            </td>
                                            <!-- user delete modal -->
                                    <div id="userdel<?php echo $member_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete&nbsp;</strong><?php echo $row['Firstname'] . " " . $row['Lastname']; ?>?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="delete_member.php<?php echo '?id=' . $member_id; ?>" ><i class="icon-check"></i>&nbsp;Yes</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>

                                        </div>
                                    </div>
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

</body>
</html>


