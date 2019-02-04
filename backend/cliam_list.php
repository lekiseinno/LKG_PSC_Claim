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


      <?php 
      functiion ()
         switch ($claim_status) {
            case '0':
               $claim_status_text='รอดำเนินการ';
               $claim_status_color='';
               break;
            case '1':
               $claim_status_text='เปิดใบงาน';
               $claim_status_color='';
               break;
            case '2':
               $claim_status_text='พิจารณาใหม่';
               $claim_status_color='';
               break;
            case '3':
               $claim_status_text='3';
               $claim_status_color='';
               break;
            case '4':
               $claim_status_text='ปิดิใบงาน';
               $claim_status_color='';
               break;
            case '5':
               $claim_status_text='ไม่อนุมัติ';
               $claim_status_color='';
               break;
         }
       ?>
      <section class="section-container">
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
               <div>รายการร้องเรียน <button class="btn btn-primary btn-showform">เพิ่ม</button>
                  <!--<small>Standard and custom elements for any form</small>-->
               </div>
            </div>


            <div class="row">              
               <div class="col-md-12">
                  <!-- START card-->
                  <div class="card card-default">
                     <div class="card-header">รายการร้องเรียน</div>

                        <div class="card-body">
                        <table class="table table-striped my-4 w-100" id="datatable1">
                           <thead>
                              <tr>
                                 <th width="5%" data-priority="1">#</th>
                                 <th>วันที่ร้องเรียน</th>
                                 <th>เลขที่</th>
                                 <th>SC</th>
                                 <th>ชื่อลูกค้า</th>
                                 <th>สถานะ</th>

                                 <!--<th>จัดการ</th>-->

                              </tr>
                           </thead>
                           <tbody>
                        <?php 
                           $i=1;
                           $sql = " SELECT  *   FROM  Claim_Job ";
                           $query = sqlsrv_query( $con, $sql ) or die($sql);
                           while($row = sqlsrv_fetch_array($query , SQLSRV_FETCH_ASSOC)) { 
                         ?>
                              <tr class="gradeX row<?php echo $row['cliam_ID']?>">
                                 <td></td>
                                 <td><?php echo date_format($row['claim_date'],'d/m/Y') ?></td>
                                 <td><?php echo $row['cliam_DocNo']?></td>
                                 <td><?php echo $row['cliam_SC']?></td>
                                 <td><?php echo $row['claim_customer_name']?></td>
                                 <td></td>
                                 <!--<td><button type="button" disabled class="btn btn-danger banner-delete" cliam_ID=<?php echo $row['cliam_ID']?>>ลบ</button></td>-->

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