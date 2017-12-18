<?php

function getRandomNamaBarang() {
	$namaBarang = [
		'Cat Lapisan Kapal',
		'Cat Dekoratif',
		'Cat Lapisan Pelindung',
		'Cat Industri',
	];
	return $namaBarang[rand(1, 100) % count($namaBarang)];
}

function getNamaBarang($i) {
	$namaBarang = [
		'Cat Lapisan Kapal',
		'Cat Dekoratif',
		'Cat Lapisan Pelindung',
		'Cat Industri',
	];
	return $namaBarang[$i];
}

function getRandomDeskripsi() {
	$deskripsi = [
		'Kualitas A',
		'Kualitas B',
		'Kualitas C',
	];
	return $deskripsi[rand(1, 100) % count($deskripsi)];
}

function getDeskripsi($i) {
	$deskripsi = [
		'Kualitas A',
		'Kualitas B',
		'Kualitas C',
	];
	return $deskripsi[$i];
}

function getRandomNamaBahan() {
	$namaBahan = [
		'Additive',
		'Binder',
		'Pigment',
		'Solvent',
	];
	return $namaBahan[rand(1, 100) % count($namaBahan)];
}

function getNamaBahan($i) {
	$namaBahan = [
		'Additive',
		'Binder',
		'Pigment',
		'Solvent',
	];
	return $namaBahan[$i];
}

function getRandomDate($format = 'd F Y') {
	return date($format, mt_rand(1511457239, 1514049238));
}

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

function getStatusSPP(){
	$availableStatuses = [
		'Direncanakan untuk diproduksi',
		'Mulai Produksi',
		'Terjadwal untuk pengiriman'
	];

	$other = [
		'Direncanakan untuk diproduksi',
	    'Mulai Produksi',
	    'Selesai Produksi',
	    'Disetujui QC',
   	    'Terjadwal untuk pengiriman',
	    'Terkirim',
	    'Inovice terbit',
	    'Terbayar'
	];
	for ($i = 3; $i <= 99; $i++){
		$availableStatuses[$i] = $other[rand(1, 100) % count($other)];
	}
	return $availableStatuses;
}