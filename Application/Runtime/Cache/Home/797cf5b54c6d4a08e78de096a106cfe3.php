<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>研究会会议</title>
<link href="/Public/css/all.css" rel="stylesheet" type="text/css"/>
<link href="/Public/css/huiyi.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="bigBox">
 
  <div id="width">
  <div class="shoub">中国语文现代化学会</div>
  <div class="shouc">模糊语言研究会</div>
	</div>
  <!--导航栏-->
     <div class="banner">
<table  height="30px" id="width" rules=cols frame="vsides" bordercolor="#666666">
  <tr>
    <td width="80px"><a href="/">首页</a></td>
    <td width="130px"><a href="<?php echo U('Home/Page/show/title/zuzhi');?>">组织机构</a></td>
    <td width="225px"><a href="<?php echo U('Home/Article/listByCid/cid/2');?>">研究会动态·资讯</a></td>
    <td width="130px"><a href="<?php echo U('Home/Page/show/title/zhinan');?>">入会指南</a></td>
    <td width="130px"><a href="<?php echo U('Home/Article/listByCid/cid/4');?>">会员风采</a></td>
    <td width="150px"><a href="<?php echo U('Home/Article/listByCid/cid/5');?>">研究会会议</a></td>
    <td width="170px"><a href="<?php echo U('Home/Article/listByCid/cid/6');?>">模糊语言著作</a></td>
    <td><a href="<?php echo U('Home/Article/listByCid/cid/7');?>">模糊语言论文</a></td>
  </tr>
</table>
</div>
    <!--导航栏结束-->
    
    
        
    <!--位置-->
    <table>
     <tr><td><img src="/Public/img/wei.png" /></td><td>当前位置:</td><td class="wei"><a href="/">主页></a></td><td class="wei"><a href="#">论文></a></td></tr>
    </table>
    
    <!--位置结束-->
    

<!--动态资讯导航------->
<div id="content">
	<ul>
		<?php if(is_array($articleList)): $i = 0; $__LIST__ = $articleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($vo["title"]); ?><br/>
    		<a href="<?php echo U('Home/Article/lunwenPage',array('id'=>$vo[id]));?>">[详情]</a>
    	</li><?php endforeach; endif; else: echo "" ;endif; ?>
    	
    </ul>

        <div id="bottom">
            <?php echo ($page); ?>
        </div>
<div class="clear">
	
</div>

<!--动态资讯导航结束-->
    <!--版权-->
    <div class="enda">
       <table align="center">
          <tr>
            <td class="font">地址：湖北省黄石市磁湖路11号</td>
            <td class="font">邮编：435002</td>
            <td class="font">电话：0714-6573971</td>
            <td class="font">传真：0714-6573971</td>
          </tr>
          <tr>
            <td class="font">湖北师范大学版权所有</td>
            <td class="font">鄂IC备05003319</td>
          </tr>
       </table>
    </div>
    <!--版权结束--> 
 </div> 
</body>
</html>