<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE["name"] ?></title>

    <link rel="shortcut icon" href="<?= asset("images/favicon.png"); ?>" />
    <link rel="stylesheet" href="<?= asset("css/bootstrap.min.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("css/custom.css"); ?>"/>

    <script src="<?= asset("js/jquery-3.5.1.min.js") ?>"></script>
    <script src="<?= asset("js/jquery.inputmask.bundle.js") ?>"></script>
    <script src="<?= asset("js/bootstrap.min.js") ?>"></script>
  </head>

  <body cz-shortcut-listen="true">
    <main class="container">
      <!-- CONTAINER !-->
      <?= $v->section("container"); ?>
      <!-- END CONTAINER !-->

      <!-- FOOTER !-->
      <?php include("_footer.php"); ?>
      <!-- END FOOTER !-->

      <!-- START SCRIPTS !-->
      <?= $v->section("scripts"); ?>
      <!-- END SCRIPTS !-->
    </main>
  </body>
</html>
