<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.ico" />
  <title></title>
  <style>
			@font-face {
				font-family:"cmdysj";
				src: url("fonts/cmdysj.ttf")format("truetype");
			}
			*{
				font-family: cmdysj;
				user-select: none;
			}
			*{
			     padding: 0;
			     margin: 0;
			 }
			 ul{
			     list-style: none;
			 }
			 li{
			     float: left;
			     background-color: rgb(247, 247, 247);
			 }
			 #aa{
			     padding: 0 0px;
			     height: 20px;
			     line-height: 22px;
			     display: block;
			     color: rgb(247, 247, 247);
			     text-decoration: none;   
			 }
			#aa:hover{
				background-color: #4FFF49;
			}
			button{
				height: 20px;
				border-radius: 5px;
				font-size: 100;
				background-color: rgb(0, 255, 0);
				border: 5px solid rgb(0, 255, 0);
				text-align: center;
				line-height: 20px;
			}
			button{
				cursor: pointer;
			}
			html{
				width:100%;
				height: 100%;
				overflow-x:hidden;
				overflow-y: hidden;
				}
  </style>
</head>

<body id="body" style="background-color: rgb(247, 247, 247);">
  <h1 align="center">我的世界游戏下载站</h1>
		<div style="display: flex;margin-left: 120px;margin-top: 15px;">
			<h4>程序：</h4>
			<ul>
				<li>
					<a href="https://space.bilibili.com/1644970825" id="aa">
						<h4 style="color: red;">CHCAT1320</h4>
					</a>
				</li>
			</ul>
			<!--<h4>&</h4>
			<ul>
				<li>
					<a href="https://space.bilibili.com/3494378083453070">
						<h4 style="color: red;">一袋白凉粉啊</h4>
					</a>
				</li>
			</ul>-->
			<h4>（由20240223制作）</h4>
		</div>
		<h4 style="margin-top: 15px;" align="center">选择下方版本下载</h4>
		<div style="text-align: center;">
		请选择游戏版本:
		<?php
		
		// 获取当前文件所在的目录
		$currentDir = __DIR__;
		
		// 构建相对路径到 mc 文件夹
		$mcDir = $currentDir . '/mc';
		
		// 获取 mc 文件夹中的文件列表
		$files = scandir($mcDir);
		
		if (is_array($files)) {
		    // 统计文件的数量（不包括当前目录和上级目录）
		    $fileCount = count($files) - 2;
		
		    // 输出文件数量
		    //echo "目录 /mc/ 中共有 " . $fileCount . " 个文件。\n";
		
		    // 输出所有文件的名称（去掉文件后缀）
		    echo '<select name="shuziweishu" id="xuanz" style="height: 25px; font-size: 100%; margin-top: 15px;">';
		    foreach ($files as $file) {
		        // 排除当前目录和上级目录
		        if ($file != '.' && $file != '..') {
		            $fileName = pathinfo($file, PATHINFO_FILENAME);
		            echo '<option value="' . $fileName . '">' . $fileName . '</option>';
		        }
		    }
		    echo '</select>';
		} else {
		    echo "无法获取文件列表。";
		}
		?>
		<a href="" id="xz">
		<button style="height: 25px;" onclick="ok()">确定</button>
		</a>
			<script>
			setInterval(function(){
				var xz = document.getElementById("xz")
				var v = document.getElementById("xuanz")
				xz.href = "mc/"+ v.value + ".zip"
			},1);
			</script>
		</div>
		<div style="margin-top:15px ;text-align: center;">
		<a href="https://afdian.net/a/CN_1320">
		<button>帮助作者购买服务器哭（/TДT)/求</button>
		</a>
		</div>
				<div style="text-align: center;margin-top: 15px;">
			Minecraft java Edition download site v0.0.1 by CHCAT1320
		</div>
		<div id="watermarkId"></div>
		<script src="run.js"></script>
</body>

</html>




