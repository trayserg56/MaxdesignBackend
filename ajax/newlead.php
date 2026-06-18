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

        if(isset($_FILES['file'])){
            $fid = CFile::SaveFile($_FILES['file'], "feedback");
        }

        sendTelegram("maxdesign.pro: Новая заявка \n Имя: ".$_POST["name"]." \n Эл.почта: ".$_POST["email"]."\n Телефон: ".$_POST["phone"]."\n Текст: ".$_POST["text"]." \n Со страницы: ".$_SERVER['HTTP_REFERER']);

		$arEventFields= array(
			"NAME" => $_POST["name"],
			"PHONE" => $_POST["phone"],
			"EMAIL" => $_POST["email"],
			"TEXT" => $_POST["text"],
			"PAGE_FROM" => $_SERVER['HTTP_REFERER'],
			"FILE" => $_SERVER['SERVER_NAME'] . CFile::GetPath($fid),
			"UTM_SOURCE" => $_COOKIE['utm_source'],
			"UTM_MEDIUM" => $_COOKIE['utm_medium'],
			"UTM_CAMPAIGN" => $_COOKIE['utm_campaign'],
			"UTM_CONTENT" => $_COOKIE['utm_content']
		);
		if(isset($_FILES['file'])){
			CEvent::Send("NEW_LEAD", "s1", $arEventFields, "N", 9);
		} else {
			CEvent::Send("NEW_LEAD", "s1", $arEventFields, "N", 9);
		}
		// if($_POST["check-news"]){
		// 	CEvent::Send("NEW_SUBSCRIBE", "s1", $arEventFields, "N", 11);
		// }
		// var_dump(CEvent::SendImmediate(21, "s1", $arEventFields, "N", 9));
		// return true;
//		LocalRedirect($_SERVER['HTTP_REFERER']);
//	} else {
		// return false;
//		LocalRedirect($_SERVER['HTTP_REFERER']);
//	}
?>