<?php

function get_post_urls()
{
    $urls = $_POST['urls'];
    $results = array();
    foreach ($urls as $url) {
        $post_id = url_to_postid($url);
        $post = get_post($post_id);
        if ($post) {
            $read_more = get_field('read_more', $post_id);
            $results[] = array(
                'url' => $url,
                'read_more' => $read_more,
            );
        }
    }
    return ['data' => $results];
}
