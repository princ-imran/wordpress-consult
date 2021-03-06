<?php get_header(); ?>    
            
   
    <div class="looking_for_specific_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="looking_for_left para_default">
                        <h3 style="color: <?php echo cs_get_option('fields_4') ?>" ><?php echo cs_get_option('fields_1') ?></h3>
                        <p><?php echo cs_get_option('fields_2') ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="looking_for_right image_fulwidth wow fadeInRight" data-wow-delay="300ms">
                        <img src="<?php echo wp_get_attachment_image_src(cs_get_option('fields_3'),'full')[0]; ?>">
                    </div>
                </div>
            </div><!--row -->
        </div><!--container -->
    </div><!--looking_for_specific_area -->
    
    <div class="why_choose_us_area">
        <div class="container">
            <div class="row">
                <div class="item single_blog_item_div para_default text-center">
                    <h2><a>Our Services</a></h2>
                </div> 

                <?php

$grp_sec_1=cs_get_option('fields_group_1');
if(is_array($grp_sec_1)){
foreach($grp_sec_1 as $grp_value_1){ ?>           
                 <div class="col-md-4 col-sm-6">
                    <div class="choose_us_single para_default image_fulwidth text-center wow fadeInLeft" data-wow-delay="700ms">
                        <img src="<?php echo esc_url ( wp_get_attachment_image_src ( $grp_value_1['fields_7'], 'full' )[0]);?>">
                        <h3><?php echo esc_html ($grp_value_1['fields_5'])?></h3>
                        <p><?php echo esc_html ($grp_value_1['fields_6'])?></p>
                    </div>
                </div><!--col-md-4 -->

                <?php }} ?>
            </div><!--row -->
        </div><!--container-fluid -->
    </div><!--about_section_area -->
    
    <div class="about_section_area">
        <div class="container-fluid">
            <div class="row">
            
                <div class="item single_blog_item_div para_default text-center">
                    <h2><a>Our Works</a></h2>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="about_Single_item para_default text-center wow fadeInLeft" data-wow-delay="300ms">
                        <i class="flaticon-pie-chart"></i>
                        <h3>About Business</h3>
                        <p>No coding skills required to create unique sites. your site in real-time.</p>
                    </div>
                </div><!--col-md-4 -->

                <div class="col-md-4 col-sm-6">
                    <div class="about_Single_item para_default text-center wow fadeInLeft" data-wow-delay="500ms">
                        <i class="flaticon-line-chart"></i>
                        <h3>Advanced Analytics</h3>
                        <p>No coding skills required to create unique sites. your site in real-time.</p>
                    </div>
                </div><!--col-md-4 -->

                <div class="col-md-4 col-sm-6">
                    <div class="about_Single_item para_default text-center wow fadeInLeft" data-wow-delay="700ms">
                        <i class="flaticon-leaf-1"></i>
                        <h3>We Innovate</h3>
                        <p>No coding skills required to create unique sites. your site in real-time.</p>
                    </div>
                </div><!--col-md-4 -->
            </div><!--row -->
        </div><!--container-fluid -->
    </div><!--about_section_area -->
    
    <div class="latest_blog_section_area removeBg_latest_blog">
        <div class="container">
            <div class="row">
                <div class="item single_blog_item_div para_default text-center">
                    <h2><a>Latest News</a></h2>
                </div>
                <div class="col-md-4">
                    <div class="single_blog_h_active">
                        <div class="single_blog_item_area para_default image_fulwidth text-center">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/latest_blog_01.jpg" alt="images"></a>
                            <h4>25 JUNE 2016</h4>
                            <h3><a href="blog-single.html">Make your productive teams</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_blog_h_active">
                        <div class="single_blog_item_area para_default image_fulwidth text-center">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/latest_blog_01.jpg" alt="images"></a>
                            <h4>25 JUNE 2016</h4>
                            <h3><a href="blog-single.html">Make your productive teams</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_blog_h_active">
                        <div class="single_blog_item_area para_default image_fulwidth text-center">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/latest_blog_01.jpg" alt="images"></a>
                            <h4>25 JUNE 2016</h4>
                            <h3><a href="blog-single.html">Make your productive teams</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container-->
    </div><!-- latest_blog_section_area-->


    
<?php get_footer(); ?>