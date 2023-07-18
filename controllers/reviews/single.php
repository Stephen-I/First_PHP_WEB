<?php

$heading = "review";

$config = require base_path("config.php");

$db = new Database($config["database"]);

$review = $db->query("select * from `reviews` where id = :id", ["id" => $_GET["id"]])->fetch();

require views("reviews/single.view.php", ["heading" => $heading, "review" => $review]);