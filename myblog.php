<!DOCTYPE html>
<html lang="en">
<head>
  <title>내블로그</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .row.content {height: 1500px}
  </style>
  <script>
  function change(){
      document.getElementById('formco').style = "visibility:visible; height:200px;";
  }
  </script>
</head>
<body >
    <div class="row content">
      <div class="col-sm-3" style="height:100%;background-color: #f1f1f1;">
          <ul class="nav nav-pills nav-stacked" >
              <li class="active"><a href="http://pkw.weit.kr/myblog.php">Home</a></li>
              <li><a href="http://pkw.weit.kr/board.php">Board</a></li>
              <li><a href="http://pkw.weit.kr/guest.php">Guest book</a></li>
              <li><a href="http://pkw.weit.kr/notice.php">Notice</a></li>
          </ul>
        </div>
      <div class="col-sm-9" style="background-color:white;">
          <h4><small>My Pages</small></h4>
          <hr>
          <div class="col-sm-3">
            <div class="thumbnail">
              <a href="http://o3oblog.tistory.com/">
              <img src="http://cfile6.uf.tistory.com/image/9964583359CE55B9187DDD" style="width:100%">
              <div class="caption">
                <p><code>BLOG_LINK</code></p>
              </div>
              </a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="thumbnail">
              <a href="http://o3oblog.tistory.com/category/%EC%9E%90%EA%B2%A9%EC%A6%9D">
              <img src="http://cfile24.uf.tistory.com/image/276ED34459244771270466" style="width:100%;">
              <div class="caption">
                <p>My Certificate</p>
              </div>
              </a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="thumbnail">
              <a href="http://o3oblog.tistory.com/category/%EB%8F%99%EC%95%84%EB%A6%AC%20%ED%99%9C%EB%8F%99">
              <img src="http://cfile2.uf.tistory.com/image/99FED93359CE56D10D20B6" style="width:100%">
              <div class="caption">
                <p>My Club</p>
              </div>
              </a>
            </div>
          </div>
          <div class="col-sm-3">
          </div>
            <div class="col-sm-3" style="background-color:white;">
                <div class="alert alert-danger alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>NOTICE!</strong></br> each of Images is an image link.
                  </div>
                  <div class="alert alert-danger alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>AND!</strong></br> This page is always incomplete.. :P
                    </div>
                  <button style="width:100%"class="btn btn-default" data-toggle="collapse" data-target="#col1">Korean</button>
                  <div id="col1" class="collapse" style="background-color:white;">
                    <div class="panel panel-default">
                      <div class="panel-body"><strong>공지!</strong><hr>각 이미지는</br> 이미지 링크입니다!</br></div>
                      <div class="panel-body"><strong>그리고!</strong><hr> 이 페이지는</br> 언제나 미완성입니다.. :P</div>
                    </div>
                  </div>
            </div>
      </div>

      <div class="col-sm-9" style="background-color:white;">
           <h4><small>My comment <span> <img src="edit.png" data-toggle="collapse" data-target="#1login"style="width:16px;height:16px;"></span></small></h4>
          <form class="form-inline collapse has-success" id="1login" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <input type="password" class="form-control" placeholder="Enter password" name="psw">
            <input type="submit" class="btn btn-success">
          </form>



          <hr>
            <div class="well">
            <?php
              $connect = mysql_connect('localhost','pkw','123456') or die("실패입니다");
              mysql_select_db("pkw");
              $re= mysql_query("select * from comment order by number");
              while($result=mysql_fetch_array($re)){

                echo $result[0];
              }
              mysql_close($connect);
             ?>
           </div>
            <form id="formco" style="visibility:hidden; height:0px;" method="post" class="form-group col-sm-12">
            <textarea class="form-control" rows="7"name="content"></textarea>
            <div class="btn-group" style="width:100%;" >
            <button type="submit" class="btn btn-success col-sm-9">작성을 마무리하고 제출합니다.</button>
            <button class="btn btn-default col-sm-3" onclick="document.getElementById('formco').style = 'visibility:hidden;height:0px;'">취소</button>
            </div>
          </form>


            <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // 수정버튼 누를때
                $password = $_POST["psw"];
                if($password == "skinsiro"){
                  echo ("<script language=javascript> change();</script>");
                }
                //끝
              }
            ?>
      </div>
    </div>
    <footer class="container-fluid" style="
      background-color: #555;
      color: white;
      padding: 15px;">
    </footer>
</body>
</html>
