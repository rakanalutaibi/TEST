<?php
include './inc/db.php';
include './inc/from.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php';?>

<div class="position-relative overflow-hidden  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <img src="images/pp.jpg" alt="">
      <h1 class="display-4 fw-normal">اربح مع راكان </h1>
      <h3 id="countdown"></h3>
      <div class="container">
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
      <h3>
        للدخول للسحب اتبع ما يلي
      </h3>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على فيسبوك بالتاريخ المذكور أعلاه</li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
</ul>
    </div>
    </div>
  </div>


<div class="container">
<div class="position-relative overflow-hidden  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء ادخل معلوماتك </h3>


  <div class="mb-3">
    <label for="FirstName" class="form-label">الاسم الاول</label>
    <input type="text" name="FirstName" class="form-control" id="FirstName" value="<?php echo $FirstName ?>">
    <div class="form-text error"><?php echo $errors ['FirstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="LastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="LastName" class="form-control" id="LastName" value="<?php echo $LastName ?>">
    <div class="form-text error"><?php echo $errors ['LastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">الايميل</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors ['emailError'] ?></div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
  </div>


<div class="loader-con">
  <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
<div class="button-wrapper">
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5 ">
<button type="button" id="winner" class="btn btn-primary" >
  اختيار الرابح
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">
      <div class="modal-header">
          <h5 class="modal-title" id="modal">الرابح في المسابقة</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user):?>
      <h1 class="display-3 text-center modal-title" id="modal"><?php echo htmlspecialchars($user['FirstName']) . ' ' . htmlspecialchars($user['LastName']) ?> </h1>
      <?php endforeach; ?> 
      </div>
     
    </div>
  </div>
</div>

<?php include_once './parts/footer.php';?>