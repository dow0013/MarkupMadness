<?php 
// Set your CSV feed
$csvData = file_get_contents('http://docs.google.com/spreadsheet/pub?key=0An8ATSOHEfjFdGk5WVB3UW1zVU1kSkVUeVNrX3pDdUE&output=csv');


$rows = str_getcsv($csvData, "\n");  
 
foreach($rows as &$row) $row = str_getcsv($row, ",");



?>