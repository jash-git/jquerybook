<?php /* Smarty version Smarty-3.1.16, created on 2014-12-22 14:38:22
         compiled from "F:\wamp\webpage\market\Smarty\templates\newsinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:6911548fe2366a92b3-30160527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0183ba3cb5073b8813d115e4968ff442bbd160dc' => 
    array (
      0 => 'F:\\wamp\\webpage\\market\\Smarty\\templates\\newsinfo.html',
      1 => 1419230301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6911548fe2366a92b3-30160527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_548fe23679d4f4_45113143',
  'variables' => 
  array (
    'id' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fe23679d4f4_45113143')) {function content_548fe23679d4f4_45113143($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=8" />
    <title>产品之家</title>
    <link href="css/css.css" rel="stylesheet" type="text/css" />
    <SCRIPT src="js/jquery-1.11.1.min.js" type=text/javascript></SCRIPT>
    <SCRIPT src="js/fun.js" type=text/javascript></SCRIPT>
</head>
<body>
<div class="top">
    <div class="l"><a href="index.php"></a></div>
    <div class="r">
        <div class="m1" onmouseout="b1()" onmouseover="a1()"><a href="about_us.html"></a>
            <ul style="display:none;" id="dhx" class="aa">
                <li><a href="about_us.html">关于我们</a></li>
                <li><a href="contact_us.html">联系我们</a></li>
            </ul>
        </div>
        <div class="m2"><a href="product_list.php" id="a2"></a>
            <ul style="display:none;" id="dhx1" class="aa">
                <li><a href="product_list.php">产品展示</a></li>
            </ul>
        </div>
        <div class="m3" onmouseout="b3()" onmouseover="a3()"><a href="news.php"></a>
            <ul style="display:none;" id="dhx2" class="aa">
                <li><a href="news.php">业内新闻</a></li>
            </ul>
        </div>
        <div class="m4"><a href="agent.php"></a></div>
        <script>
            $(function(){
                changeStatus("keyword","请输入产品名称关键字");
            });
        </script>
    </div>
</div>
<div class="head">　　
    <div class="l">
        <div class="t1">
            <div class="t3"><P><U>新闻</U></P></div><br/>
            <ul>
                <li class="bl"><a href="news.php">业内新闻</a></li>
            </ul>
            <BR/><BR/>
            <div class="c">
                <form action="product_list.php" method="post"  onsubmit="return chksearch(this)">
                    <div class="p3"><div class="p3_1"><input name="keyword" id="keyword" type="text" value="请输入产品名称关键字" style="color:#bdc0c5;"></div>
                        <div class="p3_2"><input type="image" name="submit" src="images/zoom1.jpg" style="display: block; float: left; height: 26px; width: 26px;"/></div>
                        <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></div>
                </form>
            </div>
            <div class="f">
                电话:0431-84978981<BR/>
                地址:长春市高新区锦河街155号电子信息楼三层301室
            </div>
        </div>
    </div>
    <div class="r">
        <div class="t5"></div>
        <div class="c3"><b><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</b></div>
        <div class="cc">
            <?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>

        </div>
    </div>
</div>
<div class="food">
    <a href="index.php"><div class="l"></div></a>
    <div class="l1"><BR/><a href="www.mingribook.com/contact.php">联系我们</a> | <a href="www.mingrisoft.com">公司网站</a> | <a href="www.mingribook.com/map.php">企业地图</a><BR/>
        电话:0431-84978981<BR/>
        <a href="www.mingribook.com">长春市高新区锦河街155号电子信息楼三层301室</a><br/>© Copyright 吉林省明日科技有限公司.</div>
    <div class="r"><p>明日科技出品的编程词典系列产品是面向各级程序开发人员的编程资源库，它是吉林省明日科技有限公司从十多年编程教育过程中提炼出海量的精品源码、项目模块、典型范例和技巧、精彩视频教程，是集学习和开发于一体的专业编程资源库。</p></div>
</div>
</body>
</html><?php }} ?>
