<?php
// switch_to_spanish.php

require 'config.php';

// Connect to the database
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// 1. Update active language in tbl_appconfig
$sql_update_config = "UPDATE tbl_appconfig SET value='spanish' WHERE setting='language'";
if ($mysqli->query($sql_update_config) === TRUE) {
    echo "Successfully updated active language to 'spanish' in tbl_appconfig.\n";
} else {
    echo "Error updating config: " . $mysqli->error . "\n";
}

// 2. Ensure Spanish exists in tbl_language
$spanish_name = 'Spanish';
$spanish_folder = 'spanish';
$spanish_author = 'Webland';

// Check if exists
$check_sql = "SELECT id FROM tbl_language WHERE folder='spanish'";
$result = $mysqli->query($check_sql);

if ($result && $result->num_rows > 0) {
    echo "Language 'Spanish' already exists in tbl_language.\n";
} else {
    $insert_sql = "INSERT INTO tbl_language (name, folder, author) VALUES ('$spanish_name', '$spanish_folder', '$spanish_author')";
    if ($mysqli->query($insert_sql) === TRUE) {
        echo "Successfully inserted 'Spanish' into tbl_language.\n";
    } else {
        echo "Error inserting language: " . $mysqli->error . "\n";
    }
}

$mysqli->close();

echo "Done. Please refresh your browser.\n";
