<?php

use core\Database;

$heading = "Give us your opinion";

$config = require base_path("config.php");

$db = new Database($config["database"]);

$reviews = $db->query("select * from `reviews`")->fetchAll();

require views("reviews/multiple.view.php", ["heading" => $heading, "reviews" => $reviews]);