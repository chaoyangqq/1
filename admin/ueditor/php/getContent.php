<meta http-equiv="Content-Type" content="text/html;charset=gbk"/>
<script src="../uparse.js" type="text/javascript"></script>
<script>
  uParse('.content',{
      'highlightJsUrl':'../third-party/SyntaxHighlighter/shCore.js',
      'highlightCssUrl':'../third-party/SyntaxHighlighter/shCoreDefault.css'
  })
</script>
<?php
    //��ȡ����
    error_reporting(E_ERROR|E_WARNING);
    $content =  htmlspecialchars(stripslashes($_POST['myEditor']));
    $content1 =  htmlspecialchars(stripslashes($_POST['myEditor1']));

    //�������ݿ������������

    //��ʾ
    echo "��1���༭����ֵ";
    echo  "<div class='content'>".htmlspecialchars_decode($content)."</div>";
    echo "<br/>��2���༭����ֵ<br/>";
    echo "<textarea class='content' style='width:500px;height:300px;'>".htmlspecialchars_decode($content1)."</textarea><br/>";