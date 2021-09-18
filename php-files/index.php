<?php
$data = array(
            'secret' => " 0x6009B7CB249F8C2f6C17b5a10756d589e73Ac0fF",
            'response' => $_POST['h-captcha-response']
        );
$verify = curl_init();
curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
curl_setopt($verify, CURLOPT_POST, true);
curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($verify);
// var_dump($response);
$responseData = json_decode($response);
if($responseData->success) {
   header("Location:php-files/test_guidelines.html");
   exit;
}
else {
   // return error to user; they did not pass
}
?>
