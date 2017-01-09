<?php

/**
 * This is a part of the Hydrogen framework .
 * @author Laggoune Walid <walidlaggoune159@gmail.com>
 * all methodes and functions are explaind on Console/Output/Interfaces/OutputInterface.php
 */

namespace Console\Output\Classes;

use Console\Output\Interfaces\OutputInterface;
use Console\Exceptions\ConsoleException;
use Console\Output\Helpers\ColorGenerator;
use Console\Output\Helpers\ProgressBar;


Class Output implements OutputInterface {

	/**
	 * @var ColorGenerator contain ColorGenerator object
	 */
	public $ColorGenerator;

	/**
	 * @var ProgressBar contain ProgressBar object
	 */
	public $ProgressBar;

	/**
	 * @var text stored the user text 
	 */
	public $text = NULL;

	public function __construct() {

		/**
		 * Load the ColorGenerator Helper
		 * Console\Output\Helpers\ColorGenerator
		 */
		$this->ColorGenerator = new ColorGenerator();

		/**
		 * Load the progressBar Helper
		 * Console\Output\Helpers\ProgressBar
		 */
		$this->ProgressBar = new ProgressBar();

	}

	/**
	 * Description: Console/Output/Interfaces/OutputInterface.php Line:18
	 */
	public function checkRequirement() {

		return (in_array("php", stream_get_wrappers())) ? (fopen("php://STDIN", "r")) ? (fopen("php://STDOUT", "w"))? true : false : false : false;

	}

	/**
	 * Description: Console/Output/Interfaces/OutputInterface.php Line:36
	 */
	public function write(string $text = NULL,string $color = NULL, string $background = NULL, bool $underlined = NULL, bool $newLine = NULL) {

		$this->text = $text;

		if ($color !== NULL) {
			
			$ansiColor = $this->color($color);
			$this->text = "\033[{$ansiColor}m{$text}\033[0m";

		}

		if ($background !==NULL) {
			
			$ansiBackgroundColor = $this->background($background);
			$this->text = "\033[{$ansiBackgroundColor}m{$this->text}\033[0m"; 	

		}

		if ($underlined) {
			
			$this->text = "\e[4m".$this->text."\e[0m";

		}

		if ($newLine) {

			$this->text = $this->text.PHP_EOL;

		}

		if(fwrite(fopen('php://stdout', 'w'), $this->text)) {

			return true;

		}

		return false;
		fclose(fopen('php://stdout', 'w'));

	}

	/**
	 * Description: Console/Output/Interfaces/OutputInterface.php Line:45
	 */
	public function color(string $humanColor) {

		try {
			
			if($this->ColorGenerator->getAnsiCode($humanColor,1) === "notSupported") {

				throw new ConsoleException("Color $humanColor not supported", 0);
				
			}

			return $this->ColorGenerator->getAnsiCode($humanColor,1);

		} catch (ConsoleException $e) {

			$ex = get_class($e);
			$this->write($e->getMessage()." #".$e->getCode()." [$ex]\n","light_red");
			exit();

		}

	}

	/**
	 * Description: Console/Output/Interfaces/OutputInterface.php Line:54
	 */
	public function background(string $humanColor) {

		try {

			if($this->ColorGenerator->getAnsiCode($humanColor,2) === "notSupported") {

				throw new ConsoleException("Background $humanColor not supported", 1);

			}

			return $this->ColorGenerator->getAnsiCode($humanColor,2);
			
		} catch (ConsoleException $e) {

			$ex = get_class($e);
			$this->write($e->getMessage()." #".$e->getCode()." [$ex]\n","light_red");
			exit();
			
		}

	}

	/**
	 * Description: Console/Output/Interfaces/OutputInterface.php Line:65
	 */
	public function writeLine($symbole,int $width = NULL) {
		
		if(is_null($width)) {

			if($this->write(str_repeat($symbole,exec('tput cols')).PHP_EOL)) {

				return true;

			}

		}	

		if($this->write(str_repeat($symbole,$width).PHP_EOL)) {

			return true;

		}

		return false;

	}

	/**
	 * Description: Console/Output/Interfaces/OutputInterface.php Line:75
	 */
	public function progressBar(int $start,int $end) {

		$this->write($this->ProgressBar->progress($start, $end),"light_cyan");

	}


} 