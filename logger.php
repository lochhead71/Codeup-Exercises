<?php

function logMessage($logLevel, $message)
{
    // todo - complete this function
$filename = "log-" . date('Y-m-d') . ".log";
$handle = fopen($filename, 'a');
$log = date('Y-m-d G:i:s') . "[" . $logLevel . "] " . $message . PHP_EOL;
fwrite($handle, $log);
fclose($handle);
}

function infoMessage($message) {
	logMessage("INFO", $message);
}

function errorMessage($message) {
	logMessage("ERROR", $message);
}

infoMessage("This is an info message.");

errorMessage("This is an error message.");
