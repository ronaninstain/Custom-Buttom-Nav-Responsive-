function profile_dropdown_function(){ ?>
	<style>
		#foy-menu {
			display: flex;
			align-items: center;
			/* padding: 24px 6px; */
		}
		#foy-navdrop .drop-btn p {
			padding: 0 12px 0 0;
			margin-bottom: 0px;
			text-transform: uppercase;
			color: #ffffff;
		}
		#foy-navdrop {
			position: relative;
			width: fit-content;
			margin: auto;
    		margin-right: 0px;
		}
		#foy-navdrop.btn-light .foy-wrapper {
			background: #fff;
		}
		#foy-navdrop .foy-wrapper {
			background: #fff;
			height: auto;
			position: absolute;
			top: 45px;
			right: 0;
			z-index: 9090;
			width: 230px;
			overflow: hidden;
			border-radius: 5px;
			display: none;
			background: #242526;
			-webkit-transition: all 0.7s ease-out;
			transition: all 0.7s ease-out;
			-webkit-box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%),
				0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%);
			box-shadow: 0 2px 2px 0 rgb(151 151 151 / 14%), 0 3px 1px -2px rgb(151 151 151 / 14%), 0 1px 5px 0 rgb(151 151 151 / 14%);
			/* box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%),
				0 1px 5px 0 rgb(0 0 0 / 20%); */
		}
		.foy-wrapper ul {
			width: 230px;
			list-style: none;
			padding: 10px 0px 15px 0px;
			transition: all 250ms cubic-bezier(0.25, 0.1, 0.08, 0.93);
		}
		.foy-wrapper ul li {
			margin: 0 10px;
			border-radius: 3px;
			line-height: 26px;
			/* padding-left: 6px !important; */
			padding: 0px 10px;
			float: inherit;
			-webkit-transition: cubic-bezier(0.25, 0.1, 0.08, 0.93) 0.15s !important;
			-moz-transition: cubic-bezier(0.25, 0.1, 0.08, 0.93) 0.15s !important;
			-ms-transition: cubic-bezier(0.25, 0.1, 0.08, 0.93) 0.15s !important;
			-o-transition: cubic-bezier(0.25, 0.1, 0.08, 0.93) 0.15s !important;
			transition: cubic-bezier(0.25, 0.1, 0.08, 0.93) 0.15s !important;
		}
		#foy-navdrop.btn-light .foy-wrapper span,
		#foy-navdrop.btn-light .foy-wrapper ul li a {
			color: #232323;
			font-weight: 500;
		}
		.feed-dsf3SD_02-1SAd9 {
			padding: 8px;
			align-items: center;
			cursor: pointer;
		}
		.foy-wrapper ul li a {
			width: 100%;
			position: relative;
			color: #e4e6eb;
			font-size: 13px;
			font-weight: 300;
			padding: 0 3px;
			margin-left: 0 !important;
			display: flex;
			border-radius: 8px;
			align-items: center;
			text-decoration: none;
			-webkit-cursor: pointer;
			cursor: pointer;
		}
		.foy-wrapper ul li.profile-dsf3SD_02-1SAd9 a {
			justify-content: center;
		}
		.profile-dsf3SD_02-1SAd9 {
			padding: 5px !important;
			align-items: center;
			cursor: pointer;
		}

		.profile-dsf3SD_02-1SAd9 a img {
			height: 50px !important;
			width: 50px;
			margin: auto 0 !important;
			border-radius: 50%;
			object-fit: cover;
			box-shadow: -6px 6px 14px -8px rgb(143 143 143);
		}
		.profile-dsf3SD_02-1SAd9 .foy-user{
			margin-left:8px;
		}
		#ch_head_name {
			color: #000000;
			font-weight: 500;
			font-size: 15px;
			margin-bottom: 0px;
			line-height: 18px;
			display: -webkit-box;
			-webkit-line-clamp: 1;
			-webkit-box-orient: vertical;
			overflow: hidden;		}
		#head_view {
			color: #2e2e2e;
			font-size: 12px;
			line-height: 0;
		}
		.drop-btn img.profilePicture {
			cursor: pointer !important;
			border-radius: 100%;
			object-fit: cover;
			width: 25px;
			height: 25px;
			margin-left: 1px;
		}
		.foy-wrapper ul li a span {
			color: #e4e6eb;
			text-align: left;
		}
		.foy-wrapper ul li a i {
			position: absolute;
			right: 0px;
			color: #e4e6eb;
			font-size: 13px;
		}
		li.setting-item-logout {
			padding: 5px !important;
			background: #f2f2f2;
		}
		.setting-item-logout i.fa.fa-sign-out {
			position: inherit;
			margin-right: 5px;
			font-size: 15px;
		}
		.setting-item-logout a span{
			font-size: 15px;
		}
		.setting-item-logout a{
			justify-content: center;
		}
		#foy-navdrop.btn-light .foy-wrapper ul li.setting-item-logout:hover {
			background: #e7e7e7 !important;
		}
		#foy-navdrop.btn-light .foy-wrapper ul li:hover {
			background: #f2f2f2 !important;
		}
		#foy-navdrop.btn-light .foy-wrapper ul li.setting-item:hover {
			box-shadow: -7px -7px 20px 0px #fff9, -4px -4px 5px 0px #fff9, 7px 7px 20px 0px #0002, 4px 4px 5px 0px #0001;
		}
		#foy-navdrop.btn-light .tooltip {
			background: #ffffff !important;
		}
		#foy-navdrop .tooltip {
			position: absolute;
			right: 28px;
			bottom: 0px;
			height: 15px;
			width: 15px;
			display: none;
			background: #ffffff;
			-webkit-transform: rotate(45deg);
			transform: rotate(45deg);
			-webkit-box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%),
				0 3px 1px -2px rgb(0 0 0 / 12%), 0 1px 5px 0 rgb(0 0 0 / 20%);
			box-shadow: 0 2px 2px 0 rgb(0 0 0 / 14%), 0 3px 1px -2px rgb(0 0 0 / 12%),
				0 1px 5px 0 rgb(0 0 0 / 20%);
		}
		#foy-navdrop .tooltip.show {
			display: block !important;
		}

		#foy-navdrop .foy-wrapper.show {
			display: block;
			display: flex;
		}
		.foy-n-number {
			display: flex;
			background: #fa7252;
			padding: 0px 5px;
			font-size: 12px;
			border-radius: 20px;
			margin-left: 5px;
			align-items: center;
			height: 17px !important;
			color: #ffffff !important;
		}
		#foy-navdrop.btn-light li a span,
		#foy-navdrop.btn-light .foy-wrapper ul li a i,
		#foy-navdrop.btn-light {
			color: #000;
		}
		.menu-bar hr {
			height: 1px;
			margin: 8px 12px;
		}
		.foy-login{
			text-align: end;
		}
		a.foy-login-button {
			color: #ffffff;
			text-transform: uppercase;
		}
	</style>
	<?php
	if ( function_exists('bp_loggedin_user_link') && is_user_logged_in() ){
	?>
	<li style="list-style: none;">
		<?php
			$fullName =  bp_get_loggedin_user_fullname();
			$userName = bp_get_loggedin_user_username();
			$userAvatar = bp_get_loggedin_user_avatar( 'type=full' );
			$siteUrl = get_site_url();
		?>
		<div class="buttons">
			<div id="foy-navdrop" class="btn-light">
				<div class="drop-btn">
					<a id="foy-menu" tooltipped="" href="#!">
						<p><?php echo $fullName; ?></p>
						<img src="http://localhost/neno/wp-content/uploads/2022/08/user.png" class="profilePicture"  >
					</a>
				</div>
				<div class="tooltip"> </div>
				<div class="foy-wrapper" >
					<ul class="menu-bar" >
						<li class="profile-dsf3SD_02-1SAd9">
							<a href="<?php bp_loggedin_user_link(); ?>" >
								<?php echo $userAvatar; ?> 
								<div class="foy-user"> 
									<p id="ch_head_name"><?php echo $fullName; ?></p>
									<!-- <p id="head_view">Courses</p> -->
								</div>
							</a>
						</li>
						<hr>
						<li class="setting-item-logout">
							<a href="/?action=logout">
								<i class="fa fa-sign-out" aria-hidden="true"></i>
								<span> Logout</span>
							</a>
						</li>
						<hr>
						<li class="setting-item">
							<a href="<?php echo $siteUrl; ?>/members/<?php echo $userName; ?>/dashboard">
								<i class="fas fa-tachometer" aria-hidden="true"></i>
								<span> Dashboard</span>
							</a>
						</li>
						<li class="setting-item">
							<a href="<?php echo $siteUrl; ?>/members/<?php echo $userName; ?>/course">
								<i class="fa fa-book" aria-hidden="true"></i>
								<span> Courses</span>
							</a>
						</li>
						<li class="setting-item">
							<a href="<?php echo $siteUrl; ?>/members/<?php echo $userName; ?>/course/course-stats">
								<i class="fa fa-area-chart" aria-hidden="true"></i>
								<span> Stats</span>
							</a>
						</li>
						<li class="setting-item">
							<a href="<?php echo $siteUrl; ?>/members/<?php echo $userName; ?>/messages">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<span> Inbox</span>
							</a>
						</li>
						<li class="setting-item">
							<a href="<?php echo $siteUrl; ?>/members/<?php echo $userName; ?>/notifications">
								<i class="fa fa-bell" aria-hidden="true"></i>
								<?php 
									$n=vbp_current_user_notification_count(); 
								?>
								Notifications<span class="foy-n-number"> <?php echo $n>0? $n: '0'?></span>
							</a>
						</li>
						<li class="setting-item">
							<a href="<?php echo $siteUrl; ?>/members/<?php echo $userName; ?>/settings">
								<i class="fa fa-cog" aria-hidden="true"></i>
								<span> Settings</span>
							</a>
						</li>
						<li class="setting-item">
							<a href="<?php echo $siteUrl; ?>/members/<?php echo $userName; ?>/gifts">
								<i class="fa fa-gift" aria-hidden="true"></i>
								<span> Gifts</span>
							</a>
						</li>
						<li class="setting-item">
							<a href="<?php echo $siteUrl; ?>/members/<?php echo $userName; ?>/wishlist">
								<i class="fa fa-heart" aria-hidden="true"></i>
								<span> Wishlist</span>
							</a>
						</li>
						<li class="setting-item">
							<a href="<?php echo $siteUrl; ?>/members/<?php echo $userName; ?>/my-account">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								<span> My Orders</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</li>
	<?php }else{ ?>
		<li class="foy-login" style="list-style: none">
			<a href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjU4MDcyNSIsInRvZ2dsZSI6ZmFsc2V9" class="foy-login-button" role="button">
				Login
			</a>
		</li>
	<?php } ?>
	<script>
		// const docBody = document.querySelector("body");

		// DropDown Profile Button
		const btn_light = document.querySelector(".btn-light .drop-btn"),
		light_tooltip = document.querySelector(".btn-light .tooltip"),
		light_menu_wrapper = document.querySelector(".btn-light .foy-wrapper"),
		light_help_btn = document.querySelector(".btn-light .back-help-btn");

		document.addEventListener('click', function(e) {
			if ( btn_light.contains(e.target) ) {
				light_menu_wrapper.classList.toggle("show");
				light_tooltip.classList.toggle("show");
			}
			else if ( !light_menu_wrapper.contains(e.target) ) {
				light_menu_wrapper.classList.remove("show");
				light_tooltip.classList.remove("show");
			}
		})
	</script>
	<?php
}
add_shortcode( 'profile_dropdown', 'profile_dropdown_function' );