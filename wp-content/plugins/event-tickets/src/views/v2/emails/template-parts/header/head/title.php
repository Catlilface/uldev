<?php
/**
 * Event Tickets Emails: Main template > Header > Head > Title.
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/tickets/v2/emails/template-parts/header/head/title.php
 *
 * See more documentation about our views templating system.
 *
 * @link https://evnt.is/tickets-emails-tpl Help article for Tickets Emails template files.
 *
 * @version 5.5.9
 *
 * @since 5.5.9
 *
 * @var Tribe_Template  $this  Current template object.
 */

// Bail if we're on preview.
if ( ! empty( $preview ) ) {
	return;
}
?>
<title><?php esc_html( $title ); ?></title>
