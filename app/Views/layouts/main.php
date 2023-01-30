<!DOCTYPE html>
<html lang="en">

<?= $this->include('layouts/head') ?>

<head>

</head>

<body>
    <?= $this->include('layouts/navbar') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('layouts/footer') ?>
    <?= $this->include('layouts/script') ?>
</body>

</html>