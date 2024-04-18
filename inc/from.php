<?php
// التسجيل في قاعدة البيانات
error_reporting(0);
$FirstName =  $_POST['FirstName'];
$LastName =   $_POST['LastName'];
$email =      $_POST['email'];

$errors = [
    'FirstNameError' => '',
    'LastNameError' => '',
    'emailError' => '',
];

if (isset($_POST['submit'])) {



    // خطأ الإسم الأول
    if(empty($FirstName)){
        $errors['FirstNameError'] = 'يرجى إدخال الإسم الأول';
    }

    // خطأ الإسم الأخير
    if(empty($LastName)){
        $errors['LastNameError'] = 'يرجى إدخال الإسم الأخير';
    }

    // خطأ الإيميل
    if(empty($email)){
        $errors['emailError'] = 'يرجى إدخال البريد الإلكتروني';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'يرجى إدخال بريد صحيح'; 
    }
    
    // تحقق من الأخطاء
    if(!array_filter($errors)){
        $FirstName =  mysqli_real_escape_string($conn , $_POST['FirstName']);
        $LastName =   mysqli_real_escape_string($conn , $_POST['LastName']);
        $email =      mysqli_real_escape_string($conn , $_POST['email']);

        $sql = "INSERT INTO users(FirstName, LastName, email)
            VALUES ('$FirstName', '$LastName', '$email')";

    if(mysqli_query($conn, $sql)){
             header('Location: ' . $_SERVER['PHP_SELF']);
        }else{
             echo 'Error' . mysqli_error($conn);
        }
    }
}