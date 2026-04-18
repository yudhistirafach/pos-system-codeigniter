<?= $this->extend('Layouts/layout') ?>
<?= $this->section('content') ?>    

<main class="col-sm-10 bg-body-tertiary dashboard">
    <div class="container-fluid">
        <h1 class="h2">Product Detail</h1>
        <div class="card mt-5">
            <div class="card-header">
                <h5 class="card-title"><?= esc($product['name']) ?></h5>
            </div>
            <div class="card-body">
                <p class="card-text">Price: $<?= esc($product['price']) ?></p>
                <p class="card-text">Stock: <?= esc($product['stock']) ?></p>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection() ?>