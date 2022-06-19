<?php
//随机数生成
$num = rand(1,68);
//图片地址拼接
$picpath = "https://raw.githubusercontent.com/Lossalt/ramdom-img/main/mobile/".$num.".webp";
//重定位到图片
die(header("Location: $picpath"));
?>
