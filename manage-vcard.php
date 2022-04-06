<?php
require 'vendor/autoload.php';

use JeroenDesloovere\VCard\VCard;

if(isset($_POST['action']) && $_POST['action'] == 'create_vcard') {

	//
	foreach ($_POST as $key => $value) {
		$$key = $value;
	}

	// define vcard
	$vcard = new VCard();

	// define variables
	$firstname  = $name;
	$post       = $post;
	$address_1  = $address_1;
	$address_2  = $address_2;
	$address_3  = $address_3;
	$phone      = $phone;
	$email      = $email;
	$website    = $website;
	$company    = 'LNL';
	$additional = '';
	$prefix = '';
	$suffix = '';

	// add personal data
	$vcard->addName($firstname, $additional, $prefix, $suffix);

	// add work data
	//$vcard->addCompany($company);
	$vcard->addJobtitle($post);
	//$vcard->addRole('Data Protection Officer');
	$vcard->addEmail($email);
	//$vcard->addPhoneNumber(1234121212, 'PREF;WORK');
	$vcard->addPhoneNumber($phone, 'WORK');
	$vcard->addAddress($address_1);
	$vcard->addAddress($address_2);
	$vcard->addAddress($address_3);
	//$vcard->addAddress(null, null, 'street', 'worktown', null, 'workpostcode', 'Belgium');
	//$vcard->addLabel('street, worktown, workpostcode Belgium');
	$vcard->addURL($website);

	$vcard->addPhoto(__DIR__ . '/assets/images/'.$image);

	// return vcard as a string
	//return $vcard->getOutput();

	// return vcard as a download
	return $vcard->download();

	// save vcard on disk
	//$vcard->setSavePath('/path/to/directory');
	$vcard->save();
}
