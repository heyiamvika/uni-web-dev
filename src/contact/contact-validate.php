<?php
// I use session for passing variables between modules
session_start();

$name = "";
$nameValid = TRUE;
$email = "";
$emailValid = TRUE;
$title = "";
$titleValid = TRUE;
$comment = "";
$commentValid = TRUE;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate name
    $name_sanitized = filter_var($_POST['user-name'], FILTER_SANITIZE_STRING);
    if (strlen($name_sanitized) > 3 && strlen($name_sanitized) < 25) {
        $name = $name_sanitized;
        $nameValid = TRUE;
    } else {
        $nameValid = FALSE;
    }

    //Validate email 
    $email_sanitized = filter_var($_POST['user-email'], FILTER_SANITIZE_EMAIL);
    if (filter_var($email_sanitized, FILTER_VALIDATE_EMAIL)) {
        $email = $email_sanitized;
        $emailValid = TRUE;
    } else {
        $emailValid = FALSE;
    }

    //Validate title
    $title_sanitized = filter_var($_POST['user-title'], FILTER_SANITIZE_STRING);
    if (strlen($title_sanitized) > 1 && strlen($title_sanitized) < 5) {
        $title = $title_sanitized;
        $titleValid = TRUE;
    } else {
        $titleValid = FALSE;
    }

    //Validate comment
    $comment_sanitized = filter_var($_POST['user-comment'], FILTER_SANITIZE_STRING);
    if (strlen($comment_sanitized) > 10 && strlen($comment_sanitized) < 500) {
        $comment = $comment_sanitized;
        $commentValid = TRUE;
    } else {
        $commentValid = FALSE;
    }

    if ($nameValid && $emailValid && $titleValid && $commentValid) {
        $name = "";
        $email = "";
        $title = "";
        $comment = "";

        $_SESSION['POST'] = $_POST;

        header("Location: ../contact-thanks/contact-thanks.php");
        exit;
    }
}
