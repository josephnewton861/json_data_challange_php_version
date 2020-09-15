<?php
    $json = file_get_contents('news.json');
    $allData = json_decode($json, true);

//    foreach($allData as $data) {
//       $title = $data['attachments'][0]['title'];
//         $image = $data['attachments'][0]['image_url'];
//       $title_link = $data['attachments'][0]['title_link'];
//    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"href="index.css">
    <title>Kids_insights_challenge</title>
</head>
<body>
<div class="container" >
<h1>Kids Insights Challenge<h1>
</div>
    
</body>
</html>