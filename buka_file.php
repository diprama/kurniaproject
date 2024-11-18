<?php

$link = isset($_GET['page']) ? $_GET['page'] : '';
# KONTROL MENU PROGRAM
if ($_GET !='') {
	
	$halaman = '';
	// Jika mendapatkan variabel URL ?page
	switch ($_GET['page']) {
		case 'Home':
			if (!file_exists("home.php")) die("Empty Main Page!");
			include "home.php";
			break;
	
	}
} else {
	// Jika tidak mendapatkan variabel URL : ?page
	if (!file_exists("home.php")) die("Empty Main Page! Under Development");
	include "home.php";
}
