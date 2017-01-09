<?php

$start = microtime();
require "../tester/OutputTester.php";

use Console\Output\Classes\Output;

$Output 		= new Output;
$OutputTester 	= new OutputTester;

echo PHP_EOL;
$Output->write("Test name			value",NULL,NULL,false,true);

$Output->write("checkRequirementTester :",NULL,NULL,true);
if(!$OutputTester->checkRequirementTester()) {
	$Output->write("	false","red",NULL,false,true);
}
$Output->write("	true","green",NULL,false,true);

$Output->write("writeTester :",NULL,NULL,true);
if(!$OutputTester->writeTester("text")) {
	$Output->write("		false","red",NULL,false,true);
}
$Output->write("		true","green",NULL,false,true);

$Output->write("writeNullTester :",NULL,NULL,true);
if($OutputTester->writeTester("")) {
	$Output->write("		false","red",NULL,false,true);
}
$Output->write("		true","green",NULL,false,true);

$Output->write("writeWithColorTester :",NULL,NULL,true);
if(!$OutputTester->writeWithColorTester("text","blue")) {
	$Output->write("	false","red",NULL,false,true);
}
$Output->write("	true","green",NULL,false,true);

$Output->write("writeWithBackgroundTester :",NULL,NULL,true);
if(!$OutputTester->writeWithBackgroundTester("text","blue")) {
	$Output->write("	false","red",NULL,false,true);
}
$Output->write("	true","green",NULL,false,true);

$Output->write("writeWithLineTester :",NULL,NULL,true);
if(!$OutputTester->writeWithLineTester("text")) {
	$Output->write("	false","red",NULL,false,true);
}
$Output->write("				true","green",NULL,false,true);
echo PHP_EOL;

$Output->write("writeWithUnderlineTester :",NULL,NULL,true);
if(!$OutputTester->writeWithUnderlineTester("text")) {
	$Output->write("	false","red",NULL,false,true);
}
$Output->write("	true","green",NULL,false,true);

$Output->write("writeLineAutoWidthTester :",NULL,NULL,true);
echo PHP_EOL;

if(!$OutputTester->writeLineAutoWidthTester("*")) {
	$Output->write("	false","red",NULL,false,true);
}
$Output->write("				true","green",NULL,false,true);
echo PHP_EOL;

$Output->write("writeLineManuelWidthTester :",NULL,NULL,true);
if(!$OutputTester->writeLineManuelWidthTester("*",5)) {
	$Output->write("	false","red",NULL,false,true);
}
$Output->write("				true","green",NULL,false,true);
echo PHP_EOL;
$Output->write("progressBarTester :",NULL,NULL,true,true);
for($i=0;$i<=10;$i++) {
	$OutputTester->progressBarTester($i,10);
}	
echo PHP_EOL;
$Output->write("				true","green",NULL,false,true);
$Output->writeLine("-");
echo PHP_EOL;
@$end = microtime() - $start;
$Output->write("Execution time : {$end}s","light_blue",NULL,false,true);