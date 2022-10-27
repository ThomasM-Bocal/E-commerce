<!DOCTYPE html>
<html>

<head>
  <title>Atelier 1 - Presentation</title>
</head>

<body>

  <h1>Presentation</h1>
  <p>Je me presente, je m'appelle <?php echo "$prenom $nom" ?></p>

  <?php if ($age < 18) { ?>
    <p></p>
  <?php } else { ?>
    <p>Je ne veux pas reussir ma vie </p>
  <?php } ?>

  <h1>Sing !</h1>
  <h2><?php echo $title ?></h2>
  <img src="<?php echo $image ?>" />
  <?php for ($i = 0; $i < 5; $i++) { ?>
    <p><?php echo $paroles ?></p>
  <?php } ?>
</body>

</html>