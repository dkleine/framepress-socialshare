<?php
    /*
    Plugin Name: Framepress SocialSharing
    Plugin URI: https://solutions.io/
    Description: Display social sharing icons after activation, no setup needed. Works for Twitter, Facebook, Google+, Linkedin and Xing.
    Author: solutions.io
    Version: 1.0
    Author URI: https://solutions.io
    */

add_action( 'wp_loaded', 'framepress_socialshare' );

function framepress_socialshare() { ?>
<div class="social-shares hidden-xs">
  <p class="btn-twitter"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a></p>
  <p class="btn-facebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a></p>
  <p class="btn-gplus"><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a></p>
  <p class="btn-linkedin"><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php the_permalink(); ?>"><i class="fa fa-linkedin"></i></a></p>
  <p class="btn-xing"><a target="_blank" href="https://www.xing-share.com/app/user?op=share;sc_p=xing-share;url=<?php the_permalink(); ?>"><i class="fa fa-xing"></i></a></p>
</div>
<?php }

function framepress_socialshare_style() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'framepress_socialshare_style', $plugin_url . 'assets/css/style.css' );
    wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3' );
}
add_action( 'wp_enqueue_scripts', 'framepress_socialshare_style' );
?>