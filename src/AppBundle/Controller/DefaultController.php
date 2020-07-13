<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $channel_id = $request->query->get('q', '');
        //$channel_id = 'UCleL9yejvbCSpUnfCVF1ekw';
        $my_youtube_api_key = 'AIzaSyAgEaQJnDbL7g7arIENvSy8nkIEpHln3As';
        $data =  json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id=' . $channel_id . '&key=' . $my_youtube_api_key), true);
        $s_count = $data['items'][0]['statistics']['subscriberCount'];
        $v_count = $data['items'][0]['statistics']['videoCount'];
        return new Response(
            '<html><body>Subscribers Count: '. $s_count .' <br /> Total videos Count: ' . $v_count . '</body></html>'
        );
    }
}
