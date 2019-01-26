<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>组织机构</title>
<link href="/Public/css/all.css" rel="stylesheet" type="text/css"/>
<link href="/Public/css/zizhi.css" type="text/css" rel="stylesheet" />
<link href="/Public/css/fcai.css" type="text/css" rel="stylesheet" />
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
    <!--位置-->
    <table style="margin:20px 0;">
     <tr><td><img src="/Public/img/wei.png" /></td><td>当前位置:</td><td class="wei"><a href="/">主页></a></td><td class="wei"><a href="<?php echo U('Home/Page/show/',array('title' => 'zuzhi'));?>">组织机构></a></td></tr>
    </table>
    
    <!--位置结束-->

     <div class="content">
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

       <div class="quanjian">
       <div class="jianjie"></div>
         <div class="twoQuan">
             <div class="imma"><img src="/Public/img/11.png" /></div>
             <div class="liti">一、本研究会的性质：</div>
             <p>模糊语言研究专业委员会（简称"模糊语言研究会"）是隶属于"中国语文现代化学会"的分支机构。</p>
             <div class="liti">二、本研究会成立的背景：</div>
             <p style="line-height:2.2em;">1979年，北京师范大学伍铁平教授发表了《模糊语言初探》的论文，这标志着中国学者研究模糊语言学的开端。中国学者从事模糊语言研究已历30余年，出版和发表了一批具有高质量的学术论著。这些论著在模糊语言学的基本理论研究、应用研究和学科体系建设等方面皆取得了突破性的进展。然而有一个突出的问题一直制约着模糊语言研究的深入发展，这就是模糊语言研究者缺乏全国性学术交流的学术团体。</p>
             <p style="line-height:2.2em;">湖北师范大学黎千驹教授于2008年发起并组织召开了首届"中国模糊语言学术研讨会"；2009年11月，在湖北师范大学召开了第二届研讨会；2011年11月在曲靖师范学院召开了"第三届中国模糊语言学术研讨会"；2013年10月在湖北师范大学召开了"第四届中国模糊语言国际学术研讨会"。该研讨会成为了中国模糊语言学者学术交流的平台，成为了团结中国模糊语言学者的桥梁与纽带。</p>
             <p style="line-height:2.2em;">2015年10月，黎千驹教授邀请国内一些研究模糊语言的学者，在湖北师范大学主持召开了成立"中国语文现代化学会模糊语言研究专业委员会"的筹备会议，随后由黎千驹教授向中国语文现代化学会提交了申请。中国语文现代化学会经过常务理事会的通信评审，于2016年7月5日批复，同意黎千驹教授筹建中国语文现代化学会模糊语言研究专业委员会。</p><br />
             <div class="liti">三、本研究会的业务范围和主要任务：</div><br />
             <p>（一）本研究会所涉及的学科专业主要是模糊语言学、模糊语义学、模糊语法学、模糊语音学、模糊修辞学等。具体将围绕如下几个方面开展学术研究：</p>
             <p>1.开展模糊语言学的基本理论研究及学科建设研究。</p>
             <p>2.开展模糊语义学、模糊语法学、模糊语音学、模糊修辞学等分支学科的基本理论研究及学科建设研究。</p>
             <p>3.开展模糊语言应用研究。</p>
             <p>4.促进相关学科的学术交流。</p>
             <p>（二）一般两年举行一次全国性的学术研讨会。并根据需要与可能，不定期召开专题学术讨论会。</p>
             <p>（三）研讨会承办单位由会员申报、常务理事会讨论批准。</p>
             <p>（四）编辑出版《模糊语言研究》。</p><br />
       </div>
     </div>
    </div> 
    <div class="clear"></div>
    
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