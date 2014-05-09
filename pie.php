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
                        <a class="brand" href="#">Grande' Uva Vine</a>

                        <!-- Everything you want hidden at 940px or less, place within here -->



                        <div class="nav-collapse collapse">
                            <!-- .nav, .navbar-search, .navbar-form, etc -->

                            <ul class="nav">
                                <li><a href="home.php"><i class="icon-home"></i>&nbsp;Home</a></li>
                                <li  class="active"><a href="product.php"><i class="icon-th"></i>&nbsp;Products</a></li>
                                <li><a href="member.php"><i class="icon-group"></i>&nbsp;Members</a></li>
                                <li><a href="orders.php"><i class="icon-truck"></i>&nbsp;Orders</a></li>
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
                    <div class="span2">
                        <div class="hero-unit-table">
                            <!-- left nav -->

                            <a href="add_product.php" class="btn btn-info"><i class="icon-plus-sign-alt"></i>&nbsp;Add Product</a>
                            <br>          <br>
                            <a href="reports.php" class="btn btn-success"><i class="icon-list"></i>&nbsp;Bar Graph</a>
                            <!-- right nav -->
                        </div>
                    </div>
                    <div class="span10">

                        <div class="hero-unit-table">   


                            <div class="charts_container">
                                <div class="chart_container">
                                    <div class="alert alert-info">Bar Graph of Products by Quantity</div>  
                                    <canvas id="chartCanvas1" width="400" height="400">
                                        Your web-browser does not support the HTML 5 canvas element.
                                    </canvas>

                                </div>
                            </div>


	 
            <div class="chart_container">

                <canvas id="chartCanvas5" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>

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



    <?php include('footer.php'); ?>

</body>
</html>


