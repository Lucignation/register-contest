<?php

    if(isset($_POST['submit'])){

        $name = $_POST['fullName'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $phoneOne = $_POST['phoneOne'];
        $phoneTwo = $_POST['phoneTwo'];
        $DOB = $_POST['DOB'];
        $occupation = $_POST['occupation'];
        $age = $_POST['age'];
        
        $messageContent = "From: ". $name .", \n Email: " . $email. ", \n Location: " . $location . ", \n First Number: ". $phoneOne . ", \n Second Number: ". $phoneTwo . ", \n  Date of Birth: " . $DOB . ", \n Occupation: " .  $occupation . ", \n Above 18: " . $age;
        // $recipient = "theemeraldqueencontest@gmail.com";
        $recipient = "lucignation@gmail.com";
        $subject = "The Emerald Queen Contest Registration";
        $mailheader = "From" . $email. "\r \n";
        if(mail($recipient, $subject, $messageContent, $mailheader)){
            echo "<script>alert('Message Sent!!!')</script>";
            echo "<script>document.location.href='index.html'</script>";
        }else{
            echo "<script>alert('Message failed!!!')</script>";
            echo "<script>document.location.href='register.php'</script>";
        } 

    }

?>