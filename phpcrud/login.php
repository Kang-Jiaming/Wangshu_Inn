<?php

	header("Content-type:text/html;charset=utf-8");
	include('mysqlserver.php');

	$name1=$_POST["username1"];
	$pwd1=$_POST["userpwd1"];

	$sql="select * from users where name='$name1' and password='$pwd1'";
	$result=$conn->query($sql);
	$row=mysqli_num_rows($result);

	$em1=mysqli_query($conn,"select email from users where name='$name1' and password='$pwd1'");
	$em1=mysqli_fetch_assoc($em1);

	if($row==1){
		echo '欢迎回来';
		echo  "<p>用户名：$name1</p>";
		echo "<p>密码：$pwd1</p>";
		echo "<p>邮箱：$em1[email]</p>";
		echo "<script>alert('登录成功')</script>";
	}else{
		echo "<script language=javascript>alert('登录失败，请检查用户名或密码');history.back()</script>";
	}

	$query=mysqli_query($conn,"select number from users where name='$name1' and password='$pwd1' order by CAST(number as SIGNED) ");
	$numall=mysqli_fetch_array($query);
	$num=$numall[0];

	setcookie('name',$name1);
	setcookie('password',$pwd1);

	// $filename='image/'. $name1.'.png';
	// if(file_exists($filename)){
	// 	echo'<img :src=$filename width="100px" height="100px"/>';
	// }

    if ($num) {
        if ($num=='albedo'){
            echo'<img src=image/albedo.png width="100px"/>';
        } elseif ($num=='amber') {
            echo'<img src=image/amber.png width="100px"/>';
        } elseif ($num=='arataki_itto') {
            echo'<img src=image/arataki_itto.png width="100px"/>';
        } elseif ($num=='barbara') {
            echo'<img src=image/barbara.png width="100px"/>';
        } elseif ($num=='beidou') {
            echo'<img src=image/beidou.png width="100px"/>';
        } elseif ($num=='bennett') {
            echo'<img src=image/bennett.png width="100px"/>';
        } elseif ($num=='chongyun') {
            echo'<img src=image/chongyun.png width="100px"/>';
        } elseif ($num=='diluc') {
            echo'<img src=image/diluc.png width="100px"/>';
        } elseif ($num=='diona') {
            echo'<img src=image/diona.png width="100px"/>';
        } elseif ($num=='eula') {
            echo'<img src=image/eula.png width="100px"/>';
        } elseif ($num=='fischl') {
            echo'<img src=image/fischl.png width="100px"/>';
        } elseif ($num=='ganyu') {
            echo'<img src=image/ganyu.png width="100px"/>';
        } elseif ($num=='gorou') {
            echo'<img src=image/gorou.png width="100px"/>';
        } elseif ($num=='hu_tao') {
            echo'<img src=image/hu_tao.png width="100px"/>';
        } elseif ($num=='jean') {
            echo'<img src=image/jean.png width="100px"/>';
        } elseif ($num=='kaedehara_kazuha') {
            echo'<img src=image/kaedehara_kazuha.png width="100px"/>';
        } elseif ($num=='kaeya') {
            echo'<img src=image/kaeya.png width="100px"/>';
        } elseif ($num=='kamisato_ayaka') {
            echo'<img src=image/kamisato_ayaka.png width="100px"/>';
        } elseif ($num=='kamisato_ayato') {
            echo'<img src=image/kamisato_ayato.png width="100px"/>';
        } elseif ($num=='keqing') {
            echo'<img src=image/keqing.png width="100px"/>';
        } elseif ($num=='klee') {
            echo'<img src=image/klee.png width="100px"/>';
        } elseif ($num=='kujou_sara') {
            echo'<img src=image/kujou_sara.png width="100px"/>';
        } elseif ($num=='lisa') {
            echo'<img src=image/lisa.png width="100px"/>';
        } elseif ($num=='mona') {
            echo'<img src=image/mona.png width="100px"/>';
        } elseif ($num=='ningguang') {
            echo'<img src=image/ningguang.png width="100px"/>';
        } elseif ($num=='noelle') {
            echo'<img src=image/noelle.png width="100px"/>';
        } elseif ($num=='paimon') {
            echo'<img src=image/paimon.png width="100px"/>';
        } elseif ($num=='qiqi') {
            echo'<img src=image/qiqi.png width="100px"/>';
        } elseif ($num=='raiden_shogun') {
            echo'<img src=image/raiden_shogun.png width="100px"/>';
        } elseif ($num=='razor') {
            echo'<img src=image/razor.png width="100px"/>';
        } elseif ($num=='rosaria') {
            echo'<img src=image/rosaria.png width="100px"/>';
        } elseif ($num=='sangonomiya_kokomi') {
            echo'<img src=image/sangonomiya_kokomi.png width="100px"/>';
        } elseif ($num=='sayu') {
            echo'<img src=image/sayu.png width="100px"/>';
        } elseif ($num=='shenhe') {
            echo'<img src=image/shenhe.png width="100px"/>';
        } elseif ($num=='sucrose') {
            echo'<img src=image/sucrose.png width="100px"/>';
        } elseif ($num=='tartaglia') {
            echo'<img src=image/tartaglia.png width="100px"/>';
        } elseif ($num=='thoma') {
            echo'<img src=image/thoma.png width="100px"/>';
        } elseif ($num=='traveler') {
            echo'<img src=image/traveler.png width="100px"/>';
        } elseif ($num=='traveler_1') {
            echo'<img src=image/traveler_1.png width="100px"/>';
        } elseif ($num=='venti') {
            echo'<img src=image/venti.png width="100px"/>';
        } elseif ($num=='xiangling') {
            echo'<img src=image/xiangling.png width="100px"/>';
        } elseif ($num=='xiao') {
            echo'<img src=image/xiao.png width="100px"/>';
        } elseif ($num=='xingqiu') {
            echo'<img src=image/xingqiu.png width="100px"/>';
        } elseif ($num=='xinyan') {
            echo'<img src=image/xinyan.png width="100px"/>';
        } elseif ($num=='yae_miko') {
            echo'<img src=image/yae_miko.png width="100px"/>';
        } elseif ($num=='yanfei') {
            echo'<img src=image/yanfei.png width="100px"/>';
        } elseif ($num=='yoimiya') {
            echo'<img src=image/yoimiya.png width="100px"/>';
        } elseif ($num=='yun_jin') {
            echo'<img src=image/yun_jin.png width="100px"/>';
        }elseif ($num=='zhongli') {
            echo'<img src=image/zhongli.png width="100px"/>';
        } else {
            echo "先选择头像吧";
        }
    }
?>


<html>
	<head>
		<meta name="referrer" content="never">
		<meta charset="utf-8" />
		<title>login</title>
	</head>
	<body>
		<br/>
		<!-- <form action="upfile.php" method="post" enctype="multipart/form-data">
			<label for="file">请选择上传的头像</label>
			<input type="file" name="file" id="file"/>
			<br/>
			<input type="submit" name="submit" value="提交">
		</form> -->
		<a href='choose.php'>选择头像</a>
		<br/>
		<a href='check.html'>修改密码</a>
	</body>
</html>