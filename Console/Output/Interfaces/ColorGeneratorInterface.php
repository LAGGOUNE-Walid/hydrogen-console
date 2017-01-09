<?php

/**
 * This is a part of the Hydrogen framework .
 * @author Laggoune Walid <walidlaggoune159@gmail.com>
 * ColorGeneratorInterface shows you all the functions and methods used in Console\Output\Helpers\ColorGenerator class
 */

namespace Console\Output\Interfaces;

interface ColorGeneratorInterface {

	/**
	 * function < getAnsiCode >
	 * @param [string] humanColor is the name of the color (black,red ...)
	 * supported colors :
	 	* 	black
		*	dark_gray
		*	blue
		*	light_blue
		*	green
		*	light_green
		*	cyan
		*	light_cyan
		*	red
		*	light_red
		*	purple
		*	light_purple
		*	brown
		*	yellow
		*	light_gray
		*	white
	 * @param [int] type
	 	*	1 for foreground 
	 	* 	2 for background
	 * @return [int]  the ansi code of the color
	 */
	public function getAnsiCode(string $humanColor,int $type);

}