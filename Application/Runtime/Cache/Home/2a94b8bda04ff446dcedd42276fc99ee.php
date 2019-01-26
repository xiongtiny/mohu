<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<link href="/Public/css/all.css" rel="stylesheet" type="text/css"/>
<link href="/Public/css/index.css" rel="stylesheet" type="text/css"/>

<!--轮播图链接以及样式-->
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/js/sl.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  	$.focus("#focus001");
		$.focus("#focus002");
	});
</script>
<!--轮播图结束-->


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
    
    <!--轮播图js开始-->
     	 <div style="width:100%; background-color:#BCBCBC; height:350px;">
         	<div id="width">
    <div class="focus" id="focus001">
		<ul>
			<li><img src="/Public/img/tu11.png" style="width:100%" /></li>
			<li><img src="/Public/img/tu22.png" style="width:100%" /></li>
			<li><img src="/Public/img/tu33.png" style="width:100%" /></li>
		</ul>
	</div>
    		</div>
    	</div>
    	
    <!--轮播图js结束-->
    
     <!--内容-->
     <div class="mid">
     <div class="middle">
       <div class="middmidd">
            <div class="daotwo">
            <div id="width">
            <ul>
              <li class="boxx"><div class="i"><span style="color:#FB037E; margin-left:250px;"><a href="huiyi1.html">更多》</a></span></div></li>   
              <li class="boxxx" style="margin-left:100px;"></li>     
              <li class="boxxxx" style="margin-left:100px;"></li>
              </ul>  
            </div>
      </div>
   </div>
   <div class="fune">
     <div class="funna">
           <div class="nav">
                <ul>
                <?php if(is_array($articleList)): $i = 0; $__LIST__ = $articleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('/Home/Article/show', array('id'=>$vo[id]));?>"><pre><?php echo ($vo["title"]); ?></pre></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
             </div>
           <div class="navv">
                   <div class="ima">
                   <img src="/Public/img/11.png" />
                   </div>
                 <p style="width:345px;">  一、本研究会的性质:<br />
                       &nbsp;&nbsp;&nbsp;&nbsp;模糊语言研究会专业委员会（简称"模糊语言研究会"）是隶属于"中国语文现代文学会"的分支机构。<br />
                       二、本研究会成立背景：<br />
                       &nbsp;&nbsp;&nbsp;&nbsp;1979年，北京师范大学伍铁平教授发表了《模糊语言初探》的论文。
                       <a href="zuzhi.html"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;了解详情</a>              
                 </p>
          </div>
          <div class="right">
              <div class="imaa"> <img src="/Public/img/sy.jpg"/>  </div>
           <div class="lin">
               <table width="350px">
                  <tr><td><a href="zhinan.html">申请入会指南</a></td></tr>
                  <tr><td><a href="#">》点我下载入会申请表</a></td></tr>
               </table>
              </div>
          </div>
        </div>
  </div>
  </div>
  		</div>
    <!--内容结束-->   
    
    <!--链接-->
    <div class="lianjie_a">
    <div id="width">
    	<div class="lianjie_b">相关链接：</div>
        <div class="lianjie_c"><a target="_blank" href="http://www.meeting.edu.cn/meeting/subject/MeetingNews!detail.action?id=8193">湖师新闻</a></div>
        <div class="lianjie_c"><a target="_blank" href="http://news.cnhubei.com/hbrb/hbrbsglk/hbrb04/200811/t503032.shtml">湖北日报</a></div>
        <div class="lianjie_c"><a target="_blank" href="http://www.gmw.cn/01gmrb/2008-11/28/content_863398.htm">光明日报</a></div>
        <div class="lianjie_c"><a target="_blank" href="http://www.kaoyan001.com/yizhanshi/2012/1225/2638383.html">湖师新闻</a></div>
        <div class="lianjie_c"><a target="_blank" href="http://www.gmw.cn/01gmrb/2009-01/09/content_876985.htm">光明日报</a></div>
        <div class="lianjie_c"><a target="_blank" href="http://www.hsdcw.com/html/2015-4-3/701592.htm">东楚网</a></div>
    </div>
    </div>
    <!--链接结束-->
    
   
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