<!doctype html>
<html lang="en">

<?php if (isset($this->data['user'])) {
    $this->extend('template/navbarAfterLogin');
} else {
    $this->extend('template/navbarLogin');
}
?>

<?php
$data = $this->data;
$item = $data['items'];
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Home</title>

</head>
<?= $this->section('content'); ?>

<body>

    <?= dd($this->data) ?>
</body>
<?= $this->endSection(); ?>

</html>