    <!--/ CONTENT --> 

<!--/ Application Content --> 
<!--Vendor JavaScripts  --> 
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/bootstrapscripts.bundle.js"></script>
<script src="assets/js/vendor/summernote/summernote.min.js"></script> 
<!--/ vendor javascripts --> 

<!--  Custom JavaScripts --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 

<!--  Page Specific Scripts  --> 
<script type="text/javascript">
	$(window).load(function(){
		$('#ex1').slider({
			formatter: function(value) {
				return 'Current value: ' + value;
			}
		});
		$("#ex1").on("slide", function(slideEvt) {
			$("#ex1SliderVal").text(slideEvt.value);
		});

		$("#ex2, #ex3, #ex4, #ex5").slider();

		//load wysiwyg editor
		$('#summernote').summernote({
			height: 200   //set editable area's height
		});
		//*load wysiwyg editor
	});
</script> 
<!--/ Page Specific Scripts -->
</body>


</html>
