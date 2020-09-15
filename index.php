<?php
    $json = file_get_contents('news.json');
    $allData = json_decode($json, true);

   foreach($allData as $data) {
      $title = $data['attachments'][0]['title'];
        $image = $data['attachments'][0]['image_url'];
      $title_link = $data['attachments'][0]['title_link'];
       echo $title;
       echo $image;
   }

?>