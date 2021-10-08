<?php

session_start();

include_once("conections.php");
include_once("URL.php");

$contacts = [];

$stmt = $conn->prepare("SELECT * FROM contacts");

$stmt->execute();

$contacts = $stmt->fetchAll();
