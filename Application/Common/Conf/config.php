<?php
return array(
    'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    'MODULE_ALLOW_LIST'    =>    array('Home',),
    'DEFAULT_MODULE'        =>  'Home',  // 默认模块

);