<?php 

class HomePage extends Page {
	private static $allowed_children = array(
		'BlogPage',
		'CaseStudyPage'
	);
}

class HomePage_Controller extends Page_Controller {

}