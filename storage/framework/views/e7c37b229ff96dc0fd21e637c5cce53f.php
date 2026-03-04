<?php $__env->startSection('title', 'เข้าสู่ระบบแอดมิน'); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/auth.css">
    <script src="../js/auth.js"></script>

    <body>
        <div class="auth-container">
            <div class="auth-card">
                <div class="auth-header">
                    <h1>🔐 เข้าสู่ระบบแอดมิน</h1>
                    <p>สำหรับจัดการสินค้าและโปรโมชันหลังบ้าน</p>
                </div>
                <?php if(session('status')): ?>
                    <div class="message success"><?php echo e(session('status')); ?></div>
                <?php endif; ?>
                <form class="auth-form" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="adminUsername">อีเมลผู้ใช้แอดมิน</label>
                        <input type="email" id="adminUsername" name="email" required autocomplete="username"
                            value="<?php echo e(old('email')); ?>">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error-message" id="adminUsernameError"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="adminPassword">รหัสผ่าน</label>
                        <div class="password-wrapper">
                            <input type="password" id="adminPassword" name="password" required
                                autocomplete="current-password">
                            <button type="button" class="toggle-password"
                                onclick="togglePassword('adminPassword')">👁️</button>
                        </div>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error-message" id="adminPasswordError"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                    <button type="submit" class="btn-auth btn-primary">
                        เข้าสู่ระบบ
                    </button>

                    <div class="auth-links">
                        <p>
                            ยังไม่มีบัญชี?
                            <a href="<?php echo e(route('register')); ?>">สมัครสมาชิก</a>
                        </p>
                    </div>
                </form>


                <div id="adminMessage" class="message"></div>
            </div>
        </div>

    <?php $__env->stopSection(); ?>

</body>

</html>

<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pawland\resources\views/auth/login.blade.php ENDPATH**/ ?>