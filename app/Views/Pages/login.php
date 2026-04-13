<?= $this->extend('Layouts/auth-layout') ?>
<?= $this->section('content') ?>

<div class="d-flex align-items-center justify-content-center min-vh-100 w-100" style="background-color: #f8f9fa;">
    <div class="d-flex rounded-4 overflow-hidden shadow" style="width: min(90vw, 1000px); min-height: 500px; background: #fff;">

        <!-- Left Box -->
        <div class="d-flex rounded-4 justify-content-center align-items-center flex-column left-box" style="width: 50%; background-color: #b8d4e0; padding: 3rem 2rem;">
            <img src="<?= base_url('assets/images/troli.png') ?>" alt="Keranjang Belanja" style="width: 180px;">
            <h2 class="text-center mt-4 fw-semibold">Welcome Back!</h2>
            <p class="text-center text-muted mb-0">Please login to your account</p>
        </div>

        <!-- Right Box -->
        <div class="d-flex flex-column justify-content-center" style="width: 50%; padding: 3rem 3.5rem;">
            <h1 class="text-center mb-4 fw-normal">Login</h1>
            <?php if (session()->getFlashdata('errors')): ?>
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0">
                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('login') ?>" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control form-control-md" id="username" name="username" placeholder="Enter your username">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-md" name="password" id="password" placeholder="Enter your password">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-lg px-4">Login</button>
                </div>
            </form>
        </div>

    </div>
</div>

<?= $this->endSection() ?>