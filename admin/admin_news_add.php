<?php
include_once ('admin_global.php');

$r=$db->Get_user_shell_check($uid, $shell);


$content =  htmlspecialchars(stripslashes($_POST['myEditor']));
/* echo  "<div class='content'>".htmlspecialchars_decode($content)."</div>";
echo "</br>".$content;  */

if(isset($_POST[into_news]))
{
	
     $db->query("INSERT INTO `p_newsbase` (`id`, `cid`, `title`, `author`, `date_time`) " .
     		"VALUES (NULL, '$_POST[cid]', '$_POST[title]', '$_POST[author]', '".mktime()."')");
     $last_id=$db->insert_id();
     $db->query("INSERT INTO `p_newscontent` (`nid`, `keywrod`, `content`, `remark`) " .
			"VALUES ($last_id, '$_POST[keywrod]', '$content' , '')");  
	//$db->Get_admin_msg("admin_news_add.php","添加成功");
}


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
<HEAD>
<TITLE>后台管理</TITLE>
<meta http-equiv="Content-Type" content="text/html;charset=gbk"/>
<LINK href="images/private.css" type=text/css rel=stylesheet>
<script type="text/javascript" charset="gbk" src="./ueditor/editor_config.js"></script>
<script type="text/javascript" charset="gbk" src="./ueditor/editor_all_min.js"></script>


</HEAD>

<BODY>
<TABLE class='navi' cellSpacing=1 align=center border=0>
  <TBODY>
  <TR>
    <TH>后台 >> 添加新闻</TH></TR></TBODY></TABLE><BR>

    <form id="form" action="" method="post">
    
	<table border=0 cellspacing=1 align=center class=form>
	<tr>
		<th colspan="2">添加分类</th>
	</tr>
    <tr>
   		<td width=80>新闻分类</td>
  		<td>
  		<select name="cid">
    	<option value="0">添加大类</option>
    	<?php
    		$query=mysql_query("select * from p_newsclass where f_id=0");
		    while ($row=mysql_fetch_array($query)) 
			{
		      	echo "<option value=\"$row[id]\">$row[name]</option>";
		        $query_son=mysql_query("select * from p_newsclass where f_id='$row[id]'");
				while ($row_son=mysql_fetch_array($query_son)) 
				{
		    		echo "<option value=\"$row_son[id]\">&nbsp;&nbsp;&nbsp;┗$row_son[name]</option>";
		    	}
			}
		    ?>
  		</select></td>
   </tr>
   <tr>
   <td width=80>新闻标题</td>
   <td><input type="text" name="title" size=50></td>
   </tr>
   <tr>
   <td width=80>新闻作者</td>
   <td><input type="text" name="author" size=20></td>
   </tr>
   <tr>
   <td width=80>新闻关键字</td>
   <td><input type="text" name="keywrod" size=80></td>
   </tr>
   <tr>
   <td width=80>新闻内容</td>
   <td>
   <script type="text/plain" id="myEditor" name="myEditor">
            <p>欢迎使用UEditor！</p>
   </script>
 
   </td>
   </tr>
   
   <tr>
   <td width=80></td>
   <td><input type="submit" name="into_news" style="height:30px;" value="添加新闻"></td>
   </tr>
   </form>
</table>
<br/>
       
<script type="text/javascript">
	var editor_a = UE.getEditor('myEditor',{minFrameHeight:500});
</script>

	</BODY></HTML>
