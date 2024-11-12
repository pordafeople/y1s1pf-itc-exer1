<?php require($_SERVER['DOCUMENT_ROOT'] . '/init.php'); ?>
<?php
$keys = array(
    'custname',
    'address',
    'number',
    'email',
    'password',
);

$data = array();
foreach ($keys as $key) {
    $data[] = $_POST[$key];
}

$pwd = $_POST['password'];
$pwd2 = $_POST['confirmpassword'];

if ($pwd === $pwd2 && csv_push('customers', $data)) {
    redirect('register/success');
} else {
    redirect('register/error');
}
