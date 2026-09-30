<!DOCTYPE html>
<html>
<head>
    <title>Import Excel</title>
</head>
<body>

<h2>Import Aircraft Parts</h2>

<?php if(session('success')): ?>
    <p><?php echo e(session('success')); ?></p>
<?php endif; ?>

<form action="/import" method="POST" enctype="multipart/form-data">

    <?php echo csrf_field(); ?>

    <input type="file" name="file">

    <button type="submit">
        Import
    </button>

</form>

</body>
</html><?php /**PATH C:\Users\azidw\indo-aero\resources\views/import.blade.php ENDPATH**/ ?>