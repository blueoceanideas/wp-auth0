<div class="a0-wrap">

  <?php require WPA0_PLUGIN_DIR . 'templates/initial-setup/partials/header.php'; ?>

  <div class="container-fluid a0-final-step">

	<svg width="90" height="90" viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" class="checkmark"><circle cx="26" cy="26" r="25" fill="none" class="checkmark__circle"/><path fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" class="checkmark__check"/></svg>

	<h1><?php _e( 'Done! You finished this Setup Wizard', 'wp-auth0' ); ?></h1>

	<p class="a0-step-text"><?php _e( 'Adjust the plugin settings from the WordPress dashboard, and visit the Auth0 dashboard to change how users log in, add connections, enable multi-factor authentication, and more.', 'wp-auth0' ); ?></p>

	<div class="a0-buttons extra-space">
	  <a href="<?php echo admin_url( 'admin.php?page=wpa0' ); ?>" class="a0-button primary"><?php _e( 'GO TO PLUGIN SETTINGS', 'wp-auth0' ); ?></a>
	</div>
  </div>
</div>
