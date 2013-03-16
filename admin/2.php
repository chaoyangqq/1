<!DOCTYPE HTML>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=gbk"/>
    <title></title>
    
    <script type="text/javascript" charset="gbk" src="./ueditor/editor_config.js"></script>
    <script type="text/javascript" charset="gbk" src="./ueditor/editor_all_min.js"></script>

</head>
<?php
		
		$content =  htmlspecialchars(stripslashes($_POST['myEditor']));
		echo  "<div class='content'>".htmlspecialchars_decode($content)."</div>";
?>
<body>
    <h2>UEditor提交示例</h2>
    <form id="form" method="post" action="">
        <script type="text/plain" id="myEditor" name="myEditor">
            <p>欢迎使用UEditor！</p>
        </script>
        <input type="submit" value="Form内部可以直接提交">
    </form>
    

    <script type="text/javascript">

        var editor_a = UE.getEditor('myEditor',{
            minFrameHeight:150
        });

    </script>

</body>


</html>
