<?php 
    include('../partials/header.php');
    include('../partials/sidebar.php');
    include('../database.php');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <h1 class="h2 mt-3">Add New Articles</h1>

    <form action="<?= $domain ?>/posts/store.php" method="GET">
        <?php include('_form.php') ?>
    </form>

</main>

<?php include('../partials/footer.php') ?>