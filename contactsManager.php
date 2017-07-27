<?php
//function that will make the machine work
function viewContacts($filename){
	//newcontacts can be added to this array
	$contacts = array();
	$handle = fopen($filename, 'r');
	$contactString = fread($handle, filesize($filename));
	$contactsArray = explode("\n", $contactString);
	
	print_r($contactsArray);

	// foreach ($contactsArray as $contact) 
	// {	
	// 	$infoArray = explode("|", $contact);
	// 	$parsedContacts =[];
	// 	$parsedContacts['name'] = $infoArray[0];
	// 	$parsedContacts['number'] = $infoArray[1];
	// 	array_push($contacts, $parsedContacts);
	// }
//return $contacts;
}

//basic beginning template

//user inputs a number


// //makes the entire menu work
function menu(){


	print_r("-------------CONTACTS-------------" . PHP_EOL . "    Name        |   Phone Number  " . PHP_EOL . "----------------------------------" . PHP_EOL);
	viewContacts("contacts.txt");
	print_r(PHP_EOL . PHP_EOL);
	print_r("1. View Contacts" . PHP_EOL . "2. Add Contact" . PHP_EOL . "3. Search Contact By Name" . PHP_EOL . "4. Delete Contact" . PHP_EOL . "5. Exit" . PHP_EOL);

	fwrite(STDOUT, 'Please enter a # to select an action' . PHP_EOL);
	$input = trim(fgets(STDIN));

	if ($input == 1) {
		viewContacts('contacts.txt');
	}
		elseif ($input == 2) {
		addContact();
		}
		elseif ($input == 3) {
			searchContacts();
		}
		elseif ($input == 4) {
			deleteContact();

		}
		elseif ($input == 5){
			exit;
		}
		else {
			echo "Please choose a valid menu option" . PHP_EOL;
		}

var_dump($input);
fclose($handle);
}
menu();


function addContact(){

	$newContact = [];

	fwrite(STDOUT, 'Please enter new name' . PHP_EOL);
	$name = trim(fgets(STDIN));
	

	fwrite(STDOUT, 'Please enter new phone number' . PHP_EOL);
	$number = trim(fgets(STDIN));

	// $newContact = [
	// 	$newContact['name'] = $name,
	// 	$newContact['number'] = $number
	// ];

	array_push($contactString,$newContact);
	fwrite($handle, $contactString);

//return $contactString;
}

function searchContacts(){
	fwrite(STDOUT, 'Please enter a contact name to View' . PHP_EOL);
	$searchName = trim(fgets(STDIN));
	$nameFound = (array_search('searchName', $contractString));
 	print_r(array_search('searchName', $contactString));
	
}
//function deleteContact(){
// 	if ($input ==4){
//		echo "You have deleted $contact" . PHP_EOL;		
// 	}
// }
// function exit(){
// 	if ($input ==5){
// 		exit;
// 	}
// }







