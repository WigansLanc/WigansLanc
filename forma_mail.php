<?php

$recepient = "gfrgdygftynba18@gmail.com";
$sitename = "TEST";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = "Имя: $name \nEmail: $email;

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
