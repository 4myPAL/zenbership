<div id="zen_content" class="zen_round">

    <div class="zen_pad_more zen_fonts" id="zen_homepage">

        <div class="col70l">
            <div class="zen_float_right">
                <a href="%pp_url%/news.php">More &raquo;</a>
            </div>
            <h2>News</h2>
            {-news_homepage-}
        </div>
        <div class="col30r">
            <?php
            $session = new session;
            $ses = $session->check_session();
            if ($ses['error'] != '1') {
                $user = new user;
                $username = $user->get_username($ses['member_id']);
            ?>

                <div class="zen_gray_box">
                    <div class="zen_pad_topl">
                        <p class="zen">Welcome back <b><?php echo $username; ?></b>!</p>

                        <p class="zen"><a href="%pp_url%/manage">Visit the member's area &raquo;</a></p>
                    </div>
                </div>

            <?php
            } else {
            ?>
                {-login_box-}

                <div class="zen_space"></div>
                {-not_a_member_box-}
            <?php
            }
            ?>
        </div>
        <div class="zen_clear"></div>

        <!--
        <div class="col70l">

            <p class="zen">Welcome to the %pp_company% Membership site.</p>

            {-login_box-}

            <h2>Upcoming Events</h2>
            {-upcoming_events-}
            <p class="zen_right bold zen_tiny"><a href="%pp_url%/calendar.php">View Calendar &raquo;</a></p>

        </div>
        <div class="col30r">

            <h2>Member Spotlight</h2>
            {-member_spotlight-}

            <h2>Featured Store Items</h2>
            {-featured_product-}
            <p class="zen_right bold zen_tiny"><a href="%pp_url%/catalog.php">View Store &raquo;</a></p>

        </div>
        <div class="zen_clear"></div>
        -->

    </div>

</div>