<h1>TESTE</h1>
<?php
    $re = new \App\Http\Controllers\Api\RequestController();
    $url = 'https://www.php.net/manual/pt_BR/function.curl-setopt.php';
    $re->createShortUrl( $url,  $description = "Testando", $expire_in = "2 minutes",  $password = "",  $customurl = "",  $reuse = false,  $domain = "");
    var_dump($re->callback()->description);
?>

<h1>FIM</h1>