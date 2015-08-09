<?php

/*
 * This file is part of Hux
 */
namespace Hux;

use \Huxtable\FileInfo;

class Application extends \Huxtable\Application
{
	/**
	 * @var Huxtable\FileInfo
	 */
	protected $projectPath;

	/**
	 * @var string
	 */
	protected $remoteConfigURL;

	/**
	 * @param	string	$version
	 * @param	string	$phpMinimumVersion
	 */
	public function __construct( $version, $phpMinimumVersion )
	{
		$this->remoteConfigURL = 'https://raw.githubusercontent.com/huxtable/huxtable/huxtable/app/config.json';
		$this->projectPath = new FileInfo( dirname( dirname( dirname( __FILE__ ) ) ) );
		$this->userDir = new FileInfo( getenv( 'HOME' ) . '/.hux' );

		parent::__construct( 'hux', $version, $phpMinimumVersion );
	}
}

?>
