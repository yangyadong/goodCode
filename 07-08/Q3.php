<?php

// 分别模拟实现Http请求（POST请求，GET请求）

/*
 * curl json data
 */
function curlPost($url, $post_data = null, $cookie=null)
{
    $json_data = json_encode($post_data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    if (!empty($post_data)) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    }
    if (isset($cookie)) {
        curl_setopt($ch,CURLOPT_COOKIE, $cookie);
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

/**
 * curl get data
 */
function curlGet($url, $cookie=null)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if (isset($cookie)) {
        curl_setopt($ch,CURLOPT_COOKIE, $cookie);
    }
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

?>