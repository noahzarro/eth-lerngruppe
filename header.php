<nav  class="nav nav-tabs">
  <?php
    $string = file_get_contents("./nav.json");
    $json_a = json_decode($string);
    foreach ($json_a as $file) {
      // create link
      echo '<a href="'.$file[0].'.php" class="nav-item nav-link';
      if ($current_file ==$file[0]){
        echo ' active';
      }
      echo '">';

      // display link content
      // display icon
      echo '<i class="fa fa-';
      echo $file[2];
      echo '"></i>';

      // display page name
      echo $file[1];

      // end link
      echo "</a>";
    }
    ?>
</nav>
