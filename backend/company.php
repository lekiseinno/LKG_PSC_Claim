<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themicon.co/theme/angle/v3.8.9.1/html5jquery-bs4/app/form-standard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jun 2018 02:15:18 GMT -->
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title></title>
   <?php include 'include/lib_css.php' ?>
</head>

<body>
   <div class="wrapper">
      <!-- top navbar-->
      <?php include 'include/header.php' ?>
      <!-- sidebar-->
      <?php include 'include/sidebar-left.php' ?>
      <!-- offsidebar-->
      <?php include 'include/sidebar-right.php' ?>
      <!-- Main section-->
      <section class="section-container">
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
               <div>บริษัท <button class="btn btn-primary btn-showform">เพิ่ม</button></div>

            </div>
            <form action="action/company_insert.php" method="post" class="myform" style="display: none">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card card-default">
                        <div class="card-body">
                           <table class="table table-bordered">
                              <tr>
                                 <td width="10%">ชื่อ</td>
                                 <td><input type="text" class="form-control" name="company_name"></td>
                              </tr>
                              <tr>
                                 <td>ชื่อ(อังกฤษ)</td>
                                 <td><input type="text" class="form-control" name="company_name_EN"></td>
                              </tr>
                              <tr>
                                 <td>อักษรย่อ</td>
                                 <td><input type="text" class="form-control" name="company_name_short"></td>
                              </tr>
                           </table>
                           <div align="center">
                              <button type="submit" class="btn btn-primary">เพิ่ม</button>
                              <button type="reset" class="btn btn-warning btn-hideform">ยกเลิก</button>
                           </div>
                        </div>
                     </div>                 
                  </div>
               </div>
            </form>

            <div class="row">              
               <div class="col-md-12">
                  <!-- START card-->
                  <div class="card card-default">
                     <div class="card-header">บริษัท</div>
                        <div class="card-body">
                        <table class="table table-striped my-4 w-100" id="datatable1">
                           <thead>
                              <tr>
                                 <th width="5%" data-priority="1">#</th>
                                 <th>ชื่อ</th>
                                 <th>ชื่อ (อังกฤษ)</th>
                                 <th>ชื่อย่อ</th>
                                 <th>เปิดใช้งาน</th>
                                 <!--<th>จัดการ</th>-->
                              </tr>
                           </thead>
                           <tbody>
                        <?php 
                           $i=1;
                           $sql = " SELECT  *   FROM  company ";
                           $query = sqlsrv_query( $con, $sql ) or die($sql);
                           while($row = sqlsrv_fetch_array($query , SQLSRV_FETCH_ASSOC)) { 
                         ?>
                              <tr class="gradeX row<?=$row['company_id']?>">
                                 <td><?=$i++?></td>
                                 <td><?=$row['company_name']?></td>
                                 <td><?=$row['company_name_EN']?></td>
                                 <td><?=$row['company_name_short']?></td>
                                 <td>
                                    <label class="switch">
                                       <input type="checkbox" class="company_close" company_id=<?=$row['company_id']?> company_close=<?=$row['company_close']?> <?php if($row['company_close']==0) echo "checked='checked'" ?> >
                                       <span></span>
                                    </label>
                                 </td>
                                 <!--<td><button type="button" disabled class="btn btn-danger banner-delete" company_id=<?=$row['company_id']?>>ลบ</button></td>-->

                              </tr>
                        <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- END card-->
               </div>
            </div>      
         </div>
      </section>
      <!-- Page footer-->
      <?php include 'include/footer.php' ?>
   </div>
   <?php include 'include/lib_js.php' ?>
</body>


<!-- Mirrored from themicon.co/theme/angle/v3.8.9.1/html5jquery-bs4/app/form-standard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jun 2018 02:15:18 GMT -->
</html>