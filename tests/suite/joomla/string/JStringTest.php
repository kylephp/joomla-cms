<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Utilities
 *
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

require_once JPATH_PLATFORM . '/joomla/string/string.php';
require_once 'TestHelpers/JString-helper-dataset.php';

/**
 * Test class for JString.
 * Generated by PHPUnit on 2009-10-26 at 22:29:34.
 */
class JStringTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var    JString
	 * @since  11.2
	 */
	protected $object;

	/**
	 * @return  array
	 *
	 * @since   11.3
	 */
	public function getSplitCamelCaseData()
	{
		return JStringTest_DataSet::$splitCamelCase;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getIncrementData()
	{
		return JStringTest_DataSet::$increment;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrposData()
	{
		return JStringTest_DataSet::$strposTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrrposData()
	{
		return JStringTest_DataSet::$strrposTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getSubstrData()
	{
		return JStringTest_DataSet::$substrTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrtolowerData()
	{
		return JStringTest_DataSet::$strtolowerTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrtoupperData()
	{
		return JStringTest_DataSet::$strtoupperTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrlenData()
	{
		return JStringTest_DataSet::$strlenTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStr_ireplaceData()
	{
		return JStringTest_DataSet::$str_ireplaceTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStr_splitData()
	{
		return JStringTest_DataSet::$str_splitTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrcasecmpData()
	{
		return JStringTest_DataSet::$strcasecmpTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrcmpData()
	{
		return JStringTest_DataSet::$strcmpTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrcspnData()
	{
		return JStringTest_DataSet::$strcspnTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStristrData()
	{
		return JStringTest_DataSet::$stristrTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrrevData()
	{
		return JStringTest_DataSet::$strrevTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrspnData()
	{
		return JStringTest_DataSet::$strspnTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getSubstr_replaceData()
	{
		return JStringTest_DataSet::$substr_replaceTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getLtrimData()
	{
		return JStringTest_DataSet::$ltrimTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getRtrimData()
	{
		return JStringTest_DataSet::$rtrimTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getTrimData()
	{
		return JStringTest_DataSet::$trimTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getUcfirstData()
	{
		return JStringTest_DataSet::$ucfirstTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getUcwordsData()
	{
		return JStringTest_DataSet::$ucwordsTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getTranscodeData()
	{
		return JStringTest_DataSet::$transcodeTests;
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getValidData()
	{
		return JStringTest_DataSet::$validTests;
	}

	/**
	 * @return  void
	 *
	 * @dataProvider  getSplitCamelCaseData
	 * @since   11.3
	 */
	public function testSplitCamelCase($string, $expected)
	{
		$this->assertThat(
			JString::splitCamelCase($string),
			$this->equalTo($expected)
		);
	}

	/**
	 * @return  void
	 *
	 * @dataProvider  getIncrementData
	 * @since   11.2
	 */
	public function testIncrement($string, $style, $number, $expected)
	{
		$this->assertThat(
			JString::increment($string, $style, $number),
			$this->equalTo($expected)
		);
	}

	/**
	 * @return  void
	 *
	 * @dataProvider  getStrposData
	 * @since   11.2
	 */
	public function testStrpos($haystack, $needle, $offset = 0, $expect)
	{
		$actual = JString::strpos($haystack, $needle, $offset);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getStrrposData
	 * @since   11.2
	 */
	public function testStrrpos($haystack, $needle, $offset = 0, $expect)
	{
		$actual = JString::strrpos($haystack, $needle, $offset);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getSubstrData
	 * @since   11.2
	 */
	public function testSubstr($string, $start, $length = false, $expect)
	{
		$actual = JString::substr($string, $start, $length);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getStrtolowerData
	 * @since   11.2
	 */
	public function testStrtolower($string, $expect)
	{
		$actual = JString::strtolower($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getStrtoupperData
	 * @since   11.2
	 */
	public function testStrtoupper($string, $expect)
	{
		$actual = JString::strtoupper($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getStrlenData
	 * @since   11.2
	 */
	public function testStrlen($string, $expect)
	{
		$actual = JString::strlen($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getStr_ireplaceData
	 * @since   11.2
	 */
	public function testStr_ireplace($search, $replace, $subject, $count, $expect)
	{
		$actual = JString::str_ireplace($search, $replace, $subject, $count);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getStr_splitData
	 * @since   11.2
	 */
	public function testStr_split($string, $split_length, $expect)
	{
		$actual = JString::str_split($string, $split_length);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getStrcasecmpData
	 * @since   11.2
	 */
	public function testStrcasecmp($string1, $string2, $locale, $expect)
	{
		if (substr(php_uname(), 0, 6) == 'Darwin' && $locale != false)
		{
			$this->markTestSkipped('Darwin bug prevents foreign conversion from working properly');
		}
		else
		{
			$actual = JString::strcasecmp($string1, $string2, $locale);
			if ($actual != 0)
			{
				$actual = $actual / abs($actual);
			}
			$this->assertEquals($expect, $actual);
		}
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getStrcmpData
	 * @since   11.2
	 */
	public function testStrcmp($string1, $string2, $locale, $expect)
	{
		if (substr(php_uname(), 0, 6) == 'Darwin' && $locale != false)
		{
			$this->markTestSkipped('Darwin bug prevents foreign conversion from working properly');
		}
		else
		{
			$actual = JString::strcmp($string1, $string2, $locale);
			if ($actual != 0)
			{
				$actual = $actual / abs($actual);
			}
			$this->assertEquals($expect, $actual);
		}
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getStrcspnData
	 * @since   11.2
	 */
	public function testStrcspn($haystack, $needles, $start, $len, $expect)
	{
		$actual = JString::strcspn($haystack, $needles, $start, $len);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getStristrData
	 * @since   11.2
	 */
	public function testStristr($haystack, $needle, $expect)
	{
		$actual = JString::stristr($haystack, $needle);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getStrrevData
	 * @since   11.2
	 */
	public function testStrrev($string, $expect)
	{
		$actual = JString::strrev($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getStrspnData
	 * @since   11.2
	 */
	public function testStrspn($subject, $mask, $start, $length, $expect)
	{
		$actual = JString::strspn($subject, $mask, $start, $length);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getSubstr_replaceData
	 * @since   11.2
	 */
	public function testSubstr_replace($string, $replacement, $start, $length, $expect)
	{
		$actual = JString::substr_replace($string, $replacement, $start, $length);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getLtrimData
	 * @since   11.2
	 */
	public function testLtrim($string, $charlist, $expect)
	{
		if ($charlist === null)
		{
			$actual = JString::ltrim($string);
		}
		else
		{
			$actual = JString::ltrim($string, $charlist);
		}
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getRtrimData
	 * @since   11.2
	 */
	public function testRtrim($string, $charlist, $expect)
	{
		if ($charlist === null)
		{
			$actual = JString::rtrim($string);
		}
		else
		{
			$actual = JString::rtrim($string, $charlist);
		}
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getTrimData
	 * @since   11.2
	 */
	public function testTrim($string, $charlist, $expect)
	{
		if ($charlist === null)
		{
			$actual = JString::trim($string);
		}
		else
		{
			$actual = JString::trim($string, $charlist);
		}
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getUcfirstData
	 * @since   11.2
	 */
	public function testUcfirst($string, $delimiter, $newDelimiter, $expect)
	{
		$actual = JString::ucfirst($string, $delimiter, $newDelimiter);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getUcwordsData
	 * @since   11.2
	 */
	public function testUcwords($string, $expect)
	{
		$actual = JString::ucwords($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getTranscodeData
	 * @since   11.2
	 */
	public function testTranscode($source, $from_encoding, $to_encoding, $expect)
	{
		$actual = JString::transcode($source, $from_encoding, $to_encoding);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getValidData
	 * @since   11.2
	 */
	public function testValid($string, $expect)
	{
		$actual = JString::valid($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @dataProvider  getValidData
	 * @since   11.2
	 */
	public function testCompliant($string, $expect)
	{
		$actual = JString::compliant($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function testParse_Url()
	{
		$url = 'http://localhost/joomla_development/j16_trunk/administrator/index.php?option=com_contact&view=contact&layout=edit&id=5';
		$expected = parse_url($url);
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');

		$url = 'http://joomla.org/mytestpath/È';
		$expected = parse_url($url);
		// Fix up path for UTF-8 characters
		$expected['path'] = '/mytestpath/È';
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');

		// Test special characters in URL
		$url = 'http://mydomain.com/!*\'();:@&=+$,/?%#[]';
		$expected = parse_url($url);
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');
	}
}
