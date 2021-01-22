    

<!doctype html>
<html lang="en">
 <head>
 <meta charset="gb2312">

  <title>自动健康打卡信息提交</title>
    <style>
    body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
    .bg{
    background: url('img/demobg.png') no-repeat center/cover;
    padding: 100px 0 150px;
    }
    .bg .inner-content {
	max-width: 1200px;
    margin: 0 auto;
    padding: 0 10px;
	}
    .bg .join-content {
    width: 1200px;
    height: 700px;
    background-color: #fff;
    border-radius: 5px;
	
    box-shadow: 0 0 20px rgba(0,0,0,0.2);
    border-radius: 5px;
}
.bg .join-content .top {
    height: 100px;
    border-bottom: 1px #eee solid;
    text-align: center;
    line-height: 100px;
}
.bg .join-content .top h1 {
    font-size: 25px;
    height: 100%;
    line-height: 100px;
    font-weight: 500;
}
.bg  .join-content .main {
    padding: 30px 60px;
	width: 500px;
	    float: left;
}
.bg .join-content .main .input-form .input-box {
    margin-bottom: 20px;
    position: relative;
}
.bg .join-content .main .input-form .input-box label {
    margin-bottom: 0;
    width: 20px;
    font-size: 15px;
}
.bg .join-content .main .input-form .input-box input {
    width: 350px;
    height: 35px;
    border: 1px #ddd solid;
    border-radius: 5px;
    background-color: #f7f7f7;
    font-size: 15px;
    padding-left: 10px;
    margin-left: 20px;
}

.bg .join-content .main .input-form .input-box textarea {
     width: 350px;
    height: 70px;
    font-size: 20px;
    border: 1px #ddd solid;
    border-radius: 5px;
    background-color: #f7f7f7;
    position: absolute;
    margin-left: 20px;
	font-size: 15px;
    padding-left: 10px;
	font-family: "微软雅黑";
}
.bg .join-content .main .submit-box .submit-btn {
    width: 100px;
    height: 30px;
    background-color: #009bde;
    color: #fff;
    border: none;
    border-radius: 30px;
    font-size: 15px;
    letter-spacing: 5px;
    display: block;
}
.bg .join-content .main .input-form .mh100 {
    min-height: 70px;
}
.bg  .join-content .main .submit-box {
    padding-left: 80px;
    margin-top: 10px;
}
.bg .desqtxt{color: #949698;font-size: 14px;line-height: 1.5;margin: 30px 0;letter-spacing: 2px;}
textarea {
    overflow: auto;
    resize: vertical;
}
.bg .ship {
width: 500px;
    float: left;
    padding: 30px 0;
    border-radius: 5px;
}
.bg .txts{
    font-size: 14px;
    margin-top: 10px;
}
.bg .txts li{
list-style-type: none;
    border-bottom: 1px dashed #eee;
    font-size: 13px;
    color: #a5a3a7;
	    line-height: 30px;
}
</style>
     
<script language='javascript'>
            function checkform(){
            	if(document.forma.username.value==''){
            		alert('请填写学号');
            		document.forma.username.focus();
            		return false;
            	}
            	if(document.forma.title.value==''){
            		alert('请填写密码');
            		document.forma.title.focus();
            		return false;
            	}   
            	if(document.forma.content.value==''){
            		alert('请填写Server酱密钥');
            		document.forma.content.focus();
            		return false;
            	} 
            	if(document.forma.name.value==''){
            		alert('请填写你的真实姓名');
            		document.forma.name.focus();
            		return false;
            	} 
            	if(document.forma.xueyuan.value==''){
            		alert('请填写你的学院');
            		document.forma.xueyuan.focus();
            		return false;
            	} 
				alert('提交成功!!');
            	return true;
            }
            </script>


</head>
 <body>
  <div class="bg">

   <div class="inner-content">
   <div class="join-content">
   <div class="top">
   <h1>河南理工大学自动健康打卡信息提交</h1>
   </div>


    <div class="main">
    
    <font color="#FF0000" size="4">Tips：疫情期间，每个人都有义务<strong>准确填报提交自己的健康信息</strong>，不要投机取巧，本程序只做演示~</font> 
    
    </br>
    </br>
<form action="index.php" method="post" class="input-form" name=forma onsubmit='return checkform();'>
<div class="input-box field-feedbackmodel-name required">
<label class="" >你的学号</label><input type="text" name="username"  placeholder="必填：请输入学号">
</div>

<div class="input-box field-feedbackmodel-name required">
<label class="" >你的密码</label><input type="text"  name="title" placeholder="必填：请输入密码">
</div>

<div class="input-box field-feedbackmodel-name required">
<label class="" >微信通知</label><input type="text"  name="content" placeholder="必填：请输入Server酱密钥">
</div>

<div class="input-box field-feedbackmodel-name required">
<label class="" >你的名字</label><input type="text"  name="name" placeholder="必填：请输入你的真实姓名">
</div>

<div class="input-box field-feedbackmodel-name required">
<label class="" >你的学院</label><input type="text"  name="xueyuan" placeholder="必填：请输入你所在学院">
</div>

<!--div class="input-box mh100 field-feedbackmodel-content required">
<label class="" >留言说明</label><textarea name="content" ></textarea>
</div-->

<div class="submit-box">
                        <button class="submit-btn" type="submit" name="dosubmit"><span>提交</span></button>
                    </div>
</form>


<div class="txts">
<ul>
<?php
     
    //留言板的思路：1.先创建一个文件名，方便于存放写入的内容
    // 2.将表单中的内容赋值给一个变量
    //3.判断文件是否存在，将用户输入的值写进变量，打开文件的是时候注意选择对文件访问的操作
    //4.读取文件的内容,关闭文件
         
    
    $filename = "message.txt";//创建一个文件的名字
     
    //如果用户提交了， 就写入文件， 按一定格式写入
    if(isset($_POST['dosubmit'])) {
    //字段的分隔使用||, 行的分隔使用[n]
    $mess = "学号：{$_POST['username']}，密码：{$_POST['title']}，密钥：{$_POST['content']}[n]";
     
     
    writemessage($filename, $mess);//向文件写进内容
     
    }
     
    if(file_exists($filename)) {//判断文件 是否存在
    readmessage($filename);//读取文件的函数
    }
     
     
    function writemessage($filename, $mess) {
    $fp = fopen($filename, "a");//在尾部执行写的操作，且不删除原来的文件内容
    fwrite($fp, $mess);//写入文件
     
    fclose($fp);//关闭文件
    }
     
    function readmessage($filename) {
    $mess = file_get_contents($filename);
    $mess = rtrim($mess, "[n]");
     
    $arrmess = explode("[n]", $mess);
     
    foreach($arrmess as $m) {
    list($username, $dt ,$title, $content) = explode("，", $m);
     
    echo "<li>".date("Y-m-d H:i")." {$username} {$title} <br/>{$content}</li>";
    }
     
    }
     
    ?>
</ul>
</div>

</div>


	<div class="ship">
<img src="img/hnlg.jpg" height="160" width="500">
</br>
</br>
使用说明：
</br>
1. <a href="./hq.html">学号、密码以及微信通知密钥获取</a>；
</br>
2. 本程序<strong>严格遵守学校及学院规定</strng>，不会主动帮助同学非法自动打卡；

<div class="desqtxt">
本项目由河南理工大学2018级计算机科学与技术学院<strong>王荣胜</strong>开发维护，该项目基于<a href="https://cloud.tencent.com/">腾讯云</a>构建。
</div>

</div>


   </div>
   </div>
  </div>



 </body>
</html>
