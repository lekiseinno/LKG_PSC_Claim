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
               <div>ช่องทางการร้องเรียน <button class="btn btn-primary btn-showform">เพิ่ม</button>
                  <!--<small>Standard and custom elements for any form</small>-->
               </div>
            </div>

            <form action="action/claim_channel_insert.php" method="post" class="myform" style="display: none">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card card-default">
                        <div class="card-body">
                           <table class="table table-bordered">
                              <tr>
                                 <td width="10%">ช่องทาง</td>
                                 <td><input type="text" class="form-control" name="claim_channel_name"></td>
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
                     <div class="card-header">ช่องทางการร้องเรียน</div>

                        <div class="card-body">
                        <table class="table table-striped my-4 w-100" id="datatable1">
                           <thead>
                              <tr>
                                 <th width="5%" data-priority="1">#</th>
                                 <th>ชื่อ</th>
                                 <th>เปิดใช้งาน</th>
                                 <!--<th>จัดการ</th>-->

                              </tr>
                           </thead>
                           <tbody>
                        <?php 
                           $i=1;
                           $sql = " SELECT  *   FROM  claim_channel ";
                           $query = sqlsrv_query( $con, $sql ) or die($sql);
                           while($row = sqlsrv_fetch_array($query , SQLSRV_FETCH_ASSOC)) { 
                         ?>
                              <tr class="gradeX row<?=$row['claim_channel_id']?>">
                                 <td><?=$i++?></td>
                                 <td><?=$row['claim_channel_name']?></td>
                                 <td>
                                    <label class="switch">
                                       <input type="checkbox" class="claim_channel_close" claim_channel_id=<?=$row['claim_channel_id']?> claim_channel_close=<?=$row['claim_channel_close']?> <?php if($row['claim_channel_close']==0) echo "checked='checked'" ?> >
                                       <span></span>
                                    </label>
                                 </td>
                                 <!--<td><button type="button" disabled class="btn btn-danger banner-delete" claim_channel_id=<?=$row['claim_channel_id']?>>ลบ</button></td>-->

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