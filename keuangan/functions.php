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

function getRandomAddress() {
	$customerAddress = [
		'Dk. Kiaracondong No. 555',
		'Jln. Yoga No. 892',
		'Gg. Bagas Pati No. 595',
		'Ki. Ekonomi No. 763',
		'Kpg. Yoga No. 916',
		'Jln. Baranang Siang Indah No. 103',
		'Dk. Bambon No. 409',
		'Ki. Muwardi No. 418',
		'Ki. Batako No. 136',
		'Ds. Wahidin Sudirohusodo No. 627',
		'Dk. Abdul Muis No. 661',
		'Jln. Muwardi No. 349',
		'Gg. Ki Hajar Dewantara No. 317',
		'Jln. Yos Sudarso No. 634',
		'Kpg. Salatiga No. 852',
		'Ki. Kalimalang No. 84',
		'Dk. Bak Air No. 37',
		'Jr. Ters. Pasir Koja No. 968',
		'Ki. Uluwatu No. 934',
		'Psr. Siliwangi No. 601'
	];
	return $customerAddress[rand(1, 100) % count($customerAddress)];
}

function getRandomReason() {
	$customerReason = [
		'Terlalu banyak piutang.',
		'Telat membayar.',
		'Tingkah laku tidak etis.',
		'Terlalu banyak penyimpangan dalam transaksi-transaksi sebelumnya.',
		'Pemalsuan identitas.',
	];
	return $customerReason[rand(1, 100) % count($customerReason)];
}

function getStatusPO(){
	$availableStatuses = [
		'Diajukan',
		'Ditolak',
		'Disetujui Keuangan'
	];

	for ($i = 3; $i <= 99; $i++){
		$availableStatuses[$i] = $availableStatuses[rand(1, 100) % count($availableStatuses)];
	}
	return $availableStatuses;
}