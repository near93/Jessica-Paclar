<?php 

class BlogPage extends Page {

	private static $db = array (
		'Teaser' => 'Text',
	);

	private static $has_one = array (
		'Photo1' 	 	  => 'Image',
		'Photo2' 	 	  => 'Image',
		'VideoCover' 	  => 'Image',
		'Video' 	 	  => 'File'
	);

	private static $can_be_root = false;

	public function getCMSFields(){
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', TextareaField::create('Teaser'),'Content');

		$fields->addFieldToTab('Root.Attachments', $photo1 = UploadField::create('Photo1', 'Featured Photo One'));
		$fields->addFieldToTab('Root.Attachments', $photo2 = UploadField::create('Photo2', 'More Featured Photo'));
		$fields->addFieldToTab('Root.Attachments', $videocover = UploadField::create('VideoCover', 'Featured Video Cover'));
		$fields->addFieldToTab('Root.Attachments', $video = UploadField::create('Video', 'Featured Video'));

		$photo1->getValidator()->setAllowedExtensions(array('png', 'gif', 'jpg', 'jpeg'));
		$photo2->getValidator()->setAllowedExtensions(array('png', 'gif', 'jpg', 'jpeg'));
		$videocover->getValidator()->setAllowedExtensions(array('png', 'gif', 'jpg', 'jpeg'));

		$video->getValidator()->setAllowedExtensions(array('mp4'));

		return $fields;
	}
}

class BlogPage_Controller extends Page_Controller {

}