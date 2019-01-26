<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>咨询详情</title>
<link href="/Public/css/all.css" rel="stylesheet" type="text/css"/>
<link href="/Public/css/zixun1.css" rel="stylesheet" type="text/css"/>
<link href="/Public/css/zixun2.css" rel="stylesheet" type="text/css"/>
<link href="/Public/css/demo1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/js/jquery.1.4.2-min.js"></script>
<script type="text/javascript" src="/Public/js/scroller.js"></script>
<script type="text/javascript">
$(function(){
	$(".demo1").scroller();
});
</script>

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
     <tr><td><img src="/Public/img/wei.png" /></td><td>当前位置:</td><td class="wei"><a href="/">主页></a></td><td class="wei"><a href="<?php echo U('Home/Article/listByCid/cid/2');?>">动态资讯></a></td></tr>
    </table>
    <!--位置结束-->
    
   
    <div class="content">
    
      <div class="nav">
      <div class="h1 h2"></div>
  <marquee behavior="alternate" width="350" height="500" onmouseout="this.start()" onmouseover="this.stop()" direction="up" scrollamount="1" align="absmiddle">
          <ul style="padding-left:0;">
           <?php if(is_array($articleList)): $i = 0; $__LIST__ = $articleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('/Home/Article/show', array('id'=>$vo[id]));?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
 </marquee> 
          <div id="font"><a href="<?php echo U('Home/Article/listByCid/cid/2');?>">更多》</a></div>
      </div>
      
      <div class="navRight">
         <div class="h1 h3" id="font"><a href="<?php echo U('Home/Article/listByCid/cid/4');?>">更多》</a></div>
         <div class="funa">
        	
            <!--会员风采图片-->
            <div class="htmleaf-container">
		<div class="full-length">
		    <div class="container">
		    <!-- Team members structure start -->
		    	<div class="team-members row">
		            <?php if(is_array($articleList4)): $i = 0; $__LIST__ = $articleList4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voa4): $mod = ($i % 2 );++$i;?><div class="single-member effect-3">
			            	<div class="member-image">
			                	<img width="200" height="182" src="<?php echo ($voa4["lpic"]); ?>" alt="<?php echo ($voa4["title"]); ?>">
			                </div>
			                <div class="member-info">
			                	<h3><a href="<?php echo U('Home/Article/peoplePage/',array('id'=>$voa4[id]));?>"><?php echo ($voa4["title"]); ?></a></h3>
			                    <p><?php echo ($voa4["description"]); ?></p>
			                </div>
			            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    		            
		        </div>
		    <!-- Team members structure start -->
		    </div>
		</div>
	       </div>
            <!--会员风采结束-->
            
              <div class="h4"></div>
              <div id="banner">
              	<div id="content">
                                <div id="font"><a href="zhuzuo.html">更多》</a></div>
		<div class="scroller demo1">
        
			<div class="inside">
				<?php if(is_array($articleList6)): $i = 0; $__LIST__ = $articleList6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voa6): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Article/zhuzuoPage', array('id'=>$voa6[id]));?>"><img src="<?php echo ($voa6["lpic"]); ?>" alt="jsfoot" /></a><?php endforeach; endif; else: echo "" ;endif; ?>
				
			</div>
            
		</div>
	  </div>
      
      </div>
      
      </div>
    </div>  
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