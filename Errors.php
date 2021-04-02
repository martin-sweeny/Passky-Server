<?php

class Errors{

    public static $errors = array (
        "0" => "Successful",
        "1" => "Username is invalid!",
        "2" => "Password is incorrect!",
        "3" => "Something went wrong while inserting data to database!",
        "4" => "Username is already registered!",
        "5" => "Password must be between 8 and 255 characters long and can't contain spaces!",
        "6" => "Email is invalid!",
        "7" => "Username doesn't exist!",
        "8" => "You don't have any saved password.",
        "9" => "Domain is invalid!",
        "400" => "Action was not provided in POST!",
        "401" => "Action is invalid!",
        "403" => "You didn't provide all required values in POST.",
        "404" => "Can't connect into API.",
        "505" => "Something went wrong while connecting to database!",
        "999" => "You don't have permission to use this endpoint."
    );

    public static function getError(string $error_code) : string{
        return self::$errors[$error_code];
    }

}
?>