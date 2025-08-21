<?php

declare(strict_types=1);

// Database configuration - set these for your hosting environment
const DB_HOST = 'localhost';
const DB_NAME = 'race_finance';
const DB_USER = 'root';
const DB_PASS = '';
const DB_CHARSET = 'utf8mb4';

// App configuration
const APP_NAME = 'Race Finance';
const BASE_URL = '/race-finance/public'; // Adjust if deployed at domain root (e.g., '/')
const UPLOAD_DIR = __DIR__ . '/../public/uploads';
const PAYMENT_UPLOAD_DIR = __DIR__ . '/../public/uploads/payments';
const PROFILE_UPLOAD_DIR = __DIR__ . '/../public/uploads/profiles';

// Commission settings (in Bangladeshi Taka)
const COMMISSION_YES_SENIOR = 300; // Trade license YES
const COMMISSION_YES_RSM = 15;
const COMMISSION_YES_DSM = 15;
const COMMISSION_YES_INCHARGE = 20;

const COMMISSION_NO_SENIOR = 220; // Trade license NO
const COMMISSION_NO_RSM = 10;
const COMMISSION_NO_DSM = 10;
const COMMISSION_NO_INCHARGE = 10;

// Total bill amounts for reporting
const TOTAL_BILL_YES = 350;
const TOTAL_BILL_NO = 250;

function db(): PDO {
	static $pdo = null;
	if ($pdo === null) {
		$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
		$options = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
		];
		$pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
	}
	return $pdo;
}

function ensure_upload_dirs(): void {
	$dirs = [UPLOAD_DIR, PAYMENT_UPLOAD_DIR, PROFILE_UPLOAD_DIR];
	foreach ($dirs as $dir) {
		if (!is_dir($dir)) {
			mkdir($dir, 0777, true);
		}
	}
}

session_start();
ensure_upload_dirs();