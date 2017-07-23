<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<script type="text/javascript" src="./js/util.js"></script>
<script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
<script>
  var t = 300;/*初始时间*/
  $('#starttime').text('倒计时:'+t+'秒');
  time1()
  function time1() {
      if (t >= 1) {
          t -= 1;
          $('#starttime').text('倒计时:'+t+'秒');
          setTimeout(function() {
              time1();
          }, 1000);
      }else{
        alert('时间结束！');
      }
  }
</script>
<script type="text/javascript">
	$(document).ready(function(){
		var i = 1;
  $("#viewanswer").click(function(){
    if (i==1) {$(".answer1").fadeIn();}
  	if (i==2) {$(".answer2").fadeIn();}
    if (i==3) {$(".answer3").fadeIn();}
  });
  $("#next").click(function(){
  		i++;
  	 	if (i>3) {
  		window.alert("没有更多的题目了!");
  		return;
  	}
  	$(".answer"+(i-1)).hide();	
  	$(".exam"+(i-1)).hide();
  	$(".exam"+i).fadeIn();
  });

  $("#last").click(function(){
  	i--;
  	if (i<=0) {
  		window.alert("没有题目了！")
  		return;
  	}
  	$(".exam"+(i+1)).hide();
    $(".answer"+(i+1)).hide();
  	$(".exam"+i).fadeIn();	
  	$(".answer"+i).fadeIn();
  });
  $("#reset").click(function (){
      window.location.href="./startExam.php";
     // window.alert("你点击了重新开始");
  })
});
</script>
<?php 
    include 'DBhelper.php';
    $db = new DBhelper();
    $arr = $db->queryId();
    //打乱数据库查询到的id
    shuffle($arr);
    if ($db->queryUseId($arr[0])==true&&$db->queryUseId($arr[0])==true&&$db->queryUseId($arr[2])==true) {
          # code...
        $db->deleteId();
    }


    while ($db->queryUseId($arr[0])==true) {
      # code...
     shuffle($arr);
    }
    while ($db->queryUseId($arr[1])==true) {
      # code...
      shuffle($arr);

    }
    while ($db->queryUseId($arr[2])==true) {
      # code...
      shuffle($arr);
    }
    //将已经使用过的
    $db->insertId($arr[0]);
    $db->insertId($arr[1]);
    $db->insertId($arr[2]);
    
?>
</head>
<body>
<div id="starttime">
</div>
<div class = "exam1">
	1.
  <?php 
      //从数据库中获取第一道题
      $db->queryById($arr[0]);
	 ?>
</div>
<div class = "exam2">
  2.
	<?php 
      //从数据库中获取第二道题
      $db->queryById($arr[1]);
	 ?>
</div>
<div class = "exam3">
  3.
	<?php 
      //从数据库中获取第三道题
		  $db->queryById($arr[2]);
	 ?>
</div>
<div class="answer1">
	<?php 
    //获取第一道题的答案
    $db->queryAnswerById($arr[0]);
	 ?>
</div>
<div class="answer2">
  <?php 
    //获取第二道题的答案
    $db->queryAnswerById($arr[1]);
   ?>
</div>
<div class="answer3">
  <?php 
    //获取第三道题的答案
    $db->queryAnswerById($arr[2]);
   ?>
</div>
<div class="button">
	<button id = "viewanswer" type="button">查看答案</button>
	<button id = "last" type="button">上一道题</button>
	<button id = "next" type="button">下一道题</button>
  <button id = "reset" type="button">重新开始</button>
</div>
<p class="returnIndex"><a href="index.html">点此返回首页</a></p>
</body>
</html>
