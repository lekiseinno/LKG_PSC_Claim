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
               <div>ความประสงค์ของลูกค้า <button class="btn btn-primary btn-showform">เพิ่ม</button>
                  <!--<small>Standard and custom elements for any form</small>-->
               </div>
            </div>


            <form action="action/customer_requirement_insert.php" method="post" class="myform" style="display: none">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card card-default">
                        <div class="card-body">
                           <table class="table table-bordered">
                              <tr>
                                 <td width="13%">ช่องทางการร้องเรียน</td>
                                 <td><input type="text" class="form-control" name="customer_requirement_text"></td>
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
                     <div class="card-header">ความประสงค์ของลูกค้า</div>
                        <div class="card-body">
                        <table class="table table-striped my-4 w-100" id="datatable1">
                           <thead>
                              <tr>
                                 <th width="5%" data-priority="1">#</th>
                                 <th>รายละเอียด</th>
                                 <!--<th>จัดการ</th>-->

                              </tr>
                           </thead>
                           <tbody>
                        <?php 
                           $i=1;
                           $sql = " SELECT  *   FROM  customer_requirement ";
                           $query = sqlsrv_query( $con, $sql ) or die($sql);
                           while($row = sqlsrv_fetch_array($query , SQLSRV_FETCH_ASSOC)) { 
                         ?>
                              <tr class="gradeX row<?=$row['customer_requirement_id']?>">
                                 <td><?=$i++?></td>
                                 <td><?=$row['customer_requirement_text']?></td>
                                 <td>  
                                    <label class="switch">
                                       <input type="checkbox" class="customer_requirement_close" customer_requirement_id=<?=$row['customer_requirement_id']?> customer_requirement_close=<?=$row['customer_requirement_close']?> <?php if($row['customer_requirement_close']==0) echo "checked='checked'" ?> >
                                       <span></span>
                                    </label>
                                 </td>
                                 <!--<td><button type="button" disabled class="btn btn-danger banner-delete" customer_requirement_id=<?=$row['customer_requirement_id']?>>ลบ</button></td>-->

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