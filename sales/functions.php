<?php

function getRandomCustomer() {
	$customerFirstNames = [
		'PT. Vanita',
		'PT. Nicolasa',
		'PT. Illa',
		'PT. Nereida',
		'PT. Donnette',
		'PT. Melita',
		'PT. Signe',
		'PT. Claretta',
		'PT. Jennell',
		'PT. Robert'
	]; 
	$customerLastNames = [
		'Jessenia',
		'Luciana',
		'Elinore',
		'Elizabet',
		'Carmelo',
		'Kiyoko',
		'Leticia',
		'Wyatt',
		'Imelda',
		'Rupert'
	];
	return $customerFirstNames[rand(1, 100) % count($customerFirstNames)] . ' ' . $customerLastNames[rand(1, 100) % count($customerLastNames)];
}

function getRandomProvince() {
	$province = [
		'ACEH',
		'SUMATERA UTARA',
		'SUMATERA BARAT',
		'RIAU',
		'JAMBI',
		'SUMATERA SELATAN',
		'BENGKULU',
		'LAMPUNG',
		'KEPULAUAN BANGKA BELITUNG',
		'KEPULAUAN RIAU'
	];
	return $province[rand(1, 100) % count($province)];
}

function getRandomKabupaten() {
	$customerFirstNames = [
		'KOTA JAKARTA SELATAN',
		'KOTA JAKARTA TIMUR',
		'KOTA JAKARTA PUSAT',
		'KOTA JAKARTA BARAT',
		'KOTA JAKARTA UTARA',
		'SUMATERA SELATAN',
		'KABUPATEN BOGOR',
		'KABUPATEN SUKABUMI',
		'KABUPATEN CIANJUR',
		'KABUPATEN BANDUNG'
	];
	return $customerFirstNames[rand(1, 100) % count($customerFirstNames)];
}

function getRandomDate($format = 'd F Y') {
	return date($format, mt_rand(1511457239, 1514049238));
}

function getRandomPhone() {
	return "08".rand(1, 9).rand(1, 9).rand(1, 9).rand(1, 9).rand(1, 9).rand(1, 9).rand(1, 9).rand(1, 9);
}

function getRandomAddress() {
	$addressFirst = [
		'Jln. Cempaka',
		'Jln. Melati',
		'Jln. Pahlawan',
		'Jln. Menteng',
		'Jln. Pramuka',
		'Jln. Perjuangan',
		'Jln. Mawar',
		'Jln. Sudirman',
		'Jln. Imam Bonjol',
		'Jln. Salemba',
	];
	$addressLast = [
		'Barat',
		'Selatan',
		'Timur',
		'Utara',
		'Harum',
		'Tengah',
		'Belakang',
		'Merdeka',
		'Maju',
		'Hitam'
	];
	return $addressFirst[rand(1, 100) % count($addressFirst)] . ' ' . $addressLast[rand(1, 100) % count($addressLast)];
}

function getStatusPO(){
	$availableStatuses = [
		'Diajukan',
		'Ditolak',
		'Disetujui Keuangan',
		'Direncanakan untuk diproduksi',
		'Diproduksi',
		'Terjadwal untuk pengiriman',
		'Disetujui QC',
		'Terkirim',
		'Inovice terbit',
		'Terbayar'
	];

	for ($i = 10; $i <= 99; $i++){
		$availableStatuses[$i] = $availableStatuses[rand(1, 100) % count($availableStatuses)];
	}
	return $availableStatuses;
}