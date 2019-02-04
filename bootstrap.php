<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<script src="jquery_i18n/CLDRPluralRuleParser.js"></script>
  <script src="jquery_i18n/jquery.i18n.js"></script>
  <script src="jquery_i18n/jquery.i18n.messagestore.js"></script>
  <script src="jquery_i18n/jquery.i18n.fallbacks.js"></script>
  <script src="jquery_i18n/jquery.i18n.language.js"></script>
  <script src="jquery_i18n/jquery.i18n.parser.js"></script>
  <script src="jquery_i18n/jquery.i18n.emitter.js"></script>
  <script src="jquery_i18n/jquery.i18n.emitter.bidi.js"></script>

  <script src="jquery_i18n/main-jquery_i18n.js"></script>


<script>
	function add_tr(count_tr){
		count_tr=parseInt(count_tr)+1;
		$('#count_tr').val(count_tr);
		$('<tr class="tr-body-'+count_tr+'"><td><input class="form-control" type="text" name="item_code[]"></td><td><input class="form-control" type="text" name="product_name[]"></td><td><input class="form-control" type="text" name="invoice_so[]"></td><td><input class="form-control" type="text" name="qty_salses[]"></td><td><input class="form-control" type="text" name="qty_defect[]"></td><td><input class="form-control" type="text" name="warranty[]"></td><td><textarea class="form-control" name="problem_description[]" id="" cols="30" rows="1"></textarea></td><td><input class="form-control" type="file" name="image_defect[]"></td></tr>').insertBefore('.tr-body-0');
	} 
</script>