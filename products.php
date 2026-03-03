<?php
require_once __DIR__ . '/php/db.php';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="สินค้าของ Pawland - สุนัขและแมวพันธุ์ต่างๆ อาหารสัตว์เลี้ยง และของเล่น">
    <meta name="keywords" content="สุนัข แมว อาหาร ของเล่น สัตว์เลี้ยง ซื้อ">
    <title>สินค้า - Pawland</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/products.css">
</head>
<body>
    <header>
        <nav>
<<<<<<<< HEAD:html/products.html
            <div class="nav-wrapper">
                <div class="logo">🐾 Pawland</div>
                <ul class="nav-links">
                    <li><a href="index.html">🏠 หน้าแรก</a></li>
                    <li><a class="active" href="products.html">🛍️ สินค้า</a></li>
                    <li><a href="about.html">ℹ️ เกี่ยวกับเรา</a></li>
                    <li><a href="contact.html">📧 ติดต่อ</a></li>
                </ul>
            </div>
========
            <div class="logo">🐾 Pawland</div>
            <ul class="nav-links">
                <li><a href="index.html">หน้าแรก</a></li>
                <li><a class="active" href="products.php">สินค้า</a></li>
                <li><a href="about.html">เกี่ยวกับเรา</a></li>
                <li><a href="contact.html">ติดต่อ</a></li>
                
            </ul>
>>>>>>>> cf571353623825a83e8da5139bee94aeb2b7ea67:products.php
        </nav>
    </header>

    <div class="container" id="products">
        <h2 class="section-title">สินค้าของเรา</h2>
        
        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" id="searchInput" class="search-input" placeholder="🔎 ค้นหาสินค้า...">
        </div>
        
        <div class="category-tabs">
            
            <button class="tab-btn active" data-category="all">ทั้งหมด</button>
            <button class="tab-btn" data-category="dog">น้องสุนัข</button>
            <button class="tab-btn" data-category="cat">น้องแมว</button>
            <button class="tab-btn" data-category="dog-food">อาหารน้องสุนัข</button>
            <button class="tab-btn" data-category="cat-food">อาหารน้องแมว</button>
            <button class="tab-btn" data-category="dog-accessory">อื่นๆสำหรับน้องสุนัข</button>
            <button class="tab-btn" data-category="cat-accessory">อื่นๆสำหรับน้องแมว</button>
        </div>

        <div class="products-grid" id="productsGrid"></div>
    </div>

    <div class="cart" id="cartBtn" aria-label="ตะกร้าสินค้า">
        🛒
        <span class="cart-count" id="cartCount">0</span>
    </div>

    <!-- Cart Modal -->
    <div class="cart-modal" id="cartModal">
        
        <div class="cart-modal-content">
            <div class="cart-modal-header">
                <h2>ตะกร้าสินค้า</h2>
                <button class="cart-close-btn" id="cartCloseBtn">&times;</button>
            </div>
            <div class="cart-modal-body">
                <div class="cart-items" id="cartItems">
                    <!-- Cart items will be rendered here -->
                </div>
            </div>
            <div class="cart-modal-footer">
                <div class="cart-summary">
                    <div class="summary-row">
                        <span>ราคารวม:</span>
                        <span id="cartTotal">฿0</span>
                    </div>
                </div>
                <div class="cart-actions">
                    <button class="btn btn-secondary" id="clearCartBtn">ล้างตะกร้า</button>
                    <button class="btn btn-primary" id="checkoutBtn">ไปชำระเงิน</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Pawland. All rights reserved.</p>
        <p>ร้านขายสุนัข แมว อาหาร และของเล่นคุณภาพ ส่งตรงถึงบ้าน</p>
    </footer>

    <script src="../js/script.js"></script>
    <script src="../js/navigation.js"></script>
</body>
</html>