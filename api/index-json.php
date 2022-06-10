<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vue Dischi</title>

    <!-- BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->

    <link rel="stylesheet" href="../css/style.css">

    <!-- AXIOS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- VUEJS -->

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

</head>
<body>

  <div id="root">

    <!-- HEADER -->

    <header>

        <div class="ms-header">

            <a href="https://www.spotify.com/">
                <img src="../img/spotify-logo.png" alt="Spotify logo" />
            </a>

        </div>

    </header>

    <!-- /HEADER -->
  
    <!-- MAIN -->
    <main id="root">
        <div class="container">
        <div class="row row-cols-3 row-cols-lg-5 mt-4">

            <div v-for="item in database" class="song-card text-center p-3 mb-3">
                <img :src="item.poster" :alt="item.title" />
                <h5 class="p-3">{{ item.title }}</h5>
                <span class="d-block">{{ item.author }}</span>
                <span class="d-block">{{ item.year }}</span>
            </div> 
                    
        </div>
        </div>    
    </main>

    
    </div>  

    <!-- /MAIN -->
    <script src="./script.js"></script>
</body>
</html>