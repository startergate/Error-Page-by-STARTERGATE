<?php
  if (empty($_GET['status'])) {
    header('Location: ../index.php');
    exit;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="apple-touch-icon" sizes="57x57" href="/static/img/favicon/donote/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/static/img/favicon/donote/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/img/favicon/donote/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/static/img/favicon/donote/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/img/favicon/donote/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/static/img/favicon/donote/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/static/img/favicon/donote/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/static/img/favicon/donote/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/static/img/favicon/donote/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/static/img/favicon/donote/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/static/img/favicon/donote/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/static/img/favicon/donote/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/static/img/favicon/donote/favicon-16x16.png">
    <link rel="manifest" href="/donote/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/static/img/favicon/donote/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>403 - STARTERGATE</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="/error/css/bg_style.css?ver=1.5">
  	<link rel="stylesheet" type="text/css" href="/error/css/master.css?ver=9">
  	<link rel="stylesheet" type="text/css" href="/Normalize.css">
  </head>
  <body id="bge">
    <div class="cover full-window">
      <div class="col-md-12 width100p">
        <div class='text-center'>
          <strong><div id="domi"><strong class="err404_1">4</strong><img class="img up10" src="../static/img/common/no-sign.png" alt="0" /><strong class="err404_2">3</strong></div><div class='white errdesc'>Forbidden!</div></strong>
          <div class="white">
            삑, 삑, 삑!<br />금지된_접근이_감지되었습니다(진지)
          </div>
        </div>
        <div id="control">
          <p class='text-center'>
            <a href="../index.php" class="btn btn-default btn-lg">나가기</a>
          </p>
        </div>
      </div>
    </div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
