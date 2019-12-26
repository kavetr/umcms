<?php 
return array (
  'REWRITE' => 
  array (
  ),
  'APP' => 
  array (
    'DEBUG' => true,
    'ERROR_URL' => '',
    'LOG_ON' => false,
    'LOG_PATH' => BASE_PATH . 'cache/log/',
    'URL_HTTP_HOST' => '',
    'TIMEZONE' => 'PRC',
    'ENCODE_KEY' => 'pqL8AR',
    'COOKIE_PRE' => 'um_',
    'HTML_CACHE_ON' => false,
    'HTML_CACHE_PATH' => BASE_PATH . 'cache/html_cache/',
    'HTML_CACHE_RULE' => 
    array (
      'default' => 
      array (
        'index' => 
        array (
          'index' => 3000,
        ),
        'column' => 
        array (
          '*' => 3000,
        ),
      ),
    ),
  ),
  'DB' => 
  array (
    'DB_TYPE' => 'MysqlPdo',
    'DB_HOST' => 'localhost',
    'DB_USER' => 'root',
    'DB_PWD' => 'microcosm',
    'DB_PORT' => '3306',
    'DB_NAME' => 'umcms',
    'DB_CHARSET' => 'utf8',
    'DB_PREFIX' => 'um_',
    'DB_CACHE_ON' => false,
    'DB_CACHE_PATH' => BASE_PATH . 'cache/db_cache/',
    'DB_CACHE_TIME' => 600,
    'DB_PCONNECT' => false,
    'DB_CACHE_CHECK' => true,
    'DB_CACHE_FILE' => 'cachedata',
    'DB_CACHE_SIZE' => '15M',
    'DB_CACHE_FLOCK' => true,
  ),
  'TPL' => 
  array (
    'TPL_TEMPLATE_PATH' => '',
    'TPL_TEMPLATE_SUFFIX' => '.php',
    'TPL_CACHE_ON' => false,
    'TPL_CACHE_TYPE' => '',
    'TPL_CACHE_PATH' => BASE_PATH . 'cache/tpl_cache/',
    'TPL_CACHE_SUFFIX' => '.php',
    'TOKEN_ON' => true,
    'TOKEN_KEY' => '4X3ZZGs',
  ),
  'ver_name' => 'umcmsApp 1.4.7',
  'ver_date' => '20171023',
  'copyright' => '由UMcms提供技术支持',
  'sitename' => 'UMcms建站系统',
  'siteurl' => 'http://www.umcms.net/',
  'keywords' => 'UMcms,建站系统,cms,方便,高效,灵活,实用,开源',
  'description' => 'UMcms是一款高效,灵活,实用,开源的企业建站系统,基于PHP和mysql技术,不纠结于任何设计模式.',
  'telephone' => '16609550931',
  'QQ' => 596324841,
  'email' => 'info@umui.net',
  'address' => '甘肃 兰州',
  'icp' => 'UM96561001',
  'fileupSize' => '90000000000',
  'imgupSize' => 70000000,
  'ifwatermark' => true,
  'watermarkImg' => 'logo.png',
  'watermarkPlace' => 9,
  'sortMaxwidth' => 300,
  'sortMaxheight' => 300,
  'coverMaxwidth' => 225,
  'coverMaxheight' => 76,
  'thumbMaxwidth' => 271,
  'thumbMaxheight' => 271,
  'allowType' => 'jpg,bmp,gif,png,flv,mp4,mp3,wma,mp4,7z,zip,rar,ppt,txt,pdf,xls,doc,swf,wmv,avi,rmvb,rm',
  'serchnum' => 10,
);