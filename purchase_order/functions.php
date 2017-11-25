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

function getRandomDate($format = 'd F Y') {
	return date($format, mt_rand(1511457239, 1514049238));
}

