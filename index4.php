<!DOCTYPE html>
<html lang="en">
<head>
  <title>기타</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"
       href="cornerstone/theme-white/cornerstone.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="padding-top: 60px;">
  <div class="container-fluid">
    <ul class="nav nav-tabs navbar-fixed-top">
    <li ><a href="http://pkw.weit.kr/index.html">연습</a></li>
    <li ><a href="http://pkw.weit.kr/index2.html">글작성</a></li>
    <li ><a href="http://pkw.weit.kr/index3.html">기타</a></li>
    <li class="active"><a href="#">php</a></li>
    <li class="disabled"><a href="http://pkw.weit.kr/myblog.php">숨겨진공간</a></li>
    </ul>
  </div>
    <!-- php연습 -->

    <div style="margin-top:30px;" class="container">
      <div  class="well">
        <button class="btn btn-danger" data-toggle="collapse" data-target="#form1"">입력 창 열기</button>
        <form style="margin-top:10px;"id="form1" class="collapse" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
             enter any data: <input type="password" name="email">
            <input class="btn btn-success"type="submit">
        </form>
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
          }
          echo "<h2><small><strong>You Inputed Data:</strong></small></h2></br>";
          echo "<code>$email</code>";
        ?>

      </div>






        </div>
    </div>
  </div>

</body>
</html>
