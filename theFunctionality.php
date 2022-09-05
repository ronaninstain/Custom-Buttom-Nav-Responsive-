<div class="s-to-hide-on-large-device-S">
    <div class="searchform">
        <form id="search" action="">
            <input type="hidden" name="post_type" value="course">
            <input type="text" class="s" id="s" name="s" placeholder="Search courses.." value="">
            <button type="submit" class="sbtn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="S-Bottom-Navbar" id="S-Bottom-Navbar-id">
        <a href="<?php echo vibe_site_url('', 'logo'); ?>"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
        <a href="#search" class="S-Bottom-SearchLink"><i class="fa fa-search" aria-hidden="true"></i><span>Search</span></a>
        <a href="<?php echo wc_get_cart_url() ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Cart</span></a>
        <?php
        if (is_user_logged_in()) { ?>
            <a href="<?php bp_loggedin_user_link(); ?>"><i class="fa fa-user" aria-hidden="true"></i><span>Profile</span></a>
        <?php }
        ?>
    </div>
</div>

<script>
    jQuery("#S-Bottom-Navbar-id").on('click', 'a', function() {
        jQuery("a").removeClass("active");
        jQuery(this).addClass("active"); // adding active class
    });

    jQuery(function() {
        jQuery('.S-Bottom-SearchLink').on('click', function(e) {
            jQuery('.searchform').toggleClass('open');
        });
    });
</script>