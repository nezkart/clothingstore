<?php
require_once("php/config.php");
if ((isset($_POST['emailreply']) && $_POST['emailreply'] != '') && (isset($_POST['message']) && $_POST['message'] != '')) {
    //require_once("contact_mail.php");

    $yourEmail = $conn->real_escape_string($_POST['emailreply']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $comments = $conn->real_escape_string($_POST['msg']);
    $sql = "INSERT INTO contact_form_info (email, subject, message) VALUES ('" . $yourEmail . "','" . $subject . "', '" . $comments . "', '" . $comments . "')";
    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        echo "Thank you! We will contact you soon";
    }
} else {
    echo "Please fill Message and Email";
}
