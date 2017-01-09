<?php

/**
 * This is a part of the Hydrogen framework .
 * @author Laggoune Walid <walidlaggoune159@gmail.com>
 * Color generator is a class to generate ANSI colors codes from human colors names 
 */

namespace Console\Output\Helpers;

use Console\Output\Interfaces\ColorGeneratorInterface;

class ColorGenerator implements ColorGeneratorInterface {

	/**
	 * @var [array] colors contain color and ansi code 
	 * You can add a color with the ansi code in the construct function bellow
	 */
	public $colors;

	/**
	 * @var [array] backgrounds contain background and ansi code
	 * You can add a background with the ansi code in the construct function bellow
	 */
	public $backgrounds;


	public function __construct() {

		$this->colors['black'] = '0;30';

		$this->colors['dark_gray'] = '1;30';

		$this->colors['blue'] = '0;34';

		$this->colors['light_blue'] = '1;34';

		$this->colors['green'] = '0;32';

		$this->colors['light_green'] = '1;32';

		$this->colors['cyan'] = '0;36';

		$this->colors['light_cyan'] = '1;36';

		$this->colors['red'] = '0;31';

		$this->colors['light_red'] = '1;31';

		$this->colors['purple'] = '0;35';

		$this->colors['light_purple'] = '1;35';

		$this->colors['brown'] = '0;33';

		$this->colors['yellow'] = '1;33';

		$this->colors['light_gray'] = '0;37';

		$this->colors['white'] = '1;37';

		$this->backgrounds['black'] = '40';

		$this->backgrounds['red'] = '41';

		$this->backgrounds['green'] = '42';
		
		$this->backgrounds['yellow'] = '43';
		
		$this->backgrounds['blue'] = '44';
		
		$this->backgrounds['magenta'] = '45';
		
		$this->backgrounds['cyan'] = '46';
		
		$this->backgrounds['light_gray'] = '47';
		

	}	

	/**
	 * Description: Console/Output/Interfaces/ColorGeneratorInterface.php Line:38
	 */
	public function getAnsiCode(string $humanColor, int $type): string {

		switch ($type) {
			case 1:
					if (array_key_exists($humanColor, $this->colors)) {
					 	return $this->colors[$humanColor];
					}
					return "notSupported"; 	
				break;
			
			case 2:
					if(array_key_exists($humanColor,$this->backgrounds)) {
						return $this->backgrounds[$humanColor];
					}
					return "notSupported";
				break;
		}


	}

} 