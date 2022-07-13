<?php
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous'/>
 <link rel="stylesheet" href="../css/style.scss">
 <title>Document</title>
</head>
<body>
 <div class="vh-100 overflow-hidden">
<div>
    <div
      class="container-fluid px-4 py-3 d-flex justify-content-between align-items-center"
    >
      <div class="h-100">
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png"
          alt="logo_spotify"
          srcset=""
          class="h-100"
        />
      </div>
      <div class="d-flex gap-4">
        <select class="form-select" v-model="selectedGenre">
          <option value="rock">Rock</option>
          <option value="pop">Pop</option>
          <option value="jazz">Jazz</option>
          <option value="metal">Metal</option>
        </select>
        <button type="button" class="btn btn-outline-success" @click="$emit('fetchGenre', selectedGenre)">Filtra per genere</button>
      </div>
    </div>
  </div>

   <div class="album-container">

   <div class="container p-5 h-100 overflow-auto">
    <div class="row h-100 row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-1 justify-content-between align-items-center">
     <?php foreach ($db as $album) { ?>
      <div class="col py-3">
        <div class="card p-3 d-flex flex-column align-items-center">
          <img src="<?php echo $album['poster'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center fw-bold"><?php echo strtoupper($album['title']) ?></h5>
            <p class="card-text text-center text-white-50"><?php echo $album['author'] ?></p>
            <p class="card-text text-center pb-3 text-white-50"><?php echo $album['year'] ?></p>
          </div>
        </div>
      </div>
     <?php } ?>
    </div>
   </div>

   </div>

  </div>
</body>
</html>