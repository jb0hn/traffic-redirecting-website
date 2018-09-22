<?php require 'put_stats.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'GA_TRACKING_ID');
    </script>

    <meta charset="utf-8">
    <title>Badanie magisterskie - przekierowanie</title>
    <script type="text/javascript">
      window.location = '<?php echo $newURL; ?>';
    </script>
  </head>
  <body>
  </body>
</html>
