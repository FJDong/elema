<?php
//载入ucpass类
require_once('lib/Ucpaas.class.php');

//初始化必填
//填写在开发者控制台首页上的Account Sid
$options['accountsid']='ab718df2241b61cc2edf084f317d31da';
//填写在开发者控制台首页上的Auth Token
$options['token']='cee2df5c89c94d6766692c58d923afc2';

//初始化 $options必填
$ucpass = new Ucpaas($options);