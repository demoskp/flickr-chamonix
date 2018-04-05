<?php include('get_images.php') ?>
<html>
<head>
    <title>Images Of Chamonix</title>
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>
<body>
  <main>
    <div class="container">


      <div class="row">
      <?php
          for ($i = 0; $i < $no_images; $i++):
            $photo = $flickr->items[$i];

      ?>

          <figure class="col">
            <img class="images" src="<?= $photo->media->m; ?>" alt="<?= $photo->title; ?>">
            <span class="title"><?= $photo->title; ?> by <?= $photo->author; ?> </span>

          </figure>

        <?php endfor; ?>

        </div>
      </div>
  </main>
</body>
</html>
