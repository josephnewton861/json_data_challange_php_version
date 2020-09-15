<?php
    $json = file_get_contents('news.json');
    $allData = json_decode($json, true);
    error_reporting(0);

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
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>Kids_insights_challenge</title>
</head>
<body class="body">
    <p class="header">Kids Insights Challenge <i class="icon-code"></i> </p>
    
    <div class="container" >
    <div class="row">
    <?php foreach($allData as $data): ?>
    <div class="col-12 col-md-6">
    <div class="card p-4 mb-3 mt-3 mb-3 rounded-top border border-secondary" style="width: 25rem" style="margin-right: 100px" >
        <?php if ($data['attachments'][0]['title'] == null || $data['attachments'][0]['image_url'] == null || $data['attachments'][0]['original_url'] == null){echo "This card is unfortunately empty";} ?>
    <h2 class="h4 mb-0 pb-3" style="text-align: center">
    <?php  echo $data['attachments'][0]['title'] ?>
    </h2>
<img class="img-fluid pb-3" src="<?php echo $data['attachments'][0]['image_url']; ?>">
<?php if ($data['attachments'][0]['title'] == null || $data['attachments'][0]['image_url'] == null || $data['attachments'][0]['original_url'] == null){echo "";} else echo "<p>Click the link to read more:</p>" ?>
    <a class="link" href="<?php echo $data['attachments'][0]['title_link']; ?>">
    <?php echo $data['attachments'][0]['original_url'] ?>
    </a>
    </div>
    </div>
    <?php endforeach; ?>
    </div>
</div>
    
</body>
</html>