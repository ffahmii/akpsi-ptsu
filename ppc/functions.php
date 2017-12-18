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

function getKodeBahan($i) {
	$kodeBahan = [
		'BB00001',
		'BB00002',
		'BB00003',
		'BB00004',
	];
	return $kodeBahan[$i];
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

