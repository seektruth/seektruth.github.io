
<!DOCTYPE html>
<html lang="zh-CN">
<head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PHP soup 酒店机票查询预订</title>
    <meta name="description" content="PHP soup提供便捷快速的酒店机票服务">
    <meta name="keywords" content="酒店 机票">
    <meta name="author" content="软件工程基础2.3组">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/site.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>var _hmt = _hmt || [];</script>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico"><script async src="http://c.cnzz.com/core.php"></script></head>
    <style type="text/css" title="text/css" media="all">
    label {
        font-weight: bold;
        color: #300ACC;
    }
    </style>
<body class="home-template">
<!--<div class="site-notice">
<a href="http://blog.bootcdn.cn/bootcdn-support-https/" target="_blank">
<em>BootCDN 已经支持 HTTPS 协议啦！</em></a>
</div>-->
<header class="site-header jumbotron">
    <div class="site-nav">
        <a href="#about">登录</a>
        <a href="#about">关于</a>
    </div>
    <div class="container"><div class="row"><div class="col-xs-12"><h1>PHP soup</h1>
                <p>免费快捷的机票酒店查询服务</p><br>
  <span class="package-amount">共收录了
   <strong>165478</strong> 个全国各地的酒店，<strong>19638</strong>个来自全球<strong>361</strong>家航空公司的航班</span></p>

                <h3><a href="my_hotel.php" style="color: white;">酒店</a> <a href="my_flight.php">机票</a></h3>
                <form id="search" method="get" action="search.php">
                <div class="form-group">
                <input type="text" class="form-control search clearable" placeholder="搜索酒店和航班，例如：杭州 布丁酒店 紫金港大酒店">
                        </i></div></form></div></div></div></header>

<div class="mostused-packages well well-sm text-center hidden-xs hidden-sm">
    <form>
        <fieldset><legend  align="center">Enter your select information in the form below: </legend>

            <p><label for="place">地点: </label>
                <input type="checkbox" name="city" value="beijing" /> 北京
                <input type="checkbox" name="city" value="shanghai" /> 上海
                <input type="checkbox" name="city" value="other" /> 其他</p>

            <p><label for="checkbox">价格: </label>
                <input type="checkbox" name="price" value="100-" /> 100以下
                <input type="checkbox" name="price" value="200-" /> 100-200
                <input type="checkbox" name="price" value="200+" /> 200以上</p>

            <p><label for="sort">价格: </label>
                <input type="radio" name="sort" value="price" id="price"/> 价格
                <input type="radio" name="sort" value="grade" id="rank"/> 评分
                <input type="radio" name="sort" value="popularity" id="hot"/> 人气</p>
        </fieldset>
    </form>
</div>



<!--<div class="container protocal-notice">
<div class="row"><div class="col-xs-12 hidden-xs"><form class="form-inline pull-right"><label>选择协议：</label><div class="btn-group" data-toggle="buttons"><label class="btn btn-default active"><input type="radio" name="options" id="relative" autocomplete="off" checked>自适应</label><label class="btn btn-default"><input type="radio" name="options" id="http" autocomplete="off">http</label><label class="btn btn-default"><input type="radio" name="options" id="https" autocomplete="off">https</label></div><span class="help-block"><a href="http://blog.bootcdn.cn/bootcdn-support-https/" target="_blank" onclick="_hmt.push(['_trackEvent', 'notice', 'click', 'protocal-notice'])">了解详情 <i class="fa fa-info-circle"></i></a></span></form></div></div></div>-->

<main class="packages-list-container" id="all-packages">
    <div class="container" id="hotels">
        <div class="list-group packages">

        <a href="/hotels.php?紫金港大酒店" class="package list-group-item" data-library-name="bootstrap" target="_blank" ">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="package-name">紫金港超级大酒店</h4>
                    <br />
                    <img src="/hotel/0001.jpg" width="100px" height="100px" />
                </div>
                <div class="col-md-9 hidden-xs>
                    <p class="package-description"><pr>浙江省</pr> <city>杭州市</city> 西湖区 申花路798号</p>
                <span> <hot>1024</hot>名用户曾经入住</span><br>
                <span>房价： <price>129</price><i>起</i></span><br>
                <span></i> 评分： <strong><rank>3.5/5</rank></strong></span>
            </div>
        </div>
        <!--<div class="package-extra-info col-md-9 col-md-offset-3 col-xs-12">
        </div>-->
        </a>
        
    </div>
    </div>


</main>


<footer id="footer" class="footer hidden-print">
    <div class="container">
        <div class="row">
            <div class="footer-about col-md-6 col-sm-12" id="about">
                <h4>关于 PHP soup</h4>
                <p>PHP soup是 浙江大学张引老师软件工程基础课程第二项目组支持并维护的开源项目，致力于为提供稳定、快速便捷的免费酒店机票查询和预订服务。项目主要同步于 <a href="https://github.com/onlinePayment/on-line-payment" target="_blank" onclick="_hmt.push(['_trackEvent', 'footer', 'click', 'footer-github.com'])">on-line-payment</a> 仓库。</p>
                <p>自<time>2016年13月32日</time>上线以来已经为超过十万个用户提供了稳定、可靠、便捷服务。</p>
                <p>反馈或建议请发送邮件至：phpsoup@163.com</p></div>

            <div class="footer-links col-md-3 col-sm-12">
                <h4>友情链接</h4>
                <ul class="list-unstyled">
                    <li><a href="http://www.bootcss.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'footer', 'click', 'footer-bootcss.com'])">Bootstrap 中文网</a></li>
                    <li><a href="http://www.ghostchina.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'footer', 'click', 'footer-ghostchina.com'])">Ghost 中国</a></li>
                    <li><a href="http://www.jquery123.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'footer', 'click', 'footer-jquery123.com'])">jQuery 中文 API</a></li>
                    <li><a href="http://github.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'footer', 'click', 'footer-github.com'])">Github</a></li></ul></div>

            <div class="footer-techs col-md-3 col-sm-12">
                <h4>我们用到的技术</h4>
                <ul class="list-unstyled">
                    <li><a href="http://www.bootcss.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'footer', 'click', 'footer-bootcss.com'])">Bootstrap</a></li>
                    <li><a href="http://www.jquery123.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'footer', 'click', 'footer-jquery123.com'])">jQuery</a></li>
                    <li><a href="http://php.net/" target="_blank" onclick="_hmt.push(['_trackEvent', 'footer', 'click', 'footer-php.cn'])">PHP</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copy-right"><span>&copy; 2016</span> </div>
</footer>
<a href="#" id="back-to-top"><i>返回顶部</i></a>

<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js">
</script><script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js">
</script><script src="//cdn.bootcss.com/geopattern/1.2.3/geopattern.min.js"></script>
<script src="//cdn.bootcss.com/zeroclipboard/2.2.0/ZeroClipboard.min.js"></script>
<script src="//cdn.bootcss.com/localforage/1.2.4/localforage.nopromises.min.js"></script>
<!--<script src="js/site.min.js"></script>-->
<script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F24aff315392dc2c9b2805cfa4d8e101a' type='text/javascript'%3E%3C/script%3E"));</script>
<script type="text/javascript">

        $(function()
        {
            $("#search").submit(function(){
                var options=new Object();
                options.data="test";
                options.datatype="text";
                options.type="get";
                options.success=function (response){
                    $("#hotels>div>a").remove();
                    hotels=JSON.parse(response);
                    for(hotel in hotels){
                        $("#hotels>").append('<a href="/hotels.php?'+hotel+`" class="package list-group-item" data-library-name="bootstrap" target="_blank" "><div class="row"><div class="col-md-3"><h4 class="package-name">`+hotel+'</h4><br /><img src="'+hotels[hotel]["picture"]+'" width="100px" height="100px" /></div><div class="col-md-9 hidden-xs><p class="package-description"><pr>'+hotels[hotel]["province"]+'</pr> <city>'+hotels[hotel]["city"]+'</city>  '+hotels[hotel]["location"]+'</p><span> <hot>'+hotels[hotel]["amount"]+'</hot>名用户曾经入住</span><br><span>房价： <price>'+hotels[hotel]["lowest price"]+'</price><i>起</i></span><br><span></i> 评分： <strong><rank>'+hotels[hotel]["rank"]+'</rank>/5</strong></span></div></div></a>')
                    }
                };
                options.url="search.txt"
                $.ajax(options);
                return false;
            });

            $("#price").click(function(){
                a=$("#hotels>div>a");
                pa=$("#hotels>div");
                a.remove();
                a.sort(gsort("price"))
                 for(var i=0;i<a.length;i++){
                    pa.append(a[i])
                }
            });

         $("#hot").click(function(){
                a=$("#hotels>div>a");
                pa=$("#hotels>div");
                a.remove();
                a.sort(gsort("hot"))
                for(var i=0;i<a.length;i++){
                    pa.append(a[i])
                }
            });

            $("#rank").click(function(){
                a=$("#hotels>div>a");
                pa=$("#hotels>div");
                a.remove();
                a.sort(gsort("rank"))
                for(var i=0;i<a.length;i++){
                    pa.append(a[i])
                }
            });

            $('[name=price]').click(function(){
            var first=$('[value=100-]');
            var second=$('[value=200-]');
            var third=$('[value=200\\+]');
            var a=$("#hotels>div>a");
            var f;

            if(first.is(":checked")||second.is(":checked")||third.is(":checked")){
                for(var i=0;i<a.length;i++){
                    $(a[i]).hide();
                }
            }

            else{
                a.show()
            }

            if(first.is(":checked")){
                 f=gfliter("price",function(text){
                        return parseInt(text)<=100;
                    });
                for(var i=0;i<a.length;i++){
                   if(f(a[i])){
                        $(a[i]).show();
                   }
                }
            }
            if(second.is(":checked")){
                f=gfliter("price",function(text){
                        return parseInt(text)>100&&parseInt(text)<200;
                    });
                  for(var i=0;i<a.length;i++){
                   if(f(a[i])){
                        $(a[i]).show();
                   }
            }
        }

            if(third.is(":checked")){
                     f=gfliter("price",function(text){
                        return parseInt(text)>200;
                    });
                  for(var i=0;i<a.length;i++){
                   if(f(a[i])){
                        $(a[i]).show();
                   }
            }
        }
    });

    });

        

        function gfliter(type,what){//生成筛选函数的闭包,type的取值为city或者price,what是一个函数
            return function(a){
                return what($(a).find(type).text())
            };
        }
    
            function gsort(key){//生成排序函数的闭包
                return function(a,b){
                    var x=parseInt($(a).find(key).text());
                    var y=parseInt($(b).find(key).text());
                    if(x===y){
                        return 0;
                    }
                    return x<y? -1:1;
                }
            };
        
    </script>
</body></html>