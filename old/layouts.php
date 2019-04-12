<?php

  if (isset($_POST['send'])) {

    $data = [
      'name'  => trim($_POST['name']) ?? false,
      'phone' => trim($_POST['phone']) ?? false,
    ];

    $message = false;

    if (strlen($data['name']) < 2) {
      $message['errs']['name'] = 'Укажите своё имя!';
    }

    if (strlen($data['phone']) != 19) {
      $message['errs']['phone'] = 'Укажите номер в указаном формате!';
    }

    if (!$message && sendDataEmail($data)) {
      // send data
      $message['success'] = 'Отправлено!';
      echo json_encode($message, JSON_UNESCAPED_UNICODE);

    } else {
      echo json_encode($message, JSON_UNESCAPED_UNICODE);
      return false;
    }

  }



  function sendDataEmail($data)
  {
    // от кого
    $fromMail = 'info@team404.club';
    $fromName = 'Team404';

    // Сюда введите Ваш email
    //$emailTo = 'rastegaev1993god@gmail.com';
    $emailTo = 'ostrikov.tri@gmail.com';
    $subject = 'Заявка с сайта ';

    $subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
    $headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
    $headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

    // тело письма
    $body = "Имя: {$data['name']}\nТелефон: {$data['phone']}";
	
    //$mail = true;
    $mail = mail($emailTo, $subject, $body, $headers, $fromMail );
    if($mail){
      return true;
    }
    return false;
  }

