<?php
/**
 * Custom Background Config.
 *
 * Configuration for the core WordPress `custom-background` theme feature.
 *
 * @package   Manuscript
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright 2019 Justin Tadlock
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://themehybrid.com/themes/exhale-manuscript
 */

return [
	'default-image'      => get_theme_file_uri( 'public/img/custom-background.jpg' ),
	'default-preset'     => 'default',
	'default-position-x' => 'center',
	'default-position-y' => 'top',
	'default-size'       => 'contain',
	'default-repeat'     => 'no-repeat',
	'default-attachment' => 'scroll',
	// Falls back to the `content-backgound` color for pre-1.2.0 compat.
	'default-color'      => '333333',
];
