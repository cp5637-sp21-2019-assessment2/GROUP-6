<div class="blog-post">
        <h2 class="blog-post-title">
            
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
            
        <?php if(has_post_thumbnail()) : ?>
        <div class="post-thumb">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>
        <?php the_content(); ?>
        </div>
    </div>
</div>