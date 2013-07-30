<?php
/**
 * Copyright (c) 2013 Christopher Schäpers <christopher@schaepers.it>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

class Test_Avatar extends PHPUnit_Framework_TestCase {

	function testModes() {
		$this->assertEquals('local', \OC_Avatar::getMode());

		\OC_Config::setValue('avatar', 'local');
		$this->assertEquals('local', \OC_Avatar::getMode());
		
		\OC_Config::setValue('avatar', 'gravatar');
		$this->assertEquals('gravatar', \OC_Avatar::getMode());

		\OC_Config::setValue('avatar', 'none');
		$this->assertEquals('none', \OC_Avatar::getMode());
	}
}
