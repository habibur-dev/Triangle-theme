<?php
//get header.php
get_header(); 
?>

    <?php if(get_theme_mod('banner_image')): ?>
    <section class="home-banner" style="background: url('<?php echo esc_url(get_theme_mod("banner_image")); ?>'); height: 350px; display: flex; align-items: center;">
    <?php endif; ?>
        <div class="container">
            <div class="main-banner" style="max-width: 500px;">
                <div class="banner-text">
                    <?php if(get_theme_mod('banner_title')): ?>
                    <h1><?php echo get_theme_mod('banner_title'); ?></h1>
                    <?php endif; ?>
                    <?php if(get_theme_mod('banner_details')): ?>
                    <p><?php echo get_theme_mod('banner_details'); ?></p>
                    <?php endif; ?>
                    <a href="#" class="btn btn-common">SIGN UP</a>
                </div>
            </div>
        </div>
    </section>
    <!--/#home-slider-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                    <?php
                    /** get posts from post-content.php */
                    get_template_part('templates/temp/post', 'content');
                    ?>
                        
                    </div>
                    <div class="blog-pagination">
                        <ul class="pagination">

                        <?php 
                        echo  paginate_links(array(
                            'mid_size' => 2,
                            'prev_text' => __('<i class="fas fa-backward"></i>'),
                            'next_text' => __('<i class="fas fa-forward"></i>')
                        ));
                        ?>
                          <!-- <li><a href="#">Left</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li class="active"><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li><a href="#">6</a></li>
                          <li><a href="#">7</a></li>
                          <li><a href="#">8</a></li>
                          <li><a href="#">9</a></li>
                          <li><a href="#">right</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <!-- <div class="sidebar-item  recent">
                            <h3>Comments</h3>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/project1.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/project2.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/project3.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-item categories">
                            <h3>Categories</h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="#">Lorem ipsum<span class="pull-right">(1)</span></a></li>
                                <li class="active"><a href="#">Dolor sit amet<span class="pull-right">(8)</span></a></li>
                                <li><a href="#">Adipisicing elit<span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Sed do<span class="pull-right">(9)</span></a></li>
                                <li><a href="#">Eiusmod<span class="pull-right">(3)</span></a></li>
                                <li><a href="#">Mockup<span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Ut enim ad minim <span class="pull-right">(2)</span></a></li>
                                <li><a href="#">Veniam, quis nostrud <span class="pull-right">(8)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item tag-cloud">
                            <h3>Tag Cloud</h3>
                            <ul class="nav nav-pills">
                                <li><a href="#">Corporate</a></li>
                                <li><a href="#">Joomla</a></li>
                                <li><a href="#">Abstract</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Product</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item popular">
                            <h3>Latest Photos</h3>
                            <ul class="gallery">
                                <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                            </ul>
                        </div> -->

                        <?php dynamic_sidebar('main-sidebar'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
<?php
//get footer.php
get_footer(); 
?>

