            <!-- sidebar navigation -->
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0; padding-top: 5px; padding-left: 3px;">
                        <a href="home.php" class="site_title"><img src="images/lmsbslogo.png" style="height:65px; width:205px;"></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
					<a href="admin_profile.php">
                    <div class="profile">
<?php
	include('include/dbcon.php');
	$user_query=mysqli_query($con,"select *  from user where user_id='$id_session'")or die(mysqli_error());
	$row=mysqli_fetch_array($user_query); {
?>
<div style="width: 255px; padding-left:40px">
                        
                        <div class="profile_info" style="text-align: center;">
                            <span>Welcome,</span>
                            <h2><?php echo $row['firstname']." ".$row['lastname']; ?></h2>
                        </div>
<?php } ?>
                    </div>
					</a>
</div>
                    <!-- /menu prile quick info -->

                     
<br>
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
							<h3 style="margin-top:100px; padding-left: 15px;">Library Information</h3>
							<div class="separator"></div>
                            <ul class="nav side-menu">
                                <li>
									<a href="home.php"><i class="fa fa-home"></i> Home</a>
                                </li>
                                <li>
									<a href="book.php"><i class="fa fa-book"></i> Books</a>
                                </li>               
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3 style="padding-left: 15px;">Transaction Information</h3>
							<div class="separator"></div>
                            <ul class="nav side-menu">
                                <li>
									<a href="borrowed.php"><i class="fa fa-book"></i> Borrowed Books</a>
                                </li>
                                <li>
									<a href="returned_book.php"><i class="fa fa-book"></i> Returned Books</a>
                                </li>
                                <li>
									<a href="settings.php"><i class= "fa fa-cog"></i> Settings</a>
                                </li>
                               <!--- <li>
									<a href="activity_log.php"><i class="fa fa-history"></i> Activity Log</a>
                                </li>-->
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div> -->
                </div>
            </div>
            <!-- end of sidebar navigation -->