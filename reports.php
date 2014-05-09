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
            <!--- end navbar -->
            <div class="hero-unit-header">
                <?php include('user_name.php'); ?>
            </div>

            <div class="container">

                <div class="row-fluid">
                   
                    <div class="span12">

                        <div class="hero-unit-table">   


                            <div class="charts_container">
                                <div class="chart_container">
                                    <div class="alert alert-info">List of Products</div>  
                                    <canvas id="chartCanvas1" width="1100" height="400">
                                        Your web-browser does not support the HTML 5 canvas element.
                                    </canvas>

                                </div>
                            </div>


	 
       

            
        </div>




                            <script type="application/javascript">

                                var chart1 = new AwesomeChart('chartCanvas1');


                                chart1.data = [
                                <?php
                                $query = mysql_query("select * from tb_products") or die(mysql_error());
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <?php echo $row['quantity'] . ','; ?>	
                                <?php }; ?>
                                ];

                                chart1.labels = [
                                <?php
                                $query = mysql_query("select * from tb_products") or die(mysql_error());
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <?php echo "'" . $row['name'] . "'" . ','; ?>	
                                <?php }; ?>
                                ];
                                chart1.colors = ['#006CFF', '#FF6600', '#34A038', '#945D59', '#93BBF4', '#F493B8'];
                                chart1.randomColors = true;
                                chart1.animate = true;
                                chart1.animationFrames = 30;
                                chart1.draw();


                                var chart5 = new AwesomeChart('chartCanvas5');
                                chart5.chartType = "pie";
                                chart5.title = "Worldwide browser market share: December 2010";
                                chart5.data = [	<?php
                                $query = mysql_query("select * from tb_products") or die(mysql_error());
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <?php echo $row['quantity'] . ','; ?>	
                                <?php }; ?>];
                                chart5.labels = [	<?php
                                $query = mysql_query("select * from tb_products") or die(mysql_error());
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <?php echo "'" . $row['name'] . "'" . ','; ?>	
                                <?php }; ?>];
                                chart5.colors = chart1.colors;
                                chart5.animate = true;
                                chart5.draw();
                            </script>


                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>

</body>
</html>


