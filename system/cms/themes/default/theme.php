<?php

use Pyro\Module\Addons\AbstractTheme;

class Theme_Default extends AbstractTheme
{
    public $name			= 'PyroCMS Theme';
    public $author			= 'iKreativ';
    public $author_website	= 'http://ikreativ.com/';
    public $website			= 'http://pyrocms.com/';
    public $description		= 'Default PyroCMS v1.0 Theme - 2 Column, Fixed width, Horizontal navigation, CSS3 styling.';
    public $version			= '1.0.0';

	public $options 		= array(
		'show_breadcrumbs' => 	array(
			'title' 		=> 'Show Breadcrumbs',
			'description'   => 'Would you like to display breadcrumbs?',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'required'   => true
		),
		'layout' => array(
			'title' => 'Layout',
			'description'   => 'Which type of layout shall we use?',
			'default'       => '2 column',
			'type'          => 'select',
			'options'       => '2 column=Two Column|full-width=Full Width|full-width-home=Full Width Home Page',
			'required'   => true
		),
	);
}

/* End of file theme.php */