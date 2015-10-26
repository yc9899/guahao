<?php
return array(
	//'配置项'=>'配置值'
	    //数据库配置信息
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'guahao', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => 'chao142536', // 密码
    'DB_PORT' => 3306, // 端口
    'DB_PREFIX' => 'gh_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG' => TRUE, // 调试模式
    'SESSION_AUTO_START' => 'true', //是否启用session
    'URL_MODEL'=>'2',//URL模式
    'URL_CASE_INSENSITIVE' =>true, //URL大小写
    'DB_LIKE_FIELDS'=>'title|name|date',   //模糊查询
    
            //Auth权限设置
        'AUTH_CONFIG' => array(
            'AUTH_ON' => true,  // 认证开关
            'AUTH_TYPE' => 1, // 认证方式，1为实时认证；2为登录认证。
            'AUTH_GROUP' => 'gh_auth_group', // 用户组数据表名
            'AUTH_GROUP_ACCESS' => 'gh_auth_group_access', // 用户-用户组关系表
            'AUTH_RULE' => 'gh_auth_rule', // 权限规则表
            'AUTH_USER' => 'gh_user', // 用户信息表
        ),
);

