<?php include ('header.php'); ?>
        <div class="clearfix"></div>
		
                <!-- top tiles -->
                <div class="row tile_count" style="margin-right:-245px; margin-top: 8px;">
					 <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count bgimage" style=" margin-left:10px; margin-right:10px; background-color: #dadada; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; border-radius: 10px; width: 204px;">
			<div class="right">

				
					<?php
	$result= mysqli_query($con,"select * from user where user_id = '".$_SESSION['id']."' order by user_id DESC") or die (mysqli_error());
	while ($row= mysqli_fetch_array ($result) ){
							$id=$row['user_id'];
							?>
				
                            <span class="count_top" style="color: darkslategrey; font-size: 12px;"><i class="fa fa-pencil"></i> Member ID </span>
				</a>
                             <div class="count green" style="font-size: 25px;"><?php echo $row['member_id']; ?></div>
							 <span class="count_bottom"></span>
			  <?php } ?>							
                        </div>		 	
 				</div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count"  style=" margin-left:10px; margin-right:10px; background-color: #dadada; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; border-radius: 10px; width: 204px;">
                        
                        <div class="right">
							
				<?php
	$result= mysqli_query($con,"select * from user where user_id = '".$_SESSION['id']."' order by user_id DESC") or die (mysqli_error());
	while ($row= mysqli_fetch_array ($result) ){
							$id=$row['user_id'];
							?>
                            <span class="count_top" style="color: darkslategrey;"><i class="fa fa-male"></i> <i class="fa fa-female"></i> School ID</span>
				</a>
                            <div class="count green" style="font-size: 25px;"><?php echo $row['school_number']; ?>
  
                            </div>
                              <?php } ?>
							 <span class="count_bottom"></span>							
                        </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count"  style=" margin-left:10px; margin-right:10px; background-color: #dadada; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; border-radius: 10px; width: 204px;">
                        <div class="right">
										
				<?php
	$result= mysqli_query($con,"select * from user where user_id = '".$_SESSION['id']."' order by user_id DESC") or die (mysqli_error());
	while ($row= mysqli_fetch_array ($result) ){
							$id=$row['user_id'];
							?>
				
                            <span class="count_top" style="color: darkslategrey;"><i class="fa fa-book"></i> Type</span>
				</a>
                             <div class="count green" style="font-size: 25px;"><?php echo $row['type']; ?></div>
							 <span class="count_bottom "></span>
							  <?php } ?>                     
					  </div>

                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count"  style=" margin-left:10px; margin-right:10px; background-color: #dadada; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; border-radius: 10px; width: 204px;">
                        <div class="right">
													
				<?php
	$result= mysqli_query($con,"select * from user where user_id = '".$_SESSION['id']."' order by user_id DESC") or die (mysqli_error());
	while ($row= mysqli_fetch_array ($result) ){
							$id=$row['user_id'];
							?>
				
                            <span class="count_top" style="color: darkslategrey;"><i class="fa fa-book"></i> Course & section</span>
				</a>
                             <div class="count green" style="font-size: 25px;"><?php echo $row['course']." ".$row['section']; ?></div>
							 <span class="count_bottom "></span>
					<?php } ?>  
                        </div>
                    </div>
					<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count"  style=" margin-left:10px; margin-right:10px; background-color: #dadada; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; border-radius: 10px; width: 204px;">
                        <div class="right">
					<?php
	$result= mysqli_query($con,"select * from user where user_id = '".$_SESSION['id']."' order by user_id DESC") or die (mysqli_error());
	while ($row= mysqli_fetch_array ($result) ){
							$id=$row['user_id'];
							?>
				<a href="returned_book.php" style="text-decoration: none;">
                            <span class="count_top"><i class="fa fa-book"></i> Status</span>
				</a>
                           <div class="count green" style="font-size: 25px;"><?php echo $row['status']; ?></div>
							 <span class="count_bottom "></span>
							 <?php }?>							
                        </div>

                    </div>

                </div>
                <!-- /top tiles -->
				
				<!-- Start of Async Drift Code -->
				<script>
				"use strict";

				!function() {
				var t = window.driftt = window.drift = window.driftt || [];
				if (!t.init) {
					if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
					t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
					t.factory = function(e) {
					return function() {
						var n = Array.prototype.slice.call(arguments);
						return n.unshift(e), t.push(n), t;
					};
					}, t.methods.forEach(function(e) {
					t[e] = t.factory(e);
					}), t.load = function(t) {
					var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
					o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
					var i = document.getElementsByTagName("script")[0];
					i.parentNode.insertBefore(o, i);
					};
				}
				}();
				drift.SNIPPET_VERSION = '0.3.1';
				drift.load('u9bs44uht5ug');
				</script>
				<!-- End of Async Drift Code -->	
				

<?php include('slide.php'); ?>
				

<?php include ('footer.php'); ?>

