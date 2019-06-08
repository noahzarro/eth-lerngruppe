<nav  class="navbar navbar-expand-md navbar-light bg-light">
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav">
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
          echo '<i class="';
          echo $file[2];
          echo '"></i> ';

          // display page name
          echo $file[1];

          // end link
          echo "</a>";
        }
        ?>
    </div>
  </div>
</nav>
