<?php include('header.php'); ?>

    <link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
    <link href="dist/jquery.bootgrid.css" rel="stylesheet" />
    <script src="dist/jquery-1.11.1.min.js"></script>
    <script src="dist/bootstrap.min.js"></script>
    <script src="dist/jquery.bootgrid.min.js"></script>
<style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }

    table, tr, td, th {
        border: 1px solid black;
        text-align: center;
        direction: rtl;

    }

    th {
        text-align: center;
        border: 1px solid black;

    }

    #employee_grid tr td:nth-child(1), #employee_grid th:nth-child(1) {
        display: none;
    }
</style>

	<div class="container" style="text-align: center;">
      <div class="table-responsive">


        </div>
		<table id="employee_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="10px" data-toggle="bootgrid" style="width: auto; direction: rtl;">
			<thead>
				<tr>
                    <th data-column-id="id" data-type="numeric" data-identifier="true">מספר</th>
					<th data-column-id="datepicker">תאריך</th>
					<th data-column-id="names">מערכת</th>
					<th data-column-id="location">תת מערכת</th>
                    <th data-column-id="descc">פירוט תקלה ופתרונה</th>
                    <th data-column-id="start_time">התחלה</th>
                    <th data-column-id="timepicker">סוף</th>
                    <th data-column-id="kind">הוחלף חלק</th>
                    <th data-column-id="details">מק״ט</th>
                    <th data-column-id="name">תמונות</th>
                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">פקודות</th>

				</tr>
			</thead>
		</table>
    </div>

	

<div id="edit_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Employee</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_edit">
				<input type="hidden" value="edit" name="action" id="action">
				<input type="hidden" value="0" name="edit_id" id="edit_id">
                    <div class="form-group">
                        <label for="name" class="control-label">תאריך:</label>
                        <input type="text" class="form-control" id="edit_datepicker" name="edit_datepicker" placeholder="2019-01-01"/>
                    </div>
                    <div class="form-group">
                        <label for="names" class="control-label">מערכת:</label>
                        <select name="edit_names" id="edit_names" required>

                            <option>ירפ</option>
                            <option>קפואים</option>
                            <option>מכונת שטיפה</option>
                            <option>גנטרי 4</option>
                            <option>גנטרי 15</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="salary" class="control-label">תת מערכת:</label>
                        <input type="text" class="form-control" id="edit_location" name="edit_location"/>
                    </div>
                    <div class="form-group">
                        <label for="salary" class="control-label">פירוט תקלה:</label>
                        <input type="text" class="form-control" id="edit_descc" name="edit_descc"/>
                    </div>
                    <div class="form-group">
                        <label for="salary" class="control-label">התחלה:</label>
                        <input type="text" class="form-control" id="edit_start_time" name="edit_start_time" placeholder="00:00"/>
                    </div>
                    <div class="form-group">
                        <label for="salary" class="control-label">סוף:</label>
                        <input type="text" class="form-control" id="edit_timepicker" name="edit_timepicker" placeholder="00:00"/>
                    </div>
                    <div class="form-group">
                        <label for="salary" class="control-label">הוחלף חלק:</label>
                        <select name="edit_kind" id="edit_kind" required>

                            <option>כן</option>
                            <option>לא</option>


                        </select>
                    </div>
                    <div class="form-group">
                        <label for="salary" class="control-label">מק״ט:</label>
                        <input type="text" class="form-control" id="edit_details" name="edit_details" placeholder="95685747578"/>
                    </div>
                    <div class="form-group">
                        <label for="salary" class="control-label">תמונות:</label>
                        <input type="text" class="form-control" id="edit_name" name="edit_name" />
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_edit" class="btn btn-primary">Save</button>
            </div>
			</form>
        </div>
    </div>
</div>


<script type="text/javascript">
$( document ).ready(function() {
	var grid = $("#employee_grid").bootgrid({
		ajax: true,
		rowSelect: true,
		post: function ()
		{
			/* To accumulate custom parameter with the request object */
			return {
				id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
			};
		},
		
		url: "response.php",
		formatters: {
		        "commands": function(column, row)
		        {
		            return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-edit\"></span></button> " + 
		                "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
		        }
		    }
   }).on("loaded.rs.jquery.bootgrid", function()
{
    /* Executes after data is loaded and rendered */
    grid.find(".command-edit").on("click", function(e)
    {
        //alert("You pressed edit on row: " + $(this).data("row-id"));
			var ele =$(this).parent();
			var g_id = $(this).parent().siblings(':first').html();
            var g_name = $(this).parent().siblings(':nth-of-type(2)').html();

console.log(g_id);
                    console.log(g_name);


		//console.log(grid.data());//
		$('#edit_model').modal('show');
					if($(this).data("row-id") >0) {
							
                                // collect the data
                                $('#edit_id').val(ele.siblings(':first').html()); // in case we're changing the key
                                $('#edit_datepicker').val(ele.siblings(':nth-of-type(2)').html());
                                $('#edit_names').val(ele.siblings(':nth-of-type(3)').html());
                                $('#edit_location').val(ele.siblings(':nth-of-type(4)').html());
                                $('#edit_descc').val(ele.siblings(':nth-of-type(5)').html());
                                $('#edit_start_time').val(ele.siblings(':nth-of-type(6)').html());
                                $('#edit_timepicker').val(ele.siblings(':nth-of-type(7)').html());
                                $('#edit_kind').val(ele.siblings(':nth-of-type(8)').html());
                                $('#edit_details').val(ele.siblings(':nth-of-type(9)').html());
                                $('#edit_name').val(ele.siblings(':nth-of-type(10)').html());
					} else {
					 alert('Now row selected! First select row, then click edit button');
					}
    }).end().find(".command-delete").on("click", function(e)
    {
	
		var conf = confirm('Delete ' + $(this).data("row-id") + ' items?');

                    if(conf){
                                $.post('response.php', { id: $(this).data("row-id"), action:'delete'}
                                    , function(){
                                        // when ajax returns (callback), 
										$("#employee_grid").bootgrid('reload');
                                }); 
								//$(this).parent('tr').remove();
								//$("#employee_grid").bootgrid('remove', $(this).data("row-id"))
                    }
    });
});

function ajaxAction(action) {
				data = $("#frm_"+action).serializeArray();
				$.ajax({
				  type: "POST",  
				  url: "response.php",  
				  data: data,
				  dataType: "json",       
				  success: function(response)  
				  {
					$('#'+action+'_model').modal('hide');
					$("#employee_grid").bootgrid('reload');
				  }   
				});
			}
			
			$( "#command-add" ).click(function() {
			  $('#add_model').modal('show');
			});
			$( "#btn_add" ).click(function() {
			  ajaxAction('add');
			});
			$( "#btn_edit" ).click(function() {
			  ajaxAction('edit');
			});
});
</script>

<?php include('footer.php'); ?>