<?php

/**
 * This is a part of the Hydrogen framework .
 * @author Laggoune Walid <walidlaggoune159@gmail.com>
 * InputInterface shows you all the functions and methods used in Input class
 */

namespace Console\Input\Interfaces;

interface InputInterface {

	/**
	 * function <getArguments> 
	 * get argument passed to the console app
	 	*	the argument will be like : Console::argument
	 	* 	and pass the argument to execute function
	 * @param [string] argument is the arguments passed to application
	 * @throws Console\Exceptions\ConsoleException
	 */
	public function process($argument);

	/**
	 * function <compileArgument>
	 * used to split the Console keyword from the argument
	 * @param [string] argument
	 * @return command 
	 */
	public function compileArgument($argument);

	/**
	 * function <ifCommandExists>
	 * check if the Command exists in Console\Input\Commands\ConsoleCommands
	 * @param [string] command
	 * @return boolean
	 */
	public function ifCommandExists($command);

	/**
	 * function <execute>
	 * ifArgumentExists then the function will execute the command from Console\Input\Commands\ConsoleCommands
	 * @param 
	 */
	public function execute($function);

	/**
	 * function <ask>
	 * used to ask question in the console to get answers
	 * @param [string] question
	 * @param [Callable] callback
	 * @return [string] trimed answer
	 */
	public function ask($question,$callback);

}