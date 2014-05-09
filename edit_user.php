<?php
include('header.php');
$get_id = $_GET['id'];
?>
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
                                <li><a href="product.php"><i class="icon-th"></i>&nbsp;Products</a></li>
                                <li><a href="member.php"><i class="icon-group"></i>&nbsp;Members</a></li>
                                <li><a href="orders.php"><i class="icon-truck"></i>&nbsp;Orders</a></li>
                                <li><a href="reports.php"><i class="icon-file"></i>&nbsp;Reports</a></li>
                                <li class="active"><a href="user.php"><i class="icon-user"></i>&nbsp;User</a></li>
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

                            <a href="add_user.php" class="btn btn-info"><i class="icon-plus-sign-alt"></i>&nbsp;Add User</a>
                            <br>     <br>
                            <a href="user.php" class="btn btn-success"><i class="icon-arrow-left"></i>&nbsp;Back</a>

                            <!-- right nav -->
                        </div>
                    </div>
                    <div class="span10">

                        <div class="hero-unit-table">   
                            <div class="alert alert-info">Add User</div>

                            <form class="form-horizontal" method="post">
                                <?php
                                $query = mysql_query("select * from tb_user where user_id='$get_id'") or die(mysql_error());
                                $row = mysql_fetch_array($query);
                                ?>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">FirstName</label>
                                    <div class="controls">
                                        <input type="text" name="fn" id="inputEmail" value="<?php echo $row['firstname']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">LastName</label>
                                    <div class="controls">
                                        <input type="text"  name="ln"   value="<?php echo $row['lastname']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Username</label>
                                    <div class="controls">
                                        <input type="text" name="un"   value="<?php echo $row['username']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="text" name="p"   value="<?php echo $row['password']; ?>">
                                    </div>
                                </div>



                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save"></i>&nbsp;Update</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['update'])) {

                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                                $un = $_POST['un'];
                                $p = $_POST['p'];

                                mysql_query("update tb_user set firstname='$fn', lastname='$ln' , username='$un' , password='$p'") or die(mysql_error());

                                header('location:user.php');
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


