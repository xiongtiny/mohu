<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/css/all.css" rel="stylesheet" type="text/css"/>
<link href="/Public/css/fcai.css" rel="stylesheet" type="text/css"/>
<link href="/Public/css/fcai1.css" rel="stylesheet" type="text/css"/>
<title>会员风采</title>
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
         
    
    <div class="content">
    <!--位置-->
    <table>
     <tr><td><img src="/Public/img/wei.png" /></td><td>当前位置:</td><td class="wei"><a href="index.html">主页></a></td><td class="wei"><a href="fengcai.html">会员风采></a></td></tr>
    </table>
    <!--位置结束-->

       <div class="nav">
      <div class="h1 h2"></div>
          <ul style="padding-left:0;">
           <li> &nbsp;&nbsp;&nbsp;<span id="font"><a href="<?php echo U('Home/Article/listByCid/cid/4');?>">更多》</a></span></li>
           <?php if(is_array($articleList4)): $i = 0; $__LIST__ = $articleList4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo4): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Home/Article/peoplePage',array('id'=>$vo4[id]));?>"><?php echo ($vo4["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
           
           
          </ul>
                <div class="h1 h3"></div>
          <ul style="padding-left:0;">
           <li><a href="#">第一届学术委员会名单</a></li>
           <li><a href="#">理事会名单</a></li>
          </ul>

      </div>
		
       <div class="rightNav">
       
       <div class="h4"></div>
       <div style="width:1000px; height:500px;background-color:#E4E4E4; margin:0 auto;">
       <div id="font"><a href="#">更多》</a></div>
	       <?php if(is_array($articleList4)): $i = 0; $__LIST__ = $articleList4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voa4): $mod = ($i % 2 );++$i;?><div class="wrap"> 
				<a href="#x"> <img src="<?php echo ($voa4["lpic"]); ?>" alt='<?php echo ($voa4["title"]); ?>' />
				  <p><span><?php echo ($voa4["auther"]); ?>
				    <br />
				   <?php echo ($voa4["title"]); ?></span> </p>
				  </a> </div>
				<!-- end wrap --><?php endforeach; endif; else: echo "" ;endif; ?>

  		</div>
       </div>
</div>
<div class="clear">
	
</div>


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