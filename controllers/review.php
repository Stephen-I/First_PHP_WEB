<?php

$heading = "review";

$config = require("config.php");

$db = new Database($config["database"]);

$review = $db->query("select * from `reviews` where id = :id", ["id" => $_GET["id"]])->fetch();

// dd($review["id"]);

require "views/review.view.php";