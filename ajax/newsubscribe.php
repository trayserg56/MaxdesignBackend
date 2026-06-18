<?
if ($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') die();
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
if (!empty($_POST['website'])) {
    http_response_code(403);
    die('Spam');
}
function checkGoogleCaptcha() {
			if ($_REQUEST['recaptcha']) {
				$httpClient = new \Bitrix\Main\Web\HttpClient;
			        	$result = $httpClient->post(
			            	'https://www.google.com/recaptcha/api/siteverify',
			            	array(
			                	'secret' => '6Lf3GOgUAAAAAHpO0aLInCzzwCX8ig88G0lKN-er',
			                	'response' => $_REQUEST['recaptcha'],
			                	'remoteip' => $_SERVER['HTTP_X_REAL_IP']
			         	)
				);
				$result = json_decode($result, true);

				if ($result['success'] !== true) {
					return false;
				}
				return true;
			} else {
				return false;
			}
	}

//	if(checkGoogleCaptcha()){

    sendTelegram("maxdesign.pro: Заявка обратный звонок \n Телефон: ".$_POST["phone"]." \n Со страницы: ".$_SERVER['HTTP_REFERER']);

//	$arEventFields= array(
//		"MAIL" => $_POST["phone"],
//		"UTM_SOURCE" => $_COOKIE['utm_source'],
//		"UTM_MEDIUM" => $_COOKIE['utm_medium'],
//		"UTM_CAMPAIGN" => $_COOKIE['utm_campaign'],
//		"UTM_CONTENT" => $_COOKIE['utm_content']
//	);
//	CEvent::Send("NEW_SUBSCRIBE", "s1", $arEventFields, "N", 12);
	// var_dump($sebd);
	// return true;
//	LocalRedirect($_SERVER['HTTP_REFERER']);
//			} else {
//				 return false;
//		LocalRedirect($_SERVER['HTTP_REFERER']);
//	}
?>