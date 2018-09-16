<?php require 'fetch_stats.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Magisterskie Badanie | Statystyki</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper cyan">
        <a href="#" class="brand-logo center">Statistics</a>
      </div>
    </nav>

    <div class="container">
      <table class="centered highlight responsive-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>IP</th>
            <th>Access Date</th>
            <th>Redirected To</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($userData as $arrayKey => $array): ?>
            <tr>
            <?php foreach ($array as $value): ?>
              <td><?php echo $value; ?></td>
            <?php endforeach; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
