<?php

use Bitrix\Main\EventManager;
use Bitrix\Main\Loader;
use Controllers\FormSubmitController;
use Entity\BaseEntity;
use Entity\Contacts;
use Entity\DTO\FormSubmitDTO;
use Entity\Redirects;
use Entity\Socials;
use Entity\Form;
use Entity\FormSubmits;
use EventHandlers\PortfolioEventHandler;
use Helpers\IblockHelper;
use Helpers\TemplateHelper;

Loader::registerAutoLoadClasses(
    null,
	[
        BaseEntity::class => '/local/php_interface/lib/Entity/BaseEntity.php',
        Contacts::class => '/local/php_interface/lib/Entity/Contacts.php',
        Socials::class => '/local/php_interface/lib/Entity/Socials.php',
        Form::class => '/local/php_interface/lib/Entity/Form.php',
        FormSubmits::class => '/local/php_interface/lib/Entity/FormSubmits.php',
        Redirects::class => '/local/php_interface/lib/Entity/Redirects.php',
        FormSubmitController::class => '/local/php_interface/lib/Controllers/FormSubmitController.php',
        FormSubmitDTO::class => '/local/php_interface/lib/Entity/DTO/FormSubmitDTO.php',
        TemplateHelper::class => '/local/php_interface/lib/Helpers/TemplateHelper.php',
        IblockHelper::class => '/local/php_interface/lib/Helpers/IblockHelper.php',
        PortfolioEventHandler::class => '/local/php_interface/lib/EventHandlers/PortfolioEventHandler.php',
    ]
);

EventManager::getInstance()->addEventHandler(
    'iblock',
    'OnAfterIBlockElementAdd',
    [PortfolioEventHandler::class, 'portfolioFiltersAfterSaved']
);

EventManager::getInstance()->addEventHandler(
    'iblock',
    'OnAfterIBlockElementUpdate',
    [PortfolioEventHandler::class, 'portfolioFiltersAfterSaved']
);

EventManager::getInstance()->addEventHandler(
    'main',
    'OnPageStart',
    [Redirects::class, 'handleRequests']
);

//require_once $_SERVER['DOCUMENT_ROOT'].'/mailer/PHPMailer/PHPMailerAutoload.php';
/*
Отправляем почту через SMTP-сервер .
@see CEvent::HandleEvent()
@see bxmail()
@param string $to Адрес получателя.
@param string $subject Тема.
@param string $message Текст сообщения.
@param string $additionalHeaders
Дополнительные заголовки передаются Битриксом почти всегда ("FROM" передаётся здесь).
@return bool
*/
function custom_mail($to, $subject, $message, $additionalHeaders = '', $additional_parameters)
{ $mail = new PHPMailer;
    //логирование ошибок (0 - не выводить)
    $mail->SMTPDebug = 0;
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.timeweb.ru'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'no-reply@cg59457.tmweb.ru'; // SMTP username
    $mail->Password = 'AyineX9T'; // SMTP password
    // $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25; // port to connect to

    $d_message='';
    preg_match('/From: (.+)\n/i', $additionalHeaders, $matches);
    list(, $from) = $matches;
    $d_message.='$from - '.$from.' +++ '; $d_message.='$to - '.$to.' +++ ';
    $d_message.='$subject - '.$subject.' +++ ';
    $d_message.='$message - '.$message.' +++ ';
    $mail->setFrom('no-reply@cg59457.tmweb.ru');
    $mail->addAddress($to, ''); // Add a recipient
    // $mail->addReplyTo($from, '');
    // $mail->addCC('mail2@mail.ru');
    // $mail->AddBCC('mail3@xmail.ru');
    // $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
    // $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $message;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // log_message
    $addLOG = 'To: '.$to.PHP_EOL. 'Subject: '.$subject.PHP_EOL. 'Message: '.$message.PHP_EOL. 'Headers: '.$additional_headers.PHP_EOL. 'Params: '.$additional_parameters.PHP_EOL;
    file_put_contents($_SERVER['DOCUMENT_ROOT'].'/mailer/emaillogad.txt', $addLOG);
    if(!$mail->send()) {
        // log error
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/mailer/emaillog.txt', 'Mailer Error: ' . $d_message.' '.$mail->ErrorInfo);
        echo $mail->ErrorInfo;
        return false;
    }

    return true;
}

function sendTelegram($message): bool
{
    $url = 'https://api.telegram.org/bot8522945959:AAFx7w7UUseLb5Bt6qO99J8QHYvtvjVNWgg/sendMessage';
    $data = [
        'chat_id' => '-5282918496',
        'parse_mode' => 'html',
        'text' => $message
    ];

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url . '?' . http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    $error_text = curl_error($curl);
    if ($response === false) {
        file_put_contents(
            __DIR__ . '/mess.log',
            print_r([
                'error' => $error_text,
            ], 1)
        );
        curl_close($curl);
        return false;
    }

    curl_close($curl);
    return true;
}

// require_once $_SERVER['DOCUMENT_ROOT'].'/mailer/PHPMailer/PHPMailerAutoload.php';
// function custom_mail($to, $subject, $message, $additional_headers, $additional_parameters){
//   	//Получаем тему письма
// 	$elements = imap_mime_header_decode($subject);
// 	$title =  '';
// 	for ($i=0; $i<count($elements); $i++) {
// 		$title .= $elements[$i]->text;
// 	}

//     // require 'PHPMailer/src/Exception.php';
//     // require 'PHPMailer/src/PHPMailer.php';
//     // require 'PHPMailer/src/SMTP.php';
// 	$mail = new PHPMailer;
// 	$mail->SMTPDebug = true;
// 	$mail->CharSet  = 'UTF-8';
// 	$mail->isSMTP();
// 	$mail->setLanguage('ru');
// 	$mail->Host = 'smtp.timeweb.ru';  // Specify main and backup SMTP servers
// 	$mail->SMTPAuth = true; // Enable SMTP authentication
// 	$mail->Username = 'no-reply@cg59457.tmweb.ru'; // SMTP username
// 	$mail->Password = 'AyineX9T'; // SMTP password
// 	$mail->Port = 25;

// 	$mail->From = 'no-reply@cg59457.tmweb.ru';
// 	$mail->isHTML(true);
// 	$mail->Subject = $text;
// 	$mail->Body    = $message;
// 	$mail->addAddress($to, '');
// 	if(!$mail->send()) {
//         file_put_contents($_SERVER['DOCUMENT_ROOT'].'/emaillog.txt', 'Mailer Error: ' . $d_message.' '.$mail->ErrorInfo);
// 		echo $mail->ErrorInfo;
// 	}
// 	$mail->clearAddresses();
// 	$mail->ClearCustomHeaders();
// }