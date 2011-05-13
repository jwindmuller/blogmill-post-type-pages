<?php
class Page extends PagesAppModel {
	public $useTable = false;

    var $validate = array(
		'title' => array(
			'required' => array(
				'rule' => array('notEmpty')
			),
			'maxLength' => array(
				'rule' => array('maxLength', 255)
			)
		),
		'content' => array(
			'required' => array(
				'rule' => array('notEmpty')
			)
		)
	);

	/**
	 * Initialize Validation
	 *
	 * @return void
	 * @author Joaquin Windmuller
	 */
	protected function __initializeValidation() {
		$this->defineErrorMessage('title.required', __('Please write a title for this page', true));
		$this->defineErrorMessage('title.maxLength', __('Maximum length is 255 character', true));
		$this->defineErrorMessage('content.required', __('Write a content for this page', true));
	}

}
