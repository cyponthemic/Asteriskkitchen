
<a href="<?php echo get_permalink( 299 ); ?>">
<?php if ( is_user_logged_in() ): ?> 
<?php global $current_user;
      get_currentuserinfo();
      echo 'Hey, ' . $current_user->user_firstname . "\n";
      echo $current_user->user_lastname . "\n";
  ?>
<?php else: ?>
LOGIN
<?php endif; ?>
</a>

