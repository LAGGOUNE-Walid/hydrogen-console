# hydrogen-console
CLI library to work with inputs/outputs from/to the gnu/linux terminal .
# License 
MIT
# Requirements
- php7.
- Input/output streams local.
- exec function activated.
- Gnu/Linux system or mac os (not working on Microsoft Widnows). 

# Install 
`composer require dilawsky/hydrogen-console dev-master`
# DOCS 
[Download the docs](https://drive.google.com/open?id=0B_qWn_IYeBMxLUk2RHZvWUlWdzg)
# Simple example
```php
<?php 

require "vendor/autoload.php";

use Console\Input\Classes\Input as Input;
use Console\Output\Classes\Output as Output;

$Input = new Input;
$Output = new Output;

$Input->process($argv);
$Input->ask("Would you like a tea ?", function($answer) use ($Output) {
	if($answer === "yes") {
		$Output->write("preparing the tea ...","green");
	}
});

?>
```
# Contact
`walidlaggoune159@gmail.com`
