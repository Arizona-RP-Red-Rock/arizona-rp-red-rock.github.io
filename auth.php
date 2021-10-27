$client_id = 7986168; // ID приложения
$client_secret = 'fbUWih0qBaDJMrPPXlqC'; // Защищённый ключ
$redirect_uri = 'https://arizona-rp-red-rock.github.io/auth.php'; // Адрес сайта

$url = 'http://oauth.vk.com/authorize'; // Ссылка для авторизации на стороне ВК
$params = [ 'client_id' => $client_id, 'redirect_uri'  => $redirect_uri, 'response_type' => 'code'];

echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Авторизация через ВКонтакте</a></p>';
