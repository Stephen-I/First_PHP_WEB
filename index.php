<?php

require "functions.php";

// require "router.php";

//connect to MySQL database

require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);

$posts = $db->query("select * from `characters`")->fetchAll();


foreach ($posts as $post) {
   echo "<li>" . $post["full_name"] . "</li>";
}