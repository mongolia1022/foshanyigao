<?php
$urls = array(
    'http://www.fsjintao.com/zj80xiliegerepingkaichua/r-72.html','http://www.fsjintao.com/wenda/r-9.html','http://www.fsjintao.com/tc76cxilietuilachuang/r-51.html','http://www.fsjintao.com/shengchanzhongxin/','http://www.fsjintao.com/pk70axiliewaipingkaichua/','http://www.fsjintao.com/pc50xiliepingkaichuang/','http://www.fsjintao.com/k71xiliepingkaimen/','http://www.fsjintao.com/jhd50xiliepingkaimen/','http://www.fsjintao.com/gs76xilietuilachuang/r-52.html','http://www.fsjintao.com/gongchenganli/r-125.html','http://www.fsjintao.com/gongchenganli/r-112.html','http://www.fsjintao.com/gongchenganli/r-100.html','http://www.fsjintao.com/fangdaowang/','http://www.fsjintao.com/chanpinzhanshi/mdtp-11.html','http://www.fsjintao.com/biantiao/r-98.html','http://www.fsjintao.com/a90xilietuilachuang/r-20.html','http://www.fsjintao.com/838axilietuilachuang/','http://www.fsjintao.com/80gxilietuilachuang/','http://www.fsjintao.com/76axilietuilachuang/r-55.html','http://www.fsjintao.com/70mxiliepingkaimen/','http://www.fsjintao.com/50kxiliepingkaichuang/','http://www.fsjintao.com/2010xilietuilachuang/','http://www.fsjintao.com/2002xilietuilachuang/r-53.html','http://www.fsjintao.com/150mingkuangmuqiangxilie/','http://www.fsjintao.com/120yyinkuangmuqiangxilie/','http://www.fsjintao.com/110yinkuangmuqiangxilie/r-76.html','http://www.fsjintao.com/',
);
$api = 'http://data.zz.baidu.com/urls?site=www.fsjintao.com&token=AVWHc4tbszj9s21C';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
?>