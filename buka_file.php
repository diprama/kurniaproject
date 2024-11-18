<?php

$link = isset($_GET['page']) ? $_GET['page'] : '';


# KONTROL MENU PROGRAM
if ($link !='') {
	
	$halaman = '';
	// Jika mendapatkan variabel URL ?page
	switch ($_GET['page']) {
		case 'Home':
			if (!file_exists("home.php")) die("Empty Main Page!");
			include "home.php";
			break;

		case 'Interior':
			if (!file_exists("interior.php")) die("Empty Main Page!");
			include "interior.php";
			break;

	     case 'Construction':
			if (!file_exists("construction.php")) die("Empty Main Page!");
			include "construction.php";
			break;

		case 'Furniture':
			if (!file_exists("furniture.php")) die("Empty Main Page!");
			include "furniture.php";
			break;
	
	}
} else {
	// Jika tidak mendapatkan variabel URL : ?page

	if (!file_exists("home.php")) die("Empty Main Page! Under Development");
	include "home.php";
}
