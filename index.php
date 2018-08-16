<?php
//php图片转文字基础版
//api文档http://ai.baidu.com/docs#/OCR-PHP-SDK/top
require_once 'AipOcr.php';

// 你的 APPID AK SK
const APP_ID = '11683668';
const API_KEY = 'jPj2YmvAQmC1IAEj4YDr6iGj';
const SECRET_KEY = '4MgsmD19YqMK7ChtkNOYdYmVDDepfGeN';

$client = new AipOcr(APP_ID, API_KEY, SECRET_KEY);

// 身份证识别
$idCardSide = "front";//front - 身份证含照片的一面 && back - 身份证带国徽的一面
echo json_encode($client->idcard(file_get_contents('img/idcard.jpg'), $idCardSide), JSON_PRETTY_PRINT);

// 银行卡识别 
//echo json_encode($client->bankcard(file_get_contents('img/bankcard.jpg')));

// 通用文字识别(含文字位置信息)
// echo json_encode($client->general(file_get_contents('img/general.png')));


// 通用文字识别(不含文字位置信息)
// echo json_encode($client->basicGeneral(file_get_contents('img/general.png')));

// 网图OCR识别
// echo json_encode($client->webImage(file_get_contents('img/general.png')));

// 生僻字OCR识别
// echo json_encode($client->enhancedGeneral(file_get_contents('img/general.png')));

//更多识别方式跟参数，请看API文档