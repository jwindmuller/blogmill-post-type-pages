<?php
	class PagesSettings extends BlogmillSettings {
		public $types = array(
			'Page' => array(
                'name' => 'Page',
				'fields' => array(
					'title' => 'text',
					'content' => 'html'
				),
				'form_layout' => array(
					'form-main' => array(
							array(
                                'title' => '',
    							'width' => '100%',
                                'fields' => array('title', 'content')
                            )
					)
				),
				'display' => 'title',
                'excerpt' => 'content',
				'comments' => false
			)
		);
		
	}
	
