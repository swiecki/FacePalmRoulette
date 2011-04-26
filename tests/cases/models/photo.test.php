<?php
/* Photo Test cases generated on: 2011-04-25 20:53:03 : 1303779183*/
App::import('Model', 'Photo');

class PhotoTestCase extends CakeTestCase {
	var $fixtures = array('app.photo');

	function startTest() {
		$this->Photo =& ClassRegistry::init('Photo');
	}

	function endTest() {
		unset($this->Photo);
		ClassRegistry::flush();
	}

}
?>