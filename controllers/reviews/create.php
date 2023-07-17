<?php

// require ("Validator.php");

$config = require("config.php");

$db = new Database($config["database"]);

$heading = "create a review";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $err = [];

    // $Validator = new Validator;

    if(strlen(trim($_POST["body"])) == 0){
        $err["body"] = "A body is required";
    }

    if(strlen(trim($_POST["body"])) > 1000){
        $err["body"] = "The body cannot be more than 1,000 characters";
    }

    if(empty($err)){
        $db->query("INSERT INTO reviews(body, user_id) VALUES(:body, :user_id)", [
            "body" => $_POST["body"],
            "user_id" => 1
        ]);
    }   
}

require "views/reviews/create.view.php";