<?php

$koneksi = new mysqli("localhost", "root", "", "db_pipit");

if ($koneksi -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}

?> 