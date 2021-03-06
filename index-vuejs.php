<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- vue js -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  <!-- axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/master.css">
  <title>Vue dischi</title>
</head>
<body>
  <div id="app" >
    <header>
      <div class="container">
        <img src="img/download.png" alt="logo">
      </div>
    </header>
    <div class="titolo">
      <label for="">Select a genre</label>
      <select id="genre" name="genre" v-model="select">
        <option v-for="genre in genre" :value="genre">{{genre}}</option>
      </select>
    </div>

    <div class="cds-container">
      <div class="cd" v-for='album in sorted' v-if="(album.genre == select) || (select == 'All') || (select == '') ">
        <img :src="album.poster" :alt="album.title">
        <h3>{{ album.title }}</h3>
        <span class="author">{{ album.author }}</span>
        <span class="year">{{ album.year }}</span>
      </div>
    </div>
  </div>

 <script src="js/script.js" charset="utf-8"></script>
</body>
</html>

