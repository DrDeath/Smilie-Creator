<?php
/** 
*
* @package smilies_creator
* $LastChangedDate: 2008-05-02 21:15:03 +0200 (Fr, 02 Mai 2008) $
* $LastChangedBy: stoffel04 $
* $Id: lang_smilie_creator.php 9 2008-05-02 19:15:03Z stoffel04 $
* $Revision: 9 $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License*
*
*/

/*
 * @ignore 
*/ 
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
//Start smilie creator
'SMILIE_CREATOR'		=> 'Smilie Creator',
'SHIELDTEXT' 			=> 'Schildtext',
'FONTCOLOR' 			=> 'Textfarbe',
'COLOR_DEFAULT'			=> 'Standard-Farbe',
'COLOR_DARK_RED'		=> 'Dunkelrot',
'COLOR_RED' 			=> 'Rot',
'COLOR_ORANGE' 			=> 'Orange',
'COLOR_BROWN' 			=> 'Braun',
'COLOR_YELLOW' 			=> 'Gelb',
'COLOR_GREEN' 			=> 'Grün',
'COLOR_OLIVE' 			=> 'Olive',
'COLOR_CYAN' 			=> 'Cyan',
'COLOR_BLUE' 			=> 'Blau',
'COLOR_DARK_BLUE' 		=> 'Dunkelblau',
'COLOR_INDIGO' 			=> 'Indigo',
'COLOR_VIOLETT' 		=> 'Violett',
'COLOR_WHITE' 			=> 'Weiss',
'COLOR_BLACK' 			=> 'Schwarz',
'SHADOWCOLOR' 			=> 'Schattenfarbe',
'SHIELDSHADOW' 			=> 'Schildschatten',
'SHIELDSHADOW_ON' 		=> 'Aktivieren',
'SHIELDSHADOW_OFF' 		=> 'Deaktivieren',
'SMILIECHOOSER' 		=> 'Smilieauswahl',
'RANDOM_SMILIE' 		=> 'Zufalls-Smilie',
'DEFAULT_SMILIE' 		=> 'Standard-Smilie',
'CREATE_SMILIE' 		=> 'Erstellen',
'STOP_CREATING' 		=> 'Abbrechen',
'SMILIE_NEXT'			=> 'Möchtest Du noch ein Schild erstellen?',
'SC_ERROR' 				=> 'Hier ist dein Schild - du hast den Text vergessen...',

));

?>