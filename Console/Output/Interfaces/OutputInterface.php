<?php

/**
 * This is a part of the Hydrogen framework .
 * @author Laggoune Walid <walidlaggoune159@gmail.com>
 * OutputInterface shows you all the functions and methods used in Console\Output\Classes\Output .
 */

namespace Console\Output\Interfaces;

interface OutputInterface {

	/**
	 * function < checkRequirement >
	 * Check if the php stream exists and if is local .
	 * @return boolean
	*/
	public function checkRequirement() ;

	/**
	 * function < write >
	 * write text to the console . 
	 * @param [string] text is the text to write it . 
	 * @param [string] color is the color of the text .
	 * @param [string] background is the text background color .
	 * @param [boolean] new line 
	 	*	true to write new line .
	 	*	false to don't write new line .
	 * @param [boolean] underlined
	 	*	true to underline the text .
	 	*	false to don't underline the text .
	 * @return boolean
	 	*	true of there is a text outputed to the console
	 	*	false of there is not a text outputed to the console
	 */
	public function write(string $text = NULL,string $color = NULL, string $background = NULL, bool $newLine = NULL, bool $underlined = NULL);

	/**
	 * function < color >
	 * get the ANSI color according to the human color name
	 * @param [string] humanColor is the color name (back,red ...)
	 * @return [int] ANSI code of the color
	 * @throws Output\Exceptions\ConsoleException 
	 */
	public function color(string $humanColor);

	/**
	 * function < background >
	 * get the ANSI color according to the human color name
	 * @param [string] humanColor is the color name (back,red ...)
	 * @return [int] ANSI code of the color
	 * @throws Output\Exceptions\ConsoleException 
	 */
	public function background(string $humanColor);

	/**
	 * function < WriteLine >
	 * write a borderLine into the console 
	 * @param [string] symbole is the line symbole (+,-,=,* ...)
	 * @param [int] width is repetition of symbole . by default is the full size of termianl works only in GNU/LINUX systems
	 * @return boolean
	 	*	true of the line is outputed
	 	*	false of the line is not outputed
	 */
	public function writeLine($symbole, int $width = NULL);


	/**
	 * function < progressBar >
	 * using Console\Output\Helpers\ProgressBar class to write and update a progress bar in the termianl
	 * @param [int] start is the unit that the progress bar will start from it .
	 * @param [int] end is the unit where the progress will stop
	 * @return progressBar outputed in the console
	 */
	public function progressBar(int $start,int $end);

} 