<?php

require "functions.php";

// require "router.php";

//connect to MySQL database

require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);

$id = $_GET["id"];

$query = "select * from `characters` where id = ?";

$posts = $db->query($query, [$id])->fetch();


dd($posts);