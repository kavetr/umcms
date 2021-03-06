<?php if(!defined('APP_NAME')) exit;?>
<script type="text/javascript" src="__PUBLICAPP__/js/jquery.pin.min.js"></script>
<script type="text/javascript">
//<![CDATA[
jQuery(function() {
	$("#Lmenu").pin({containerSelector: ".container"});
});
//]]>
</script>
<div class="jumbotron">
  <div class="container subhead">
    <h1>UMcms VIP demo</h1>
    <p class="lead">该模板采用前端框架式架构，其简单灵巧结合了JQuery</p>
  </div>
</div>

<div class="container clearfix">
   <div class="row-fluid">
      {include file="pCom"}
      <div class="span9 mt50">
         <div class="well">
               <ul class="breadcrumb">
                 <li><i class="icon-home"></i><a href="{url()}"> 首页</a> <span class="divider">/</span></li>
                 {loop $daohang $vo}
                     <li><a href="{$vo['url']}">{$vo['name']}</a> <span class="divider">/</span></li>
                 {/loop}
               </ul>
                 <form method="get" action="{url('index/search')}" class="form-search">
                  <div class="input-append">
                    <input name="r" type="hidden" value="default/index/search" />
                    <select name="type" class="input-small">
                       <option value="all">全部</option>
                       <option value="news">文章</option>
                       <option value="photo">图集</option>
                     </select>
                     <input type="text"  name="keywords" class="search-query" id="appendedInputButton" placeholder="站内搜索..." >
                     <input type="submit" value="搜 索" class="btn input-small">
                   </div>
               </form>
            <ul class="thumbnails row-fluid">
              {loop $plist $vo}
                  <li class="span3">
                    <a title="{$vo['title']}" href="{$vo['url']}" target="_blank" class="thumbnail"><img alt="{$vo['title']}" src="{$vo['picturepath']}"></a>
                  <div class="caption text-center">
                    <h6>{$vo['title']}</h6>
                  </div>
                  </li>
              {/loop}   
             </ul>
            <div class="pagination">{$page}</div>
            
         </div>
      </div>
   </div>
</div>