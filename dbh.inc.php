<?php

$conn = mysqli_connect('localhost','root', '', 'galleryexample');
if (!$conn) {
	die("Connection Failed: ".mysqli_connect_error());
}