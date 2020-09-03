<?php
if ($_POST) {
    if (!empty($_POST['name'] && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['profile']))) {
        $name = trim(htmlspecialchars($_POST['name']));
        $email = trim(htmlspecialchars($_POST['email']));
        $phone = trim(htmlspecialchars($_POST['phone']));
        $profile = trim(htmlspecialchars($_POST['profile']));
        $message = trim(htmlspecialchars($_POST['message']));
        require_once("DB.php");
        $contact = R::dispense('contacts');
        $contact->name = $name;
        $contact->email = $email;
        $contact->phone = $phone;
        $contact->profile = $profile;
        $contact->message = $message;
        R::store($contact);
        header('location: ../index.php?msg=alert("Заявка успешно отправлена!");');
    } else {
        echo "заполнены не все поля";
    }
//
}
