</div>
</section>
<!--/PAGE -->

<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY UI-->
	<script src="<?=base_url(); ?>js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="<?=base_url(); ?>bootstrap-dist/js/bootstrap.min.js"></script>
	
		
	<!-- DATE RANGE PICKER -->
	
	<script type="text/javascript" src="<?=base_url(); ?>js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	<!-- SLIMSCROLL -->
	<script type="text/javascript" src="<?=base_url(); ?>js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="<?=base_url(); ?>js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>
	<!-- COOKIE -->
	<script type="text/javascript" src="<?=base_url(); ?>js/jQuery-Cookie/jquery.cookie.min.js"></script>
	<!-- DATA TABLES -->
	<script type="text/javascript" src="<?=base_url(); ?>js/datatables/media/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?=base_url(); ?>js/datatables/media/js/dataTables.bootstrap.min.js"></script>

	<script type="text/javascript" src="<?=base_url(); ?>js/ckeditor/ckeditor.js"></script>

	<!-- CUSTOM SCRIPT -->
	<script src="<?=base_url(); ?>js/script.js"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("widgets_box");  //Set current page
			App.init(); //Initialise plugins and elements
		});

        $(function(){
        	$(".datepicker").datepicker();
        });

		$('.datatable').each(function(){
			$(this).DataTable()
		});
		
		$(function(){
			var editor = CKEDITOR.replace( 'details' );
			
			editor.on( 'change', function( evt ) {
				$('#details').val(evt.editor.getData());
			});
		});

		$( document ).ready(function(){
            $(".del").click(function(event){
                event.preventDefault();
                var r=confirm("Are you sure you want to delete?");
                if (r==true)   {  
                    window.location = $(this).attr('href');
                }
            });
        });
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>
