<?= $this->extend('Layouts/layout') ?>
<?= $this->section('content') ?>

<main class="col-sm-10 bg-body-tertiary dashboard">
    <div class="container-fluid">
        <h1 class="h2">Products</h1>
        <p>Here you can manage your products, add new products, edit existing ones, and keep track of your inventory.</p>
        <?php if (isset($error)): ?>
            <div class="h2 text-center" style="margin-top: 5rem;">
                <?= esc($error) ?>
            </div>
        <?php else: ?>
        <div class="row my-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Product List</span>
                        <a href="<?= base_url('products/create') ?>" class="btn btn-primary btn-sm">Add New Product</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($products as $product): ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= esc($product['name']) ?></td>
                                        <td>$<?= esc($product['price']) ?></td>
                                        <td><?= esc($product['stock']) ?></td>
                                        <td>
                                            <a href="<?= base_url('products/detail/' . $product['id']) ?>" class="btn btn-sm btn-info">View</a>
                                            <!-- Action buttons (Edit, Delete) -->
                                            <a href="<?= base_url('products/edit/' . $product['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <!-- Delete button would typically trigger a confirmation modal -->
                                            <!-- For simplicity, we will just link to a delete route -->
                                            <a href="<?= base_url('products/delete/' . $product['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>


</main>

<?= $this->endSection() ?>