<?php
function redirect_post($url, $params){
    $html ="<form id='post_form' method='post' action='$url'>%s</form>";
    $dataHtml = '';
    foreach($params as $index=>$value){
        $dataHtml .="<input type='hidden' name='$index' value='$value'/>";
    }
    $html =sprintf($html,$dataHtml);
    $script ='<script type="text/javascript">'.
        'document.getElementById("post_form").submit();'.
        '</script>';
//        echo htmlspecialchars($html.$script);
    echo $html.$script;
}
$href ="http://localhost/huanpuji/Controller/test.php";
$params =array("sessionid"=>"gnhq5453vghlhqpp2840h0f9t4");

redirect_post($href, $params);