<?php

/**
 * This is a part of the Hydrogen framework .
 * @author Laggoune Walid <walidlaggoune159@gmail.com>
 * This class allows you create your own Input/Output commands into the console
 */

namespace Console\Input\Commands;

class ConsoleCommands {

	public function help ($Output,$Input) {

		$Output->write("This is a demo help","yellow",NULL,NULL,true);

	}
}