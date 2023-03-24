<?php

function save_message(){
    global $connect;
        $firstName = mysqli_real_escape_string($connect, $_POST['firstname']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $query = "INSERT INTO GuestBookTable (firstname, email) VALUES ('$firstName', '$email')";
        mysqli_query($connect, $query);
}
