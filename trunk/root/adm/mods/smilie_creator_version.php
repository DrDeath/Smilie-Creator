<?php
/**
*
* @package acp
* @version $Id: smilie_creator_version.php 63 2008-08-02 16:11:31Z stoffel04 $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package smilie_creator
*/
class smilie_creator_version
{
	function version()
	{
		return array(
			'author'	=> 'Dr.Death',
			'title'		=> 'Smilie Creator',
			'tag'		=> 'smilie_creator',
			'version'	=> '1.0.8',
			'file'		=> array('www.lpi-clan.de', 'updatecheck', 'smilie_creator.xml'),
		);
	}
}

?>