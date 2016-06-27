<!DOCTYPE html>
<html lang="ko">
<head>
  <title><?php echo $view_title?></title>
  <?php require_once("./template/".$OJ_TEMPLATE."/include-header.php");?>
</head>
<body>
  <?php require_once("oj-header.php");?>
  <?php echo $view_news?>
  <div class="container">
    <div class="col-md-12 jumbotron">
      <h1>Welcome!</h1>
      <p><a href="http://ts.hs.kr" target="_blank">대구과학고등학교</a> <a href="http://dev.ts.hs.kr" target="_blank">Online Judge</a> 에 오신것을 환영합니다.</p>
      <p>다양한 문제풀이를 통해 코딩실력을 키우세요!</p>
    </div>
  </div>
  <?php require_once("oj-footer.php");?>
  <?php require_once("include-bottom.php");?>
</html>
