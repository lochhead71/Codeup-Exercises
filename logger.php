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

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
