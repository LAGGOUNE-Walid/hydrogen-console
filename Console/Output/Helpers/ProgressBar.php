<?php

/**
 * This is a part of the Hydrogen framework .
 * @author Laggoune Walid <walidlaggoune159@gmail.com>
 * ProgressBar is a class generate and write a progress bar in the Console
 */

namespace Console\Output\Helpers;

use Console\Output\Interfaces\ProgressBarInterface;

class ProgressBar implements ProgressBarInterface {

	/**
	 * @var bars int, is how much bars to write it
	 */
	public $bars = 20;

	/**
	 * @var symbole is the progress bar deffault symbole
	 */
	public $symbole = "-";

	/**
	 * @var progressSymbole is the progress advance symbole
	 */
	public $progressSymbole = ">";

	/**
	 * Description: Console/Output/Interfaces/ProgressBarInterface.php Line:19
	 */
	public function progress(int $start, int $end) {

		return "0% [".substr(str_repeat($this->symbole,$this->bars),0,$this->getBars($this->getPercent($start, $end))).$this->progressSymbole.substr(str_repeat($this->symbole,$this->bars),$this->getBars($this->getPercent($start, $end)),strlen(str_repeat($this->symbole,$this->bars)))."] {$this->getPercent($start, $end)}% | {$this->getBars($this->getPercent($start, $end))}/$this->bars \r";

	}

	/**
	 * Description: Console/Output/Interfaces/ProgressBarInterface.php Line:27
	 */
	public function getPercent(int $start, int $end) {

		return ceil($start * 100 / $end);

	}

	/**
	 * Description: Console/Output/Interfaces/ProgressBarInterface.php Line:34
	 */
	public function getBars(int $percent) {

		return ceil($percent * $this->bars / 100);

	}

}