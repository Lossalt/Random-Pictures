<?php
//随机数生成
$num = rand(1,197);
//图片地址拼接
$picpath = "https://raw.githubusercontent.com/Lossalt/ramdom-img/main/pc/".$num.".webp";
//重定位到图片
die(header("Location: $picpath"));
?>
