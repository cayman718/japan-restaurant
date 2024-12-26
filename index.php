<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fine Dining | 精緻餐酒館</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Noto Serif TC', serif;
        color: #2c3e50;
    }

    .hero-section {
        height: 100vh;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
            url('https://images.unsplash.com/photo-1428515613728-6b4607e44363') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        text-align: center;
        color: #fff;
    }

    .hero-content {
        width: 100%;
        padding: 2rem;
    }

    .hero-title {
        font-size: 4rem;
        font-weight: 300;
        letter-spacing: 0.5em;
        margin-bottom: 2rem;
    }

    .japanese {
        font-family: 'Noto Serif JP', serif;
        font-weight: 400;
    }

    .hero-subtitle {
        font-size: 1.8rem;
        font-weight: 300;
        letter-spacing: 0.3em;
        margin-bottom: 1.5rem;
    }

    .sub-text {
        font-size: 1rem;
        letter-spacing: 0.2em;
        margin-bottom: 3rem;
        opacity: 0.9;
    }

    .btn-outline-light {
        border: 1px solid rgba(255, 255, 255, 0.6);
        padding: 1rem 3rem;
        letter-spacing: 0.2em;
        transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    /* 動畫效果 */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in-up {
        opacity: 0;
        animation: fadeInUp 1s ease forwards;
    }

    .delay-1 {
        animation-delay: 0.5s;
    }

    .delay-2 {
        animation-delay: 1s;
    }

    .delay-3 {
        animation-delay: 1.5s;
    }

    /* 文字淡入效果 */
    .text-fade {
        opacity: 0.8;
        font-weight: 300;
    }

    .section-title {
        position: relative;
        margin-bottom: 4rem;
        padding-bottom: 1rem;
    }

    .section-title:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: #e67e22;
    }

    .feature-card {
        padding: 3rem 2rem;
        border: none;
        border-radius: 15px;
        background: #fff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-10px);
    }

    .feature-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 2rem;
    }

    .menu-section {
        background: #f8f9fa;
        padding: 6rem 0;
    }

    .menu-item {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        cursor: pointer;
    }

    .menu-item img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        transition: all 0.5s ease;
    }

    .menu-item:hover img {
        transform: scale(1.1);
    }

    .menu-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 2rem;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
        color: #fff;
        transition: all 0.3s ease;
    }

    .menu-item:hover .menu-overlay {
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
    }

    .badge {
        padding: 0.5em 1em;
        font-weight: 500;
    }

    .btn-outline-dark:hover {
        background: #2c3e50;
        border-color: #2c3e50;
    }

    .contact-section {
        background: #2c3e50;
        color: #fff;
        padding: 6rem 0;
    }

    .contact-info {
        padding: 2rem;
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.1);
    }

    .scroll-down {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        color: #fff;
        font-size: 2rem;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-30px);
        }

        60% {
            transform: translateY(-15px);
        }
    }

    /* 導覽列樣式 */
    .navbar {
        padding: 1.5rem 0;
        transition: all 0.3s ease;
    }

    /* 滾動時的背景 */
    .navbar.scrolled {
        background: rgba(0, 0, 0, 0.85) !important;
        padding: 1rem 0;
        backdrop-filter: blur(10px);
    }

    /* Logo 樣式 */
    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .japanese-logo {
        font-family: 'Noto Serif JP', serif;
        font-size: 2rem;
        font-weight: 500;
    }

    .brand-divider {
        color: rgba(255, 255, 255, 0.4);
        font-weight: 300;
    }

    .brand-text {
        font-size: 1.2rem;
        letter-spacing: 0.1em;
        font-weight: 300;
    }

    /* 選單項目樣式 */
    .nav-link {
        font-size: 0.95rem;
        letter-spacing: 0.2em;
        padding: 0.5rem 1.5rem !important;
        color: rgba(255, 255, 255, 0.8) !important;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        color: #fff !important;
    }

    /* 手機版選單按鈕 */
    .navbar-toggler {
        padding: 0.5rem;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    /* 動態背景效果 */
    @media (max-width: 991.98px) {
        .navbar-collapse {
            background: rgba(0, 0, 0, 0.95);
            padding: 1rem;
            border-radius: 0.5rem;
            margin-top: 1rem;
        }
    }
    </style>
</head>

<body>
    <!-- 導覽列 -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-transparent">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <span class="japanese-logo">匠</span>
                <span class="brand-divider">|</span>
                <span class="brand-text">Fine Dining</span>
            </a>

            <!-- 手機版選單按鈕 -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- 選單項目 -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">關於我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">菜單賞析</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php">預約體驗</a>
                    </li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">會員專區</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">登出</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">登入</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 主視覺區域 -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title fade-in-up">
                <span class="japanese">匠心</span>
                <span class="text-fade">與</span>
                <span class="japanese">美味</span>
            </h1>
            <p class="hero-subtitle fade-in-up delay-1">
                一期一會的料理藝術
            </p>
            <p class="sub-text fade-in-up delay-2">
                將傳統與創新完美融合，為您呈現最精緻的餐飲體驗
            </p>
            <div class="btn-group fade-in-up delay-3">
                <a href="reservation.php" class="btn btn-outline-light btn-lg">
                    預約體驗
                </a>
            </div>
        </div>
    </section>

    <!-- 特色區域 -->
    <section id="features" class="py-6">
        <div class="container py-5">
            <h2 class="text-center section-title">精選特色</h2>
            <div class="row g-4">
                <!-- 米其林主廚 -->
                <div class="col-lg-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon bg-primary bg-opacity-10 text-primary">
                            <i class="bi bi-star"></i>
                        </div>
                        <h4 class="mt-4 mb-3">米其林主廚</h4>
                        <p class="text-muted">由國際級主廚精心打造，為您呈現最精緻的美食饗宴</p>
                    </div>
                </div>

                <!-- 在地食材 -->
                <div class="col-lg-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon bg-success bg-opacity-10 text-success">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <h4 class="mt-4 mb-3">在地食材</h4>
                        <p class="text-muted">嚴選當季頂級食材，完美呈現台灣在地風味</p>
                    </div>
                </div>

                <!-- 私人空間 -->
                <div class="col-lg-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon bg-info bg-opacity-10 text-info">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4 class="mt-4 mb-3">私人空間</h4>
                        <p class="text-muted">獨立包廂設計，為您打造專屬的用餐環境</p>
                    </div>
                </div>

                <!-- 品酒體驗 -->
                <div class="col-lg-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon bg-danger bg-opacity-10 text-danger">
                            <i class="bi bi-cup-straw"></i>
                        </div>
                        <h4 class="mt-4 mb-3">品酒體驗</h4>
                        <p class="text-muted">專業侍酒師為您推薦完美搭配的佳釀</p>
                    </div>
                </div>

                <!-- 線上預約 -->
                <div class="col-lg-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon bg-warning bg-opacity-10 text-warning">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <h4 class="mt-4 mb-3">線上預約</h4>
                        <p class="text-muted">便捷的線上訂位系統，輕鬆安排美好用餐時光</p>
                    </div>
                </div>

                <!-- 精緻擺盤 -->
                <div class="col-lg-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon bg-secondary bg-opacity-10 text-secondary">
                            <i class="bi bi-palette"></i>
                        </div>
                        <h4 class="mt-4 mb-3">精緻擺盤</h4>
                        <p class="text-muted">每道料理都是視覺與味覺的完美藝術品</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 菜單預覽 -->
    <section class="menu-section">
        <div class="container">
            <h2 class="text-center section-title">主廚推薦</h2>
            <div class="row g-4">
                <!-- 香煎干貝 -->
                <div class="col-lg-4 col-md-6">
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1626508035297-0cd27c397d67" alt="香煎干貝">
                        <div class="menu-overlay">
                            <span class="badge bg-danger mb-2">主廚推薦</span>
                            <h4>香煎干貝</h4>
                            <p class="mb-2">搭配特製醬汁與季節時蔬</p>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-star-fill text-warning me-1"></i>
                                <small>4.9 (128)</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 和牛牛排 -->
                <div class="col-lg-4 col-md-6">
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e" alt="和牛牛排">
                        <div class="menu-overlay">
                            <span class="badge bg-primary mb-2">人氣精選</span>
                            <h4>頂級和牛牛排</h4>
                            <p class="mb-2">A5等級和牛，完美油花分布</p>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-star-fill text-warning me-1"></i>
                                <small>4.8 (256)</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 松露燉飯 -->
                <div class="col-lg-4 col-md-6">
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1534422298391-e4f8c172dddb" alt="松露燉飯">
                        <div class="menu-overlay">
                            <span class="badge bg-success mb-2">當季限定</span>
                            <h4>黑松露野菇燉飯</h4>
                            <p class="mb-2">義大利進口松露與當季野菇</p>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-star-fill text-warning me-1"></i>
                                <small>4.7 (186)</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 法式海鮮湯 -->
                <div class="col-lg-4 col-md-6">
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1548943487-a2e4e43b4853" alt="法式海鮮湯">
                        <div class="menu-overlay">
                            <span class="badge bg-info mb-2">經典菜色</span>
                            <h4>法式海鮮清湯</h4>
                            <p class="mb-2">新鮮海鮮與香草精心熬製</p>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-star-fill text-warning me-1"></i>
                                <small>4.8 (142)</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 法式焦糖布蕾 -->
                <div class="col-lg-4 col-md-6">
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307" alt="法式焦糖布蕾">
                        <div class="menu-overlay">
                            <span class="badge bg-warning mb-2">甜點推薦</span>
                            <h4>法式焦糖布蕾</h4>
                            <p class="mb-2">手工現製，口感細緻滑順</p>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-star-fill text-warning me-1"></i>
                                <small>4.9 (168)</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 主廚特製套餐 -->
                <div class="col-lg-4 col-md-6">
                    <div class="menu-item">
                        <img src="https://images.unsplash.com/photo-1544025162-d76694265947" alt="主廚特製套餐">
                        <div class="menu-overlay">
                            <span class="badge bg-secondary mb-2">新品上市</span>
                            <h4>主廚特製套餐</h4>
                            <p class="mb-2">當季食材精心搭配組合</p>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-star-fill text-warning me-1"></i>
                                <small>4.7 (98)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 查看更多按鈕 -->
            <div class="text-center mt-5">
                <a href="menu.php" class="btn btn-outline-dark btn-lg px-5">
                    <i class="bi bi-grid me-2"></i>查看完整菜單
                </a>
            </div>
        </div>
    </section>

    <!-- 聯絡資訊 -->
    <section class="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title text-white">與我們聯繫</h2>
                    <div class="contact-info">
                        <p><i class="bi bi-geo-alt me-2"></i>台北市中山區某某路 123 號</p>
                        <p><i class="bi bi-telephone me-2"></i>02-1234-5678</p>
                        <p><i class="bi bi-envelope me-2"></i>contact@finedining.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // 滾動時改變導覽列背景
    document.addEventListener('DOMContentLoaded', function() {
        var navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    });
    </script>
</body>

</html>