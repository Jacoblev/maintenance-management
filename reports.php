
<?php include('header.php'); ?>
<link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
<link href="dist/jquery.bootgrid.css" rel="stylesheet" />
<script src="dist/jquery-1.11.1.min.js"></script>
<script src="dist/bootstrap.min.js"></script>
<script src="dist/jquery.bootgrid.min.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<style>

    .modal-dialog, .modal-content, .modal-header, .modal-title {
        text-align: center;
        direction: rtl;

    }

</style>


<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" style="direction: rtl; text-align: center;">הוספת תקלה</h4>
        </div>
        <div class="modal-body">
            <form method="post" id="frm_add">
                <input type="hidden" value="add" name="action" id="action">
                <div class="form-group">
                    <label for="salary" class="control-label">תאריך:</label>
                    <input type="text" class="form-control datepicker" id="datepicker" name="datepicker" placeholder="2019-01-01" required>
                </div>
                <div class="form-group">
                    <label for="salary" class="control-label">מערכת:</label>
                    <select aria-label="בחר" name="names" id="names" required>

                        <option>ירפ</option>
                        <option>קפואים</option>
                        <option>מכונת שטיפה</option>
                        <option>גנטרי 4</option>
                        <option>גנטרי 15</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="salary" class="control-label">תת מערכת:</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                </div>
                <div class="form-group">
                    <label for="salary" class="control-label">פירוט תקלה ופתרונה:</label>
                    <input type="text" class="form-control" id="descc" name="descc" required>
                </div>
                <div class="form-group">
                    <label for="salary" class="control-label">התחלה:</label>
                    <input type="text" class="form-control" id="start_time" name="start_time" placeholder="00:00" required>
                </div>
                <div class="form-group">
                    <label for="salary" class="control-label">סוף:</label>
                    <input type="text" class="form-control" id="timepicker" name="timepicker" placeholder="00:00" required>
                </div>
                <div class="form-group">
                    <label for="salary" class="control-label">הוחלף חלק:</label>
                    <select name="kind" id="kind" required>

                        <option>כן</option>
                        <option>לא</option>


                    </select>
                </div>

                <div class="form-group">
                    <label for="salary" class="control-label">מק״ט:</label>
                    <input type="text" class="form-control" id="details" name="details" placeholder="95685747578" required>
                </div>
                <div class="form-group">
                    <label for="salary" class="control-label">תמונות:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
        </div>
        <div class="modal-footer">

            <a href="read.php"><button type="button" id="btn_add" class="btn btn-primary" style="direction: ltr; text-align: center;">Save</button></a>
        </div>
        </form>
    </div>
</div>


<script>
    $( function() {
        $( ".datepicker" ).datepicker({
            dateFormat: "yy-mm-dd"
        });

    } );
</script>




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
                alert(conf);
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



<?php include('footer.php');?>
