<?php
/**********************************************************************************
* Subs-BBCode-Changelog.php
***********************************************************************************
* This mod is licensed under the 2-clause BSD License, which can be found here:
*	http://opensource.org/licenses/BSD-2-Clause
***********************************************************************************
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
**********************************************************************************/
if (!defined('SMF'))
	die('Hacking attempt...');

function BBCode_Changelog(&$bbc)
{
	global $txt;

	$bbc[] = array(
		'tag' => 'changelog',
		'before' => '<div style="padding: 3px; font-size: 1em;"><div style="text-transform: uppercase; border-bottom: 1px solid #5873B0; margin-bottom: 3px; font-size: 0.8em; font-weight: bold; display: block;"><span onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') {  this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerHTML = \'<b>' . $txt['changelog'] . ': </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>' . $txt["debug_hide"] . '</a>\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerHTML = \'<b>' . $txt['changelog'] . ': </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>' . $txt["debug_show"] . '</a>\'; }" /><b>' . $txt['changelog'] . ': </b><a href="#" onClick="return false;">' . $txt["debug_show"] . '</a></span></div><div class="quotecontent"><div style="display: none;">',
		'after' => '</div></div></div>',
	);
	$bbc[] = array(
		'tag' => 'changelog',
		'type' => 'parsed_equals',
		'before' => '<div style="padding: 3px; font-size: 1em;"><div style="text-transform: uppercase; border-bottom: 1px solid #5873B0; margin-bottom: 3px; font-size: 0.8em; font-weight: bold; display: block;"><span onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') {  this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerHTML = \'<b>' . $txt['changelog'] . ': $1 &#149; </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>' . $txt["debug_hide"] . '</a>\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerHTML = \'<b>' . $txt['changelog'] . ': $1 &#149; </b><a href=\\\'#\\\' onClick=\\\'return false;\\\'>' . $txt["debug_show"] . '</a>\'; }" /><b>' . $txt['changelog'] . ': $1 &#149; </b><a href="#" onClick="return false;">' . $txt["debug_show"] . '</a></span></div><div class="quotecontent"><div style="display: none;">',
		'after' => '</div></div></div>',
	);
}

function BBCode_Changelog_Button(&$buttons)
{
	global $txt;

	$buttons[count($buttons) - 1][] = array(
		'image' => 'changelog',
		'code' => 'changelog',
		'description' => $txt['changelog'],
		'before' => '[changelog]',
		'after' => '[/changelog]',
	);
}

?>