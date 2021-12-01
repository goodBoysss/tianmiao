<?php

require "./vendor/autoload.php";

$excel = new Tianmiao\Excel\ExcelExport();

//$excel->load("./支付宝批量付款文件上传模板.xls");

$excel->write(array("支付宝批量付款文件模板（前面两行请勿删除）"));
$excel->write(array("序号（必填）","收款方支付宝账号（必填）",'收款方姓名（必填）','金额（必填，单位：元）',"备注（选填）"));
$excel->write(array(
    array("1", '17610151971', '你好', 1, ""),
));

$excel->merge("A1","E1");
$excel->center("A1:E1");

$excel->save(__DIR__ . "/output.xls");