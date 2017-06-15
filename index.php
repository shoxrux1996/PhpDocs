<?php
require_once 'vendor/autoload.php';

$source = __DIR__."/helloWorld.docx";/*
$objReader =\PhpOffice\PhpWord\IOFactory::createReader('Word2007');

$phpWord = $objReader->load($source);

foreach ($phpWord->getSections() as $section) {
	$array = $section->getElements();
	print_r($array);

}

*/

$template = new \PhpOffice\PhpWord\TemplateProcessor($source);    

$template->setValue('Name', 'MyVariableValue'); 
$template->saveAs('docs/result.docx');