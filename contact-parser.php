<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts

	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
	fclose($handle);

	$contactArray = explode("\n", $contents);
	foreach ($contactArray as $string) {
		$entry = [];
		$info = explode("|", $string);
		$contact = $info[0];
		$number = $info[1];
		$phnNum1 = substr($number, 0, 3);
		$phnNum2 = substr($number, 3, 3);
		$phnNum3 = substr($number, 6);
		$number = $phnNum1 . "-" . $phnNum2 . "-" . $phnNum3;
		$entry["name"] = $contact;
		$entry["phone"] = $number;
		array_push($contacts, $entry);
	}

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
