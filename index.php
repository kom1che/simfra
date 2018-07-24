<?php get_header(); ?>

<section id="about_ser" class="s_about">
    <div class="section-header">
        <h2><?php
            $idObj = get_category_by_slug(s_about);
            $id = $idObj->term_id;
            echo get_cat_name($id);
            ?></h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php
                echo category_description($id);
                ?></div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <div class="service_container">
                <?php if ( have_posts() ) : query_posts('p=74');
                    while (have_posts()) : the_post(); ?>
                        <div class="col-md-6 right col-md-push-6 ">
                            <div class="service_image">
                                <?php if ( has_post_thumbnail() ) : ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>"/>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6 left col-md-pull-6 ">
                            <h3><?php the_title(); ?></h3>
                            <div class="service_description">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?php endwhile; endif; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="project" class="s_project bg_light">
    <div class="section-header">
        <h2><?php
            $idObj = get_category_by_slug(s_project);
            $id = $idObj->term_id;
            echo get_cat_name($id);
            ?></h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php
                echo category_description($id);
                ?></div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="filter_div controls">
                    <ul>
                        <li class="filter active" data-filter="all">All projects</li>
                        <li class="filter" data-filter=".completed">Completed</li>
                        <li class="filter" data-filter=".soon">Available Soon</li>
                    </ul>
                </div>
                <div id="portfolio_grid">

                    <?php if ( have_posts() ) : query_posts('p=77');
                        while (have_posts()) : the_post(); ?>

                            <div class="mix col-md-6 col-sm-6 portfolio_item <?php
                            $tags = wp_get_post_tags($post->ID);
                            if ($tags) {
                                foreach($tags as $tag) {
                                    echo ' ' . $tag->name;
                                }
                            }
                            ?>" data-hover="port_item_cont">
                                <?php the_post_thumbnail(array(647, 386)); ?>
                                <div class="port_item_cont">
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_content(); ?>
                                    <a href="#" class="popup_content">View</a>
                                </div>
                        <?php endwhile; endif; wp_reset_query(); ?>
                                <div class="hidden">
                                    <div class="port_desr">
                                        <div class="modal-box-content">

                                            <?php if ( have_posts() ) : query_posts('p=80');
                                                while (have_posts()) : the_post(); ?>
                                                    <button class="mfp-close" type="button" title="Close (Esc)">x</button>
                                                    <h3><?php the_title(); ?></h3>
                                                    <?php the_content(); ?>
                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                                <?php endwhile; endif; wp_reset_query(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php if ( have_posts() ) : query_posts('p=83');
                    while (have_posts()) : the_post(); ?>

                    <div class="mix col-md-6 col-sm-6 portfolio_item <?php
                    $tags = wp_get_post_tags($post->ID);
                    if ($tags) {
                        foreach($tags as $tag) {
                            echo ' ' . $tag->name;
                        }
                    }
                    ?>" data-hover="port_item_cont">
                        <?php the_post_thumbnail(array(647, 386)); ?>
                        <div class="port_item_cont">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <a href="#" class="popup_content">View</a>
                        </div>
                        <?php endwhile; endif; wp_reset_query(); ?>
                        <div class="hidden">
                            <div class="port_desr">
                                <div class="modal-box-content">

                                    <?php if ( have_posts() ) : query_posts('p=86');
                                        while (have_posts()) : the_post(); ?>
                                            <button class="mfp-close" type="button" title="Close (Esc)">x</button>
                                            <h3><?php the_title(); ?></h3>
                                            <?php the_content(); ?>
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                        <?php endwhile; endif; wp_reset_query(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about_me" class="s_about_me bg_dark">
    <div class="section-header">
        <h2><?php
            $idObj = get_category_by_slug(s_about_me);
            $id = $idObj->term_id;
            echo get_cat_name($id);
            ?></h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php
                echo category_description($id);
                ?></div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">

                <?php if ( have_posts() ) : query_posts('p=60');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-4 col-md-push-4 animation_1">
                    <h3>Photo</h3>
                    <div class="person">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a class="popup" href="<?php
                            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                            echo $large_image_url[0];
                            ?>" title="<?php the_title_attribute(); ?>">
                                <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-4 animation_2">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>


            <div class="col-md-4 animation_3 personal_last_block">
                <?php if ( have_posts() ) : query_posts('p=63');
                    while (have_posts()) : the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        <h2 class="personal_header"><?php
                            $idObj = get_category_by_slug(s_contacts);
                            $id = $idObj->term_id;
                            $options = get_option('sample_theme_options');
                            echo $options['name'];
                            ?></h2>
                        <?php the_content(); ?>
                    <?php endwhile; endif; wp_reset_query(); ?>
                <div class="social_wrap">
                    <ul>
                        <?php
                        $idObj = get_category_by_slug('social');
                        $id = $idObj->term_id;
                        if ( have_posts() ) : query_posts('cat=' . $id);
                            while (have_posts()) : the_post(); ?>
                                <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>
                            <?php endwhile; endif; wp_reset_query(); ?>
                    </ul>
                </div>
            </div>

            </div>
        </div>
    </div>
</section>

<section id="contacts" class="s_contacts">
    <div class="section-header">
        <h2><?php
            $idObj = get_category_by_slug(s_contacts);
            $id = $idObj->term_id;
            echo get_cat_name($id);
            ?></h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php
                echo category_description($id);
                ?></div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 con_box">
                    <div class="contact_box">
                        <div class="contacts_icon icon-basic-geolocalize-01"></div>
                        <h3>Address:</h3>
                        <p><?php
                            $options = get_option('sample_theme_options');
                            echo $options['address']; ?></p>
                    </div>
                    <div class="contact_box">
                        <div class="contacts_icon icon-basic-smartphone"></div>
                        <h3>Telephone:</h3>
                        <p><?php
                            $options = get_option('sample_theme_options');
                            echo $options['phonetext']; ?></p>
                    </div>
                    <div class="contact_box">
                        <div class="contacts_icon icon-basic-webpage-img-txt"></div>
                        <h3>Web-site:</h3>
                        <p><a href="//<?php
                            $options = get_option('sample_theme_options');
                            echo $options['website']; ?>" target="blanc"><?php
                                $options = get_option('sample_theme_options');
                                echo $options['website']; ?></a></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 form_box">
                    <form action="http://formspree.io/zhikharevtim@gmail.com"" class="main_form" novalidate target="blank" method="POST">
                    <label class="form-group control-group">
                        <span class="color_element">*</span> Your Name:
                        <input type="text" name="name" placeholder="Your Name" data-validation-required-message="You didn't put the name" required />
                        <span class="help-block text-danger"></span>
                    </label>
                    <div class="control-group form-group">
                        <label class="control-label"><span class="color_element">*</span>Email address</label>
                        <label class="controls">
                            <input type="email" name="email" placeholder="Your Email" data-validation-required-message="It is important field" data-validation-email-message="Your email is incorrect" required />
                            <span class="help-block text-danger"></span>
                        </label>
                    </div>
                    <label class="form-group control-group">
                        <span class="color_element">*</span> Your Message
                        <textarea class="message" rows="5" name="message" placeholder="Your Message" data-validation-required-message="You didn't put the message" required ></textarea>
                        <span class="help-block text-danger"></span>
                    </label>
                    <button>Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>