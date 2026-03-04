<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?> | Pawland</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<script src="../js/script.js" defer></script>
<script src="../js/navigation.js" defer></script>

<body>
    <div>
        <header>
            <nav>
                <div class="nav-wrapper">
                    <div class="logo">🐾 Pawland</div>
                    <ul class="nav-links">
                        <li><a class="active" href="<?php echo e(Route('photos.home')); ?>"">🏠 หน้าแรก</a></li>
                        <li><a href="<?php echo e(Route('photos.index')); ?>">🛍️ สินค้า</a></li>
                        <li><a href="<?php echo e(Route('photos.about')); ?>">ℹ️ เกี่ยวกับเรา</a></li>
                        <li><a href="<?php echo e(Route('photos.contact')); ?>">📧 ติดต่อ</a></li>
                        <?php if(auth()->guard()->check()): ?>
                            <?php if(auth()->user()->role === 'admin'): ?>
                             <li><a href="<?php echo e(Route('dashboard')); ?>">จัดการสินค้า</a></li>
                                <li>
                                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="nav-link">
                                            🚪 ออกจากระบบ
                                        </button>
                                    </form>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                        
                    </ul>
                </div>
            </nav>
        </header>
    </div>
    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div>
        
    </div>
</body>

</html>

<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pawland\resources\views/layouts/layout.blade.php ENDPATH**/ ?>