<?php

function getRandomCustomer() {
	$customerFirstNames = [
		'Vanita',
		'Nicolasa',
		'Illa',
		'Nereida',
		'Donnette',
		'Melita',
		'Signe',
		'Claretta',
		'Jennell',
		'Robert'
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