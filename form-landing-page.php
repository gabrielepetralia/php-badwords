<?php

$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];
$censoredParagraph = str_replace($badword, "***", $paragraph)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <title>Form Landing Page</title>
</head>

<body>
  <div class="container my-5">

    <div class="mb-5">
      <h2>Default Paragraph</h2>
      <span class="fw-semibold">Text:</span>
      <p><?php echo $paragraph ?></p>
      <span class="fw-semibold">Length:</span>
      <span><?php echo strlen($paragraph) ?></span>
    </div>

    <div>
      <h2>Censored Paragraph</h2>
      <span class="fw-semibold">Text:</span>
      <p><?php echo $censoredParagraph ?></p>
      <span class="fw-semibold">Length:</span>
      <span><?php echo strlen($censoredParagraph) ?></span>
    </div>

  </div>
</body>

</html>