   <script src="vendor/modernizr/modernizr.custom.js"></script>
   <!-- JQUERY-->
   <script src="vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="vendor/popper.js/dist/umd/popper.js"></script>
   <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="vendor/js-storage/js.storage.js"></script>
   <!-- JQUERY EASING-->
   <script src="vendor/jquery.easing/jquery.easing.js"></script>
   <!-- ANIMO-->
   <script src="vendor/animo/animo.js"></script>
   <!-- SCREENFULL-->
   <script src="vendor/screenfull/dist/screenfull.js"></script>
   <!-- LOCALIZE-->
   <script src="vendor/jquery-localize/dist/jquery.localize.js"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- Datatables-->
   <script src="vendor/datatables.net/js/jquery.dataTables.js"></script>
   <script src="vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
   <script src="vendor/datatables.net-buttons/js/dataTables.buttons.js"></script>
   <script src="vendor/datatables.net-buttons-bs/js/buttons.bootstrap.js"></script>
   <script src="vendor/datatables.net-buttons/js/buttons.colVis.js"></script>
   <script src="vendor/datatables.net-buttons/js/buttons.flash.js"></script>
   <script src="vendor/datatables.net-buttons/js/buttons.html5.js"></script>
   <script src="vendor/datatables.net-buttons/js/buttons.print.js"></script>
   <script src="vendor/datatables.net-keytable/js/dataTables.keyTable.js"></script>
   <script src="vendor/datatables.net-responsive/js/dataTables.responsive.js"></script>
   <script src="vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
   <script src="vendor/jszip/dist/jszip.js"></script>
   <script src="vendor/pdfmake/build/pdfmake.js"></script>
   <script src="vendor/pdfmake/build/vfs_fonts.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="js/app.js"></script>



<script>


   function gotopage(url){
      window.location.href=url;
   }
   $('.image_close').click(function() { 
      var head_ID=$(this).attr('head_ID');
      $.ajax({
         url: 'action/banner-close.php',
         type: 'POST',
         dataType: 'TEXT',
         async: false,
         data: {head_ID:head_ID}
      }).done(function(data) {
         if(data=='1'){
            //$('.row'+head_ID+' input[type=checkbox]').removeAttr('checked');
         }else{
            //$('.row'+head_ID+' input[type=checkbox]').attr('checked', 'checked');
         }  
      }); 
   });






   $('.claim_channel_close').click(function() { 
      var claim_channel_id=$(this).attr('claim_channel_id');
      $.ajax({
         url: 'action/claim_channel_close.php',
         type: 'POST',
         dataType: 'TEXT',
         async: false,
         data: {claim_channel_id:claim_channel_id}
      }).done(function(data) {
         if(data=='1'){
            //$('.row'+products_ID+' input[type=checkbox]').removeAttr('checked');
         }else{
            //$('.row'+products_ID+' input[type=checkbox]').attr('checked', 'checked');
         }  
      }); 
   });



   $('.company_close').click(function() { 
      var company_id=$(this).attr('company_id');
      $.ajax({
         url: 'action/company_close.php',
         type: 'POST',
         dataType: 'TEXT',
         async: false,
         data: {company_id:company_id}
      }).done(function(data) {
         if(data=='1'){
            //$('.row'+products_ID+' input[type=checkbox]').removeAttr('checked');
         }else{
            //$('.row'+products_ID+' input[type=checkbox]').attr('checked', 'checked');
         }  
      }); 
   });


   $('.customer_requirement_close').click(function() { 
      var customer_requirement_id=$(this).attr('customer_requirement_id');
      $.ajax({
         url: 'action/customer_requirement_close.php',
         type: 'POST',
         dataType: 'TEXT',
         async: false,
         data: {customer_requirement_id:customer_requirement_id}
      }).done(function(data) {
         if(data=='1'){
            //$('.row'+products_ID+' input[type=checkbox]').removeAttr('checked');
         }else{
            //$('.row'+products_ID+' input[type=checkbox]').attr('checked', 'checked');
         }  
      }); 
   });




   $('.products-delete').click(function() { 
      var products_ID=$(this).attr('products_ID');
      if(confirm('ยืนยันอีกครั้งเพื่อดำเนินการ')){
         $.ajax({
            url: 'action/products-delete.php',
            type: 'POST',
            dataType: 'TEXT',
            async: false,
            data: {products_ID:products_ID}
         }).done(function(data) {

               $('.row'+products_ID).remove();

         }); 
      }
   });







   function readURL(input) {

     if (input.files && input.files[0]) {
       var reader = new FileReader();

       reader.onload = function(e) {
         $('.previewimage').attr('src', e.target.result);
       }

       reader.readAsDataURL(input.files[0]);
     }
   }

   $(".chooseimage").change(function() {
     readURL(this);
     $('.btn-delete-previewimage').show();
   });

   $(".btn-delete-previewimage").click(function() {
     $(this).hide();
     var src=$('.old_previewimage').val();
     $('.previewimage').attr('src', src);
     $('.chooseimage').val('');

   });





   $('.btn-showform').click(function() { 
      $('.myform').slideToggle(400);
   });

   $('.btn-hideform').click(function() { 
      $('.myform').slideToggle(400);
   });

</script>