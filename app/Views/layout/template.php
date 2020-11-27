<!doctype html>
<html lang="en" class="h-100">

<?= $this->include('layout/header') ?>


<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <?= $this->include('layout/nav') ?>

    </header>

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('layout/footer') ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>