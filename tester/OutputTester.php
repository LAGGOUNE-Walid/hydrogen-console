<?php
/**
 * This is a part of the Hydrogen framework .
 * @author Laggoune Walid <walidlaggoune159@gmail.com>
 * OutputTester designed to to test Console\Output\Classes\Output class
 */

require "../vendor/autoload.php";

use Console\Output\Classes\Output;

class OutputTester {

	/**
	 * @var Output contain the Output class 
	 */
	public $Output;

	public function __construct() {

		/**
		 * Load the Output class to the Output var
		 */
		$this->Output = new Output;

	}

	/**
	 * function <checkRequirementTester>
	 * Test the checkRequirement function
	 * @return boolean
	 */
	public function checkRequirementTester() {

		return $this->Output->checkRequirement();

	}

	/**
	 * function <writeTester>
	 * Test the write function
	 * @return boolean
	 */
	public function writeTester($text) {

		return $this->Output->write($text);

	}

	/**
	 * function <writeNullTester>
	 * Test the write function with null data
	 * @return boolean
	 */
	public function writeNullTester() {

		return $this->Output->write("");

	}

	/**
	 * function <writeWithColorTester>
	 * Test the write function with color
	 * @return boolean
	 */
	public function writeWithColorTester($text,$color) {

		return $this->Output->write($text,$color);

	}


	/**
	 * function <writeWithBackgroundTester>
	 * Test the write function with background
	 * @return boolean
	 */
	public function writeWithBackgroundTester($text, $background) {

		return $this->Output->write($text, NULL, $background);

	}

	/**
	 * function <writeWithNotSupportedColorTester>
	 * Test the write function with not supported color
	 * @return boolean
	 */
	public function writeWithNotSupportedColorTester($text, $color) {

		return $this->Output->write($text, $color);

	}

	/**
	 * function <writeWithLineTester>
	 * Test the write function with new line
	 * @return boolean
	 */
	public function writeWithLineTester($text) {

		return $this->Output->write($text,NULL,NULL,false,true);

	}

/**
	 * function <writeWithUnderlineTester>
	 * Test the write function with underline
	 * @return boolean
	 */
	public function writeWithUnderlineTester($text) {

		return $this->Output->write($text,NULL,NULL,true);

	}

	/**
	 * function <writeLineAutoWidthTester>
	 * Test the writeLine function with auto detected widht
	 * @return boolean
	 */
	public function writeLineAutoWidthTester($symbole) {

		return $this->Output->writeLine($symbole);

	}

	/**
	 * function <writeLineManuelWidthTester>
	 * Test the writeLine function with manuel width
	 * @return boolean
	 */
	public function writeLineManuelWidthTester($symbole, $width) {

		return $this->Output->writeLine($symbole, $width);

	}

	/**
	 * function <progressBarTester>
	 * Test the progressBar function
	 * @return boolean
	 */
	public function progressBarTester($start,$end) {

		return $this->Output->progressBar($start,$end);

	}

}