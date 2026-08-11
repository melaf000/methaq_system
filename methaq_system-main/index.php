<<?php
require_once 'config/db.php';
include 'includes/header.php';
include 'includes/sidebar.php';

$total_vehicles = $pdo->query("SELECT COUNT(*) FROM vehicles")->fetchColumn();
$delivered_vehicles = $pdo->query("SELECT COUNT(*) FROM vehicles WHERE status = 'مسلمة'")->fetchColumn();
?>

<div class="container-fluid p-4" dir="rtl" style="flex: 1; overflow-y: auto; background-color: #f8fafc;">
    
    <!-- الهيدر العلوي: الرئيسية في اليمين وشعار وزارة الدفاع فقط في أقصى اليسار -->
    <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
        
        <!-- اليمين -->
        <h5 class="fw-bold text-dark mb-0">
            <i class="fa-solid fa-house me-2 text-primary"></i> الرئيسية
        </h5>

        <!-- اليسار (لوجو الشعار فقط بدون نص) -->
        <div>
            <img src="mod_logo.png" alt="شعار وزارة الدفاع" style="height: 35px; width: auto;" class="img-fluid">
        </div>

    </div>

    <!-- بطاقات الإحصائيات (4 في صف واحد) -->
    <div class="row g-3 mb-4">
        
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 bg-white rounded-3 border-start border-primary border-4">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-bold d-block small">إجمالي المركبات</span>
                        <h3 class="fw-bold mb-0 text-primary mt-1"><?php echo $total_vehicles; ?></h3>
                    </div>
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="fa-solid fa-car fs-5"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 bg-white rounded-3 border-start border-success border-4">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-bold d-block small">المركبات المُسلّمة</span>
                        <h3 class="fw-bold mb-0 text-success mt-1"><?php echo $delivered_vehicles; ?></h3>
                    </div>
                    <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="fa-solid fa-car-tunnel fs-5"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 bg-white rounded-3 border-start border-warning border-4">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-bold d-block small">العهد النشطة</span>
                        <h3 class="fw-bold mb-0 text-warning mt-1">1</h3>
                    </div>
                    <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="fa-solid fa-folder-open fs-5"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 bg-white rounded-3 border-start border-danger border-4">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted fw-bold d-block small">العهد المتأخرة</span>
                        <h3 class="fw-bold mb-0 text-danger mt-1">1</h3>
                    </div>
                    <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="fa-solid fa-triangle-exclamation fs-5"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- تنبيه حالة الاتصال -->
    <div class="alert alert-success d-flex align-items-center mb-4 border-0 rounded-3 py-2 px-3 small shadow-sm" role="alert">
        <i class="fa-solid fa-circle-check me-2 fs-6"></i>
        <div>
            <strong>حالة المنصة:</strong> الاتصال بقاعدة البيانات موصول بنجاح والخدمات جاهزة!
        </div>
    </div>



</div>

<?php include 'includes/footer.php'; ?>