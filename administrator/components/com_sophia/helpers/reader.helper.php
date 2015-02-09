<?php
//----------------------------------------------------------------------
// JNotesMagic
// JNotesMagic by Alex olave - http://joomlamagic.es
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Author: 	Alex olave - http://joomlamagic.es
// Copyright: copyright (C) 2009 - Alex olave.
// License: 	GNU/GPL, http://www.gnu.org/copyleft/gpl.html
// Pack: 	JNotesMagic
// File: 	reader.helper.php
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// JNotesMagic is free software. This version may have been modified pursuant
// to the GNU General Public License, and as distributed it includes or
// is derivative of works licensed under the GNU General Public License or
// other free or open source software licenses.
//----------------------------------------------------------------------

defined('_JEXEC') or die('Restricted access');

class nomHelperReader
{
	function rss_to_array($tag, $array, $url) {
		$doc = new DOMdocument();
		$doc->load($url);
		$rss_array = array();
		$items = array();
		foreach($doc-> getElementsByTagName($tag) AS $node) {
			foreach($array AS $key => $value) {
				$items[$value] = $node->getElementsByTagName($value)->item(0)->nodeValue;
			}
			array_push($rss_array, $items);
		}
		return $rss_array;
	}

	function changes_to_array($url) {
		$doc = new DOMdocument();
		$doc->load($url);
		$i = 0;
		$return = array();
		foreach($doc->getElementsByTagName('version') AS $version) {
			$return[$i]->number = $version->getAttribute('number');
			$return[$i]->date = $version->getAttribute('date');
			$o = 0;
			foreach($version->getElementsByTagName('change') as $change) {
				$return[$i]->change[$o]->type = $change->getAttribute('type');
				$return[$i]->change[$o]->text = $change->nodeValue;
				$o++;
			}
			$i++;
		}
		return $return;
	}

	function getLang() {
		$lang =& JFactory::getLanguage();
		return $lang->getTag();

	}
	function getSites($url) {
		$sites = null;
		$xml = @simplexml_load_file($url);
		if ($xml == '') return false;
		foreach($xml as $site) {
			$name = $site->attributes()->name;
			$url = $site->attributes()->url;
			$lang = $site->attributes()->lang;
			setType($name, "string");
			setType($url, "string");
			setType($lang, "string");
			$sites[$lang]->name = $name;
			$sites[$lang]->url = $url;
		}
		return $sites;
	}

	function getNotices($url) {
		if (nomHelperConfig::getConfig('adminnews', 'all') == 'disable') return false;
		$sites = nomHelperReader::getSites($url);
		if ($sites == false) return false;
		$lang = nomHelperReader::getLang();

		if (isset($sites[$lang]->url)) {
			$rss_url = $sites[$lang]->url;
		} else {
			$rss_url = $sites['en-GB']->url;
		}

		$rss_tags = array(
        'title',
        'link',
        'guid',
        'description',
        'pubDate',
        'category',
		);
		$rss_item_tag = 'item';

		$rssfeed = nomHelperReader::rss_to_array($rss_item_tag, $rss_tags, $rss_url);
		return $rssfeed;
	}

	function getChangeLogs() {
		jimport('joomla.filesystem.file');
		$lang = nomHelperReader::getLang();
		$file = JPATH_ROOT . DS . 'administrator' . DS . 'components' . DS . 'com_sophia' . DS . 'changelogs' . DS . $lang . '.xml';
		if (JFile::exists($file)) {
			$url = JURI::Root() . 'administrator/components/com_sophia/changelogs/'.$lang.'.xml';
		} else {
			$url = JURI::Root() . 'administrator/components/com_sophia/changelogs/en-GB.xml';
		}
		$array = array(
        'number',
        'date',
        'change'
        );
        $changelogs = nomHelperReader::changes_to_array($url);
        return $changelogs;
	}
}
