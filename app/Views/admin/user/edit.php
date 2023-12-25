<?= $this->extend('admin/layouts/app') ?>
<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>User Menu</h3>
                <p class="text-subtitle text-muted">Edit Data User </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/user') ?> ">user</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"></h4>
            </div>
            <div class="card-body">
                <p>Edit the data according to the user identity!, for the password leave it blank if you don't want to change it.</p>
                <?php if (isset($validation)) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $validation->listErrors() ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <form action="" method="post" id="text-editor">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <div class="form-group">
                                <label for="image" class="form-label">Profile Picture</label>
                                <input type="file" value="<?= $user['photos'] ?>" class="form-control" id="image" name="image" accept="photos/*">
                            </div>
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" value="<?= $user['name'] ?>" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Email</label>
                                <input type="email" value="<?= $user['email'] ?>" name="email" class="form-control" placeholder="email" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Phone Number</label>
                                <input type="number" value="<?= $user['phone_number'] ?>" name="phone_number" min="0" class="form-control" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Gender</label>
                                <select class="form-select" name="gender" aria-label="Default select example">
                                    <option selected>Choose Gender</option>
                                    <option value="Laki-Laki" <?php if ($user['gender'] == 'Laki-Laki') {
                                                                    echo 'selected';
                                                                } ?>>Male</option>
                                    <option value="Perempuan" <?php if ($user['gender'] == 'Perempuan') {
                                                                    echo 'selected';
                                                                } ?>>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Birth Date</label>
                                <input type="date" value="<?= date('Y-m-d', strtotime($user['birth_date'])) ?>" name="birth_date" class="form-control" placeholder="Birth Date" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address"><?= $user['address'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="javascript:window.history.go(-1);"  value="draft" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>