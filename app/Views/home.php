<?= $this->extend('layout') ?>
<?= $this->section('title') ?>
Iron Software
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main class=" background">
<?= view('components/navbar') ?>

<?= view('components/hero') ?>

<?= view('components/features') ?>

<?= view('components/why_pdf') ?>
  <?= view('components/early_access') ?>

  <?= view('components/signup') ?>
</main>

<?= $this->endSection() ?>