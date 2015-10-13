<?php defined('SYSPATH') or die('No direct access allowed.');
/**
  * Theme Name: Ocean Free
  * Description: Clean free theme that includes full admin. It has publicity. Do not delete this theme, all the views depend in this theme.
  * Tags: HTML5, Admin, Free
  * Version: 2.5.1
  * Author: Chema <chema@open-classifieds.com> , <slobodan@open-classifieds.com>
  * License: GPL v3
  */


/**
 * placeholders for this theme
 */
Widgets::$theme_placeholders	= array('footer', 'sidebar');

/**
 * custom options for the theme
 * @var array
 */
Theme::$options = Theme::get_options();

//we load earlier the theme since we need some info
Theme::load();

/**
 * styles and themes, loaded in this order
 */
Theme::$skin = Theme::get('theme');

/**
 * styles and themes, loaded in this order
 */

Theme::$styles = array( '//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' => 'screen',
                        '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' => 'screen',
                        '//cdn.jsdelivr.net/bootstrap.image-gallery/3.1.0/css/bootstrap-image-gallery.min.css' => 'screen',
                        '//cdn.jsdelivr.net/blueimp-gallery/2.14.0/css/blueimp-gallery.min.css' => 'screen', 
                        '//cdn.jsdelivr.net/bootstrap.datepicker/0.1/css/datepicker.css' => 'screen',
                        '//cdn.jsdelivr.net/chosen/1.0.0/chosen.css' => 'screen',
                        'css/styles.css?v='.Core::VERSION => 'screen',
                        'css/slider.css' => 'screen',
                    );

if (Theme::$skin!='default')
    Theme::$styles = array_merge(Theme::$styles, array('css/color-'.Theme::$skin.'.css' => 'screen'));

Theme::$scripts['footer']	= array('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
                                    '//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
                                    '//cdn.jsdelivr.net/chosen/1.0.0/chosen.jquery.min.js',
                                    Route::url('jslocalization', array('controller'=>'jslocalization', 'action'=>'chosen')),
                                    'js/jquery.validate.min.js',
                                    Route::url('jslocalization', array('controller'=>'jslocalization', 'action'=>'validate')),
                                    '//cdn.jsdelivr.net/blueimp-gallery/2.14.0/js/jquery.blueimp-gallery.min.js',
                                    '//cdn.jsdelivr.net/bootstrap.image-gallery/3.1.0/js/bootstrap-image-gallery.min.js',
                                    '//cdn.jsdelivr.net/bootstrap.datepicker/0.1/js/bootstrap-datepicker.js',
                                    '//cdn.jsdelivr.net/holder/2.8.1/holder.min.js',
                                    'js/bootstrap-slider.js',
                                    'js/favico-0.3.8.min.js',
                                    'js/default.init.js?v='.Core::VERSION,
                                    'js/theme.init.js?v='.Core::VERSION,
                                    );

/**
 * custom error alerts
 */
Form::$errors_tpl 	= '<div class="alert alert-danger"><a class="close" data-dismiss="alert">×</a>
			       		<h4 class="alert-heading">%s</h4>
			        	<ul>%s</ul></div>';

Form::$error_tpl 	= '<div class="alert "><a class="close" data-dismiss="alert">×</a>%s</div>';


Alert::$tpl 	= 	'<div class="alert alert-%s">
					<a class="close" data-dismiss="alert" href="#">×</a>
					<h4 class="alert-heading">%s</h4>%s
					</div>';