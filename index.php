<?php
    include __DIR__ . '/database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/master.css">
  <title>Vue dischi</title>
</head>
<body>
  
    <header>
      <div class="container">
        <img src="img/download.png" alt="logo">
      </div>
    </header>
    <div class="titolo">
      <label for="">Select a genre</label>
      <select id="genre" name="genre" v-model="select">
      <!-- option -->
      <?php
        foreach($genre as $genre): ?>
        <option><?php echo $genre ?></option>
      <?php endforeach; ?>
      <!-- option -->
      </select>
    </div>

    <div class="cds-container">
    <?php 
      foreach($database as $album) : ?>
      <div class="cd">
        <img :src="<?php echo $album['poster']?>" alt="<?php echo $album['title']?>">
        <h3><?php echo $album['title']?></h3>
        <span class="author"><?php echo $album['author']?></span>
        <span class="year"><?php echo $album['year']?></span>
      </div> 
    <?php endforeach; ?>
    </div>
  

 <!-- <script src="js/script.js" charset="utf-8"></script> -->
</body>
</html>

