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
    <title><?php echo $_GET['status'];?> - STARTERGATE</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="./css/bg_style.css?ver=1.5">
  	<link rel="stylesheet" type="text/css" href="./css/master.css?ver=4">
  	<link rel="stylesheet" type="text/css" href="/Normalize.css">
  </head>
  <body id="bge">
    <div class="cover full-window">
      <div class="col-md-12">
        <p class='text-center'>
          <strong id='domi'><?php echo $_GET['status'];?></strong>
          <div class="white">
            <?php
              switch ($_GET['status']) {
                case '400':
                  echo "잘못된 요청이에요.";
                  echo "<div class='little'>서버: 아니면 내가 멍청하든지.</div>";
                break;

                case '401':
                  echo "인증되지 않은 요청이에요.";
                  echo "<div class='little'>서버: Beep, UNAUTHORIZED!!!</div>";
                  break;

                case '402':
                  echo "결제가 필요한 요청이에요.";
                  echo "<div class='little'>서버: 결제가 안 되어있잖아! 다시 해와!</div>";
                  break;

                case '405':
                  echo "요청한 방법을 사용할 수 없어요.";
                  echo "<div class='little'>서버: 미안하지만 고든, 그건 안돼.</div>";
                  break;

                case '406':
                  echo "요청한 컨텐츠 특성으로 응답할 수 없어요.";
                  echo "<div class='little'>서버: 미안하지만 고든, 그건 우리가 할 수 없어.";
                  break;

                case '407':
                  echo "프록시를 통한 인증이 필요해요.";
                  echo "<div class='little'>서버: 미안하지만 고든, 꺼져.</div>";
                  break;

                case '408':
                  echo "요청 대기 시간이 초과했어요.";
                  echo "<div class='little'>서버: 째깍째깍째깍째짝";
                  break;

                case '409':
                  echo "요청을 처리하는 중에 충돌이 발생했어요.";
                  echo "<div class='little'>서버: 부우우웅 쾅.</div>";
                  break;

                case '410':
                  echo "사용자가 요청한 리소스가 영구적으로 삭제됬어요.";
                  echo "<div class='little'>서버: 분명히 여기다 뒀는데?";
                  break;

                case '411':
                  echo "콘텐츠 길이 헤더가 너무 짧아요.";
                  echo "<div class='little'>서버: 너무 짧잖아! 다시 해와!.</div>";
                  break;

                case '412':
                  echo "요청한 사전조건을 만족하지 못했어요.";
                  echo "<div class='little'>서버: 나는 이걸 하기엔 너무 부족해(진지)</div>";
                  break;

                case '413':
                  echo "요청의 크기가 너무 커요.";
                  echo "<div class='little'>서버: 흐앙, 요청이 너무 커버렷!</div>";
                  break;

                case '414':
                  echo "URL이 너무 길어요.";
                  echo "<div class='little'>서버: 흐앙, URL이 너무 길어버렷!</div>";
                  break;

                case '415':
                  echo "지원하지 않는 미디어 유형이에요.";
                  echo "<div class='little'>서버: <a href='https://www.youtube.com/watch?v=3K0RzZGpyds'>Cuz, She is Dead!</a></div>";
                  break;

                case '416':
                  echo "페이지에서 해당 요청을 처리할 수 없어요.";
                  echo "<div class='little'>서버: 탕, 탕, 탕! 오발이야 소총수새꺄!</div>";
                  echo '<br /><a href="https://namu.wiki/w/H%26K%20HK416"><img class="gunimg" src="/static/img/common/HK416F-S.jpg" alt="416"></a>';
                  break;

                case '417':
                  echo "예상 요청 헤더를 처리할 수 없어요.";
                  echo "<div class='little'>서버: 탕, 탕, 탕! 오발이야 지정사수새꺄!</div>";
                  echo '<br /><a href="https://namu.wiki/w/H%26K%20HK417"><img class="gunimg" src="/static/img/common/HK417.jpg" alt="416"></a>';
                  break;

                case '501':
                  echo "서버에서 요청을 수행할 수 없어요.";
                  echo "<div class='little'>서버: index.php요? 잠시만요...<br />(10분 후)501 Not Implemented</div>";
                  break;

                case '505':
                  echo "시간이 초과됬어요.";
                  echo "<div class='little'>서버: 째애애애애애애깍쨰애애ㅐㅐㅐ깍</div>";
                  break;

                default:
                  echo "알 수 없는 오류에요.<br />잠깐만, 아니 이게 왜 나오는거야!";
                  echo "<div class='little'>서버: 말도 안된다구 으허허</div>";
                break;
              }
            ?>
          </div>
        </p>
        <div id="control">
          <p class='text-center'>
            <a href="../index.php" class="btn btn-default btn-lg">나가기</a>
          </p>
          </a>
        </div>
      </div>
    </div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
