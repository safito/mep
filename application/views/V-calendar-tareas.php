


<script>

	$(document).ready(function() {
		
		$.post('<?php echo base_url();?>c_calendar/getTareas',

		function(datos){
			//alert(datos);

				
			$('#calendar').fullCalendar(
				{
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,basicWeek,basicDay'
					},
					defaultDate: new Date(),
					navLinks: true, // can click day/week names to navigate views
					editable: true,
					eventLimit: true, // allow "more" link when too many events
					events: $.parseJSON(datos),


					//La siguiente funcion abre un modal para edicion del evento.
					eventClick: function(event, jsEvent, view){
						
							url = "<?php echo base_url();?>c_tareas/modal_edit/" + event.id; 

							var options = {
								"remote" : url
							}
							
							$('#myModal').removeData('bs.modal');
							$('#myModal').modal(options);
							
						

					},

					//Esta funcion es para implementar a futuro
					//Permite añadir tareas desde el calendario.
					//dayClick: function(date, jsEvent, view){

					//	alert("He sido clickeado  " + date.format());

					//},

										

				});
		});
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>



<?php
	if($this->session->flashdata('success_msg')){
?>

	<div class="alert alert-success">
		<?php echo $this->session->flashdata('success_msg'); ?>
	</div>
<?php
	}
?>

<?php
	if($this->session->flashdata('error_msg')){
?>

	<div class="alert alert-success">
		<?php echo $this->session->flashdata('error_msg'); ?>
	</div>
<?php
	}
?>

<div>
<h1 class="text-center">Calendario de Tareas</h1>
</div>

<br><br>


	<div id='calendar'></div>


 <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-success">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2><i class="glyphicon glyphicon-edit"></i> Edición de Tarea</h2>
                </div>
                <div class="modal-body">

             

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</body>
</html>
