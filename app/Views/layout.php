<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $this->renderSection('title') ?: 'IronPDF for C++ Beta Program | Iron Software' ?>
  </title>

    <meta name="description" content="Join the IronPDF for C++ Beta Program. Generate, modify, extract and manage PDFs in C++ applications with high performance.">
    <meta name="robots" content="index, follow">

  <!-- Bootstrap 5 CSS (latest) -->
    <link rel="preload" href="<?= base_url('css/vendor/bootstrap.min.css') ?>" as="style">
<link rel="stylesheet" href="<?= base_url('css/vendor/bootstrap.min.css') ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="preload" as="style"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
      onload="this.onload=null;this.rel='stylesheet'">

<noscript>
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
</noscript>
   <link rel="stylesheet" href="<?= base_url('css/style.css') ?>?v=<?= filemtime(FCPATH . 'css/style.css') ?>">
</head>

<body>

  <?= $this->renderSection('content') ?>

    <script src="<?= base_url('js/vendor/bootstrap.bundle.min.js') ?>" defer></script>
</body>

</html>