<!doctype html>
<html>
  <body>
     <?php
      $name = isset($_GET['name']) ? $_GET['name']:
      'Unknown';
      ?>
      <h1>Hi <?= $name;?> </h1>
      </body>
     </html>