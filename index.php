<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 16/12/2016
 * Time: 13:44
 */
require 'vendor/autoload.php';
require_once "config.php";
use Controller\indexController;

$app->map(['GET', 'POST'], '/', function ($request, $response, $args) use ($app){

    $indexController = new indexController();

    $datas['self'] = $_SERVER['PHP_SELF'];

    $keyDev = "AIzaSyAKwp2I_Rok-M96Q3mq_e5ocMwZFd0hNtE";
    $client = new Google_Client();
    $client->setDeveloperKey($keyDev);



    //Via Search
    if (isset($_POST['videoId'])) {
        $currentVideoId = $_POST['videoId'];
    } else {
        $currentVideoId = "OaQwcXo7tx4";
    }

    $datas['idFromAjax'] = $_POST['videoIdAjax'];
    echo $_POST['videoIdAjax'];

    //Via URL
    if (isset($_POST['videoUrlSearch'])) {
        $videoUrlSearch = $_POST['videoUrlSearch'];
        $newVideoId = substr($videoUrlSearch, strpos($videoUrlSearch, "=") + 1);
        $headers = get_headers('https://www.youtube.com/oembed?format=json&url=http://www.youtube.com/watch?v=' . $newVideoId);
        if(is_array($headers) ? preg_match('/^HTTP\\/\\d+\\.\\d+\\s+2\\d\\d\\s+.*$/',$headers[0]) : false){
            // video exists
            $currentVideoId = $newVideoId;
        } else {
            $currentVideoId = "OaQwcXo7tx4";
        }
    }


    $youtube = new Google_Service_YouTube($client);
    $relatedVideos = $youtube->search->listSearch('id,snippet',['relatedToVideoId' => $currentVideoId ,'maxResults' => 10, 'type' => 'video']);


    $datas['currentVideoId'] = $currentVideoId;
    $datas['relatedVideos'] = $relatedVideos;


    //$videos = $youtube->videos->listVideos("snippet, contentDetails", array('id' => '34Na4j8AVgA'));


    return $this->view->render($response, 'page/index.twig', $datas);
});

$app->map(['GET', 'POST'], '/search', function ($request, $response, $args) use ($app){

    $keyDev = "AIzaSyAKwp2I_Rok-M96Q3mq_e5ocMwZFd0hNtE";
    $datas['keyDev'] = $keyDev;
    return $this->view->render($response, 'page/search.twig', $datas);


});

$app->map(['GET', 'POST'], '/final', function ($request, $response, $args) use ($app){

    $keyDev = "AIzaSyAKwp2I_Rok-M96Q3mq_e5ocMwZFd0hNtE";
    $datas['keyDev'] = $keyDev;
    return $this->view->render($response, 'page/version.twig', $datas);


});

$app->map(['GET', 'POST'], '/final2', function ($request, $response, $args) use ($app){

    $keyDev = "AIzaSyAKwp2I_Rok-M96Q3mq_e5ocMwZFd0hNtE";
    $datas['keyDev'] = $keyDev;
    return $this->view->render($response, 'page/version2.twig', $datas);


});

$app->run();