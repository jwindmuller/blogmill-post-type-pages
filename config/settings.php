<?php
	class PagesSettings extends BlogmillSettings {
		public $types = array();
		
        public function __construct() {
            $this->types = array(
                'Page' => array(
                    'name' => __d('pages', 'Page', true),
    				'fields' => array(
	    				'title' => array(
                            'type' => 'text',
                            'label' => __d('pages', 'Title', true)
                        ),
		    			'content' => array(
                            'type' => 'html',
                            'label' => __d('pages', 'Content', true)
                        ),
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

	}
	
