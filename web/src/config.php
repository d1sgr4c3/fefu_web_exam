<?php
$host = getenv('DB_HOST') ?: 'db';
$db   = getenv('DB_NAME') ?: 'lamp_app';
$user = getenv('DB_USER') ?: 'yashnikov';
$pass = getenv('DB_PASS') ?: 'valeriypassword';
session_start();

