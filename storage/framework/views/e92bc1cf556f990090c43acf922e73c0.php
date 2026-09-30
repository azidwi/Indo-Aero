
<?php $__env->startSection('content'); ?>


<section class="hero">
    <div class="hero-content">
        <h1>Aircraft Part Catalog</h1>
        <p>Find aircraft parts quickly by part number.</p>
    </div>
</section>
<div class="search-box">
    <i class="fa-solid fa-magnifying-glass"></i>
    <input
        id="searchInput"
        type="text"
        name="search"
        placeholder="Search Part Number..."
        value="<?php echo e(request('search')); ?>">
</div>
<section id="parts" class="parts-grid">
    <?php $__currentLoopData = $parts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div
        class="part-card"
        data-number="<?php echo e($part->part_number); ?>"
        data-description="<?php echo e($part->description); ?>">
        <small>PART NUMBER</small>
        <h3><?php echo e($part->part_number); ?></h3>
        <small>DESCRIPTION</small>
        <p><?php echo e($part->description); ?></p>
        <span class="detail-btn">
            View Detail →
        </span>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<div class="floating-pagination">
    
    <?php if($parts->onFirstPage()): ?>
        <span class="nav-btn disabled">‹</span>
    <?php else: ?>
        <a href="<?php echo e($parts->previousPageUrl()); ?>" class="nav-btn">‹</a>
    <?php endif; ?>
    <div class="page-group">
        <?php
            $current = $parts->currentPage();
            $last = $parts->lastPage();
        ?>
        
        <a href="<?php echo e($parts->url(1)); ?>"
            class="<?php echo e($current == 1 ? 'active' : ''); ?>">
            1
        </a>
        
        <?php if($current > 3): ?>
            <span>...</span>
        <?php endif; ?>
        
        <?php for($i = max(2, $current - 1); $i <= min($last - 1, $current + 1); $i++): ?>
            <a
                href="<?php echo e($parts->url($i)); ?>"
                class="<?php echo e($current == $i ? 'active' : ''); ?>">
                <?php echo e($i); ?>

            </a>
        <?php endfor; ?>
        
        <?php if($current < $last - 2): ?>
            <span>...</span>
        <?php endif; ?>
        
        <?php if($last > 1): ?>
            <a
                href="<?php echo e($parts->url($last)); ?>"
                class="<?php echo e($current == $last ? 'active' : ''); ?>">
                <?php echo e($last); ?>

            </a>
        <?php endif; ?>
    </div>
    
    <?php if($parts->hasMorePages()): ?>
        <a href="<?php echo e($parts->nextPageUrl()); ?>" class="nav-btn">›</a>
    <?php else: ?>
        <span class="nav-btn disabled">›</span>
    <?php endif; ?>
</div>
<div id="modal" class="modal">
    <div class="modal-content">
        <img
            src="<?php echo e(asset('images/logo.png')); ?>"
            class="modal-logo">
        <span class="close">&times;</span>
        <small>PART NUMBER</small>
        <h2 id="modalPart"></h2>
        <small>DESCRIPTION</small>
        <p id="modalDesc"></p>
        <hr>
        <p class="contact-text">
            Need more information? Contact us using the details below.
        </p>
        <h3>PT Indo Aero Semesta</h3>
        <p>📞 +62 21 5456557</p>
        <p>✉ marketing@indoaerosemesta.com</p>
        <p>📍 Jl. Peta Barat No.88F, Kalideres, Jakarta Barat</p>
        <button class="close-btn">
            Close
        </button>
    </div>
</div>

<footer>
    © <?php echo e(date('Y')); ?> PT Indo Aero Semesta
</footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\azidw\indo-aero\resources\views/home.blade.php ENDPATH**/ ?>