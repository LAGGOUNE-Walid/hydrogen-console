<?php

/**
 * This is a part of the Hydrogen framework .
 * @author Laggoune Walid <walidlaggoune159@gmail.com>
 * ProgressBarInterface shows you all the functions and methods used in Console\Output\Helpers\ProgressBar.
 */

namespace Console\Output\Interfaces;

interface ProgressBarInterface {

	/**
	 * function <progress>
	 * @param [int] start is the progress start unit
	 * @param [int] end is the progress end unit
	 * @return progress bar in the screen
	 */
	public function progress(int $start,int $end);

	/**
	 * function <getPercent>
	 * @param [int] start is the progress start unit
	 * @param [int] end is the progress end unit
	 * @return [int] percent of the progress
	 */
	public function getPercent(int $start,int $end);

	/**
	 * function <getBars>
	 * @param [int] percent
	 * @return how much bars related to percentage
	 */
	public function getBars(int $percent);

}