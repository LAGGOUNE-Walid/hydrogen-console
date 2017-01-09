<?php

/**
 * This is a part of the Hydrogen framework .
 * @author Laggoune Walid <walidlaggoune159@gmail.com>
 * all methodes and functions are explaind on Console/Output/Interfaces/InputInterface.php
 */

namespace Console\Input\Classes;

use Console\Input\Interfaces\InputInterface;
use Console\Input\Commands\ConsoleCommands;
use Console\Exceptions\ConsoleException;
use Console\Input\Helpers\ReadLine;
use Console\Output\Classes\Output;

class Input implements InputInterface {

	/**
	 * @var Output contain Output class
	 */
	public $Output;

	/**
	 * @var Readline contain Readline class	
	 */
	public $ReadLine;

	/**
	 * Description: Console/Input/Interfaces/InputInterface.php Line:20
	 */
	public function process($argument) {

		/**
		 * Load the outputClass
		 */
		$this->Output = new Output;

		$command = $this->compileArgument($argument);

		if ($command !== NULL) {
			
			try {

				if (!$this->ifCommandExists($command)) {

					throw new ConsoleException("Command: {$command} not found in ConsoleCommands", 2);

				}

			} catch (ConsoleException $e) {
				
				$ex = get_class($e);
				$this->Output->write($e->getMessage()." #".$e->getCode()." [$ex]\n","light_red");
				exit();

			}

			$this->execute($command);

			return true;

		}

		return false;

	}

	/**
	 * Description: Console/Input/Interfaces/InputInterface.php Line:28
	 */
	public function compileArgument($argument) {

		unset($argument[0]);
		$command =	(!empty($argument)) ? @explode("::",$argument[1])[1] : NULL;
		return $command;

	}

	/**
	 * Description: Console/Input/Interfaces/InputInterface.php Line:35
	 */
	public function ifCommandExists($command) {

		$ConsoleCommands = new ConsoleCommands();
		if (!method_exists($ConsoleCommands,$command)) {
			
			return false;

		}

		return true;

	}

	/**
	 * Description: Console/Input/Interfaces/InputInterface.php Line:41
	 */
	public function execute($command) {

		$ConsoleCommands = new ConsoleCommands();
		return $ConsoleCommands->$command($this->Output,$this);

	}

	/**
	 * Description: Console/Input/Interfaces/InputInterface.php Line:48
	 */
	public function ask($question,$callback) {

		$this->ReadLine = new ReadLine;

		$this->Output = new Output;

		$answer = trim($this->ReadLine->ask($question,$this->Output));

		call_user_func($callback,$answer);

	}

}