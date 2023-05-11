<?php

If(isset($_POST['submit'])) {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

       

        $name = $_POST['name'];

        $email = $_POST['email'];

                  $message = $_POST['message'];

       

        if($name && $email && $message) {

            header('location: thankyou.html');

           //or below type

        }

    }

}

?>