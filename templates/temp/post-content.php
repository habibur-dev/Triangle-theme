<?php 
/**
 * Template Name: Blog post
 */

?>

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<div class="col-md-6 col-sm-12 blog-padding-right">
    <div class="single-blog two-column">
        <div class="post-thumb">
            <a href="<?php the_permalink();?>">
            
            <?php if(has_post_thumbnail()): ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" alt="">
            <?php endif; ?>
            </a>
            <div class="post-overlay">
                <span class="uppercase"><a href=""><?php echo get_the_date(); ?></a></span>
            </div>
        </div>
        <div class="post-content overflow">
            <h2 class="post-title bold"><a href="<?php the_permalink();?>"><?php echo the_title(); ?></a></h2>
            <h3 class="post-author"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Posted by <?php the_author(); ?></a></h3>
            <p><?php echo get_the_excerpt(); ?></p>
            <a href="#" class="read-more">View More</a>
            <div class="post-bottom overflow">
                <ul class="nav nav-justified post-nav">
                    <li>
                    <?php $categories = get_the_category(); 
                          if(!empty($categories)){
                              foreach($categories as $category){
                                  printf('<a href="%1$s"><i class="fa fa-tag"></i>%2$s</a></li>', esc_url(get_category_link($category->term_id)),
                                  esc_html($category->name));
                              }
                          }
                    
                    ?>
                    
                    <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php else: ?>
<?php echo wpautop('Sorry, no posts found!');?>
<?php endif; ?>

