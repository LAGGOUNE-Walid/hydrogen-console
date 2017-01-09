<?php

/**
 * This is a part of the Hydrogen framework .
 * @author Laggoune Walid <walidlaggoune159@gmail.com>
 * InputInterface shows you all the functions and methods used in Input class
 */

namespace Console\Input\Helpers;

class ReadLine {

	public function ask($question,$Output) {

		$Output->write("{$question}:",NULL,NULL,true,false).$Output->write(" ",NULL,NULL,false,false);
		$line = fgets(fopen("php://STDIN","r"));
		return $line;

	}

}