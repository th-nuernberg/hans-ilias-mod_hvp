<?php

namespace srag\Plugins\H5P\Access;

use ilH5PPlugin;
use srag\DIC\DICTrait;
use srag\Plugins\H5P\Utils\H5PTrait;

/**
 * Class Permission
 *
 * @package srag\Plugins\H5P\Access
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Permission {

	use DICTrait;
	use H5PTrait;
	const PLUGIN_CLASS_NAME = ilH5PPlugin::class;
	/**
	 * @var self
	 */
	protected static $instance = NULL;


	/**
	 * @return self
	 */
	public static function getInstance()/*: self*/ {
		if (self::$instance === NULL) {
			self::$instance = new self();
		}

		return self::$instance;
	}


	/**
	 * Permission constructor
	 */
	private function __construct() {

	}
}
