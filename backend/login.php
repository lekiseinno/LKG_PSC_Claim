<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themicon.co/theme/angle/v3.8.9.1/html5jquery-bs4/app/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jun 2018 02:16:09 GMT -->
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Angle - Bootstrap Admin Template</title>
   <!-- =============== VENDOR STYLES ===============-->
   <?php include 'include/lib_css.php' ?>
</head>

<body>
   <div class="wrapper">
      <div class="block-center mt-4 wd-xl">
         <!-- START card-->
         <div class="card card-flat">
            <div class="card-header text-center bg-dark">
               <a href="#">
                  <img class="block-center rounded" src="img/logo.png" alt="Image">
               </a>
            </div>
            <div class="card-body">
               <p class="text-center py-2">ลงชื่อเพื่อเข้าใช้งานระบบ</p>
               <form class="mb-3" id="loginForm" novalidate>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="exampleInputEmail1" type="email" placeholder="รหัสพนักงาน" autocomplete="off" required>
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-user text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="exampleInputPassword1" type="password" placeholder="รหัสผ่าน" required>
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-lock text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix">
                     <div class="checkbox c-checkbox float-left mt-0">
                        <label>
                           <input type="checkbox" value="" name="remember">
                           <span class="fa fa-check"></span>จำรหัสผ่าน</label>
                     </div>
                     <!--<div class="float-right"><a class="text-muted" href="recover.html">Forgot your password?</a>
                     </div>-->
                  </div>
                  <button class="btn btn-block btn-primary mt-3" type="submit">ลงชื่อเข้าใช้</button>
               </form>
               <!--<p class="pt-3 text-center">Need to Signup?</p><a class="btn btn-block btn-secondary" href="register.html">Register Now</a>-->
            </div>
         </div>
         <!-- END card-->
         <!--<div class="p-3 text-center">
            <span class="mr-2">&copy;</span>
            <span>2018</span>
            <span class="mr-2">-</span>
            <span>Angle</span>
            <br>
            <span>Bootstrap Admin Template</span>
         </div>-->
      </div>
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <?php include 'include/lib_js.php' ?>
</body>


<!-- Mirrored from themicon.co/theme/angle/v3.8.9.1/html5jquery-bs4/app/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jun 2018 02:16:09 GMT -->
</html>