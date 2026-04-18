<?= $this->extend('Layouts/layout') ?>
<?= $this->section('content') ?>
<main class="col-sm-10 bg-body-tertiary dashboard">
    <div class="container-fluid">
        <h1>Create Product</h1>
        <div class="product-form-card">
            <?php if (session()->getFlashdata('errors')): ?>
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0">
                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('products/store') ?>" method="post" enctype="multipart/form-data" class="mt-3">
            <div class="row">
                <div class="col mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="product_name" required>
                </div>
                <div class="col mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" required>
                </div>
                <div class="col mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="product_image" accept="image/*">    
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Create Product</button>
        </form>
        </div>
    </div>
</main>
<?= $this->endSection() ?>