<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Form Biodata Mahasiswa</h1>
    <?php if(session('success')): ?>
        <div><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <form action="<?php echo e(route('mahasiswa.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim"><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat"><br>
        <label for="hobi">Hobi:</label><br>
        <input type="text" id="hobi" name="hobi"><br><br>
        <button type="submit">Simpan</button>
    </form>

    <h1>Data Mahasiswa</h1>

</body>

<form action="/tampilkan" method="get">
    <button type="submit">Tampilkan</button>
</form>

<?php if(isset($mahasiswas)): ?>
<table border="1">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($mahasiswa->nim); ?></td>
            <td><?php echo e($mahasiswa->nama); ?></td>
            <td><?php echo e($mahasiswa->alamat); ?></td>
            <td><?php echo e($mahasiswa->hobi); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php endif; ?>



</html>
<?php /**PATH C:\xampp\htdocs\tugass2\resources\views/mahasiswa.blade.php ENDPATH**/ ?>