<?php
//function that will make the machine work
function viewContacts($filename){
	//newcontacts can be added to this array
	// $contacts = array();

	$handle = fopen($filename, 'r');
	$contactString = fread($handle, filesize($filename));
	$contactsArray = explode("\n", $contactString);
	print_r($contactString);
}

//basic beginning template
print_r("-------------CONTACTS-------------" . PHP_EOL . "    Name        |   Phone Number  " . PHP_EOL . "----------------------------------" . PHP_EOL);
viewContacts("contacts.txt");
print_r(PHP_EOL . PHP_EOL);
print_r("1. View Contacts" . PHP_EOL . "2. Add Contact" . PHP_EOL . "3. Search Contact By Name" . PHP_EOL . "4. Delete Contact" . PHP_EOL . "5. Exit" . PHP_EOL);

//user inputs a number
fwrite(STDOUT, 'Please enter a # to select an action');
$input = fgets(STDIN);

// //makes the entire menu work
// function menu(){

// }

function addContact(){
	// if ($input ==2){
	fwrite(STDOUT, 'Please enter name and phone number of person you would like to add');
	$inputAddContact = fgets(STDIN);
	$inputAddContact = 
	array_push();
	}
}
// function searchContacts(){
// 	if ($input ==3){

// 	}
// }
// function deleteContact(){
// 	if ($input ==4){

// 	}
// }
// function exit(){
// 	if ($input ==5){
// 		exit;
// 	}
// }








