


<?php include('header.php'); ?>




<script
        src="https://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script
        src="css/bootstrap-datetimepicker.min.js">
</script>
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">



<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">


<select id="monthSelect" name="monthSelect">
    <option>ינואר</option>
    <option>פברואר</option>
    <option>מרץ</option>
    <option>אפריל</option>
    <option>מאי</option>
    <option>יוני</option>
    <option>יולי</option>
    <option>אוגוסט</option>
    <option>ספטמבר</option>
    <option>אוקטובר</option>
    <option>נובמבר</option>
    <option>דצמבר</option>

</select>


        <select id="weekSelect" name="weekSelect">
            <option>Select Week</option>
            <script>
                for (i=1;i<53;i++) {
                    $("#weekSelect").append('<option value="'+i+'">שבוע ' + i + '<\/option>');
                }

            </script>

        </select>


   <!---
   <select id="monthSelect" name="monthSelect">
        <option>Select Month</option>
        <script>
            for (i=1;i<13;i++) {
                $("#monthSelect").append('<option value="'+i+'">חודש ' + i + '<\/option>');
            }

        </script>
    </select>

--->








<h1 id="pageTitle" style="text-align: center; direction: rtl; left: 300px;"></h1>
    <br>
    <br>
<style>
    #pageTitle {
        color: black;
        font-weight: bold;
        text-decoration: underline;
        font-family: "Arial Hebrew";
    }
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }

    table, tr, td, th {
        border: 1px solid black;
        text-align: center;
    }

    th {
        text-align: center;
        border: 1px solid black;

    }

    title {
         color: black;
    }


    #table12 tr td:nth-child(1), #table12 th:nth-child(1) {
        display: none;
    }



</style>
    <table id="table12" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th width="5%">מספר שורה</th>
            <th width="5%">שמות</th>
            <th width="5%">הערות</th>
            <th width="5%">בוצע\לא בוצע</th>
            <th width="5%">יום ה׳</th>
            <th width="5%">יום ד׳</th>
            <th width="5%">יום ג׳</th>
            <th width="5%">יום ב׳</th>
            <th width="5%">יום א׳</th>
            <th width="10%">משמרת</th>
            <th width="10%">מודול</th>
              <th width="5%">מחסן</th>


        </tr>
        </thead>
        <tbody id="employee_data">
        </tbody>
    </table>




<script>






</script>



    <script type="text/javascript">





        $(document).ready(function(){

            function fetch_employee_data(number)
            {
                $.ajax({
                    url:"fetchTest.php",
                    method:"POST",
                    dataType:"json",
                    data: {'week':number},
                    success:function(data)
                    {
                        $('#pageTitle').text('שבוע '+number);

                      $('#employee_data').empty();
                        for(var count=0; count<data.length; count++)
                        {

                            var html_data = '<tr><td></td>';
                            html_data += '<td data-name="shemot" class="shemot" data-type="text" data-week="'+number+'" data-pk="'+data[count].id+'">'+data[count].shemot+'</td>';
                            html_data += '<td data-name="hints" class="hints" data-type="text" data-week="'+number+'" data-pk="'+data[count].id+'">'+data[count].hints+'</td>';
                            html_data += '<td data-name="si" class="si" data-type="select" data-week="'+number+'" data-pk="'+data[count].id+'">'+data[count].si+'</td>';
                            html_data += '<td data-name="e" class="e" data-type="text" data-week="'+number+'" data-pk="'+data[count].id+'">'+data[count].e+'</td>';
                            html_data += '<td data-name="d" class="d" data-type="text" data-week="'+number+'" data-pk="'+data[count].id+'">'+data[count].d+'</td>';
                            html_data += '<td data-name="c1" class="c1" data-type="text" data-week="'+number+'" data-pk="'+data[count].id+'">'+data[count].c1+'</td>';
                            html_data += '<td data-name="b" class="b" data-type="text" data-week="'+number+'" data-pk="'+data[count].id+'">'+data[count].b+'</td>';
                            html_data += '<td data-name="a" class="a" data-type="text" data-week="'+number+'" data-pk="'+data[count].id+'">'+data[count].a+'</td>';
                            html_data += '<td data-name="hours" class="hours" data-type="text" data-week="'+number+'" data-pk="'+data[count].id+'">' +data[count].hours+'</a></td>';
                            html_data += '<td data-name="module1" class="module1" data-type="text" data-week="'+number+'" data-pk="'+data[count].id+'"><a href="'+data[count].URLData +'" style="color: black">'+data[count].module1+'</a></td>';
                            html_data += '<td data-name="warehouse" class="warehouse" data-type="text" data-week="'+number+'" data-pk="'+data[count].id+'">'+data[count].warehouse+'</td>';

                            $('#employee_data').append(html_data);


                        }
                    }
                });
                setTimeout(function (){
                $('#employee_data').editable({
                    container: 'body',
                    selector: 'td.si',
                    url: "update2.php",
                    title: 'שם',
                    type: "POST",
                    dataType: 'json',
                    source: [{value: "", text: ""}, {value: "בוצע", text: "בוצע"}, {value: "לא בוצע כלל", text: "לא בוצע כלל"}, {value: "בוצע לא בזמן", text: "בוצע לא בזמן"}],
                    params: function(params) {
                        params.week = $('td.si').data('week');
                        return params;
                    },
                    validate: function(value){


                    }
                });


                $('#employee_data').editable({
                    container: 'body',
                    selector: 'td.hints',
                    url: "update2.php",
                    title: 'מלל חופשי',
                    type: "POST",
                    dataType: 'json',
                    params: function(params) {
                        params.week = $('td.hints').data('week');
                        return params;
                    },
                    validate: function(value){

                }
                });


                $('#employee_data').editable({
                    container: 'body',
                    selector: 'td.hours',
                    url: "update2.php",
                    title: 'מלל חופשי',
                    type: "POST",
                    dataType: 'json',
                    params: function(params) {
                        params.week = $('td.hours').data('week');
                        return params;
                    },
                    validate: function(value){

                    }
                });

                $('#employee_data').editable({
                    container: 'body',
                    selector: 'td.shemot',
                    url: "update2.php",
                    title: 'מלל חופשי',
                    type: "POST",
                    dataType: 'json',
                    params: function(params) {
                        params.week = $('td.shemot').data('week');
                        return params;
                    },
                    validate: function(value){

                }
                });

                $('#employee_data').editable({
                    container: 'body',
                    selector: 'td.a',
                    url: "update2.php",
                    title: 'מלל חופשי',
                    type: "POST",
                    dataType: 'json',
                    params: function(params) {
                        params.week = $('td.a').data('week');
                        return params;
                    },
                    validate: function(value){

                    }
                });

                $('#employee_data').editable({
                    container: 'body',
                    selector: 'td.b',
                    url: "update2.php",
                    title: 'מלל חופשי',
                    type: "POST",
                    dataType: 'json',
                    params: function(params) {
                        params.week = $('td.b').data('week');
                        return params;
                    },
                    validate: function(value){

                    }
                });

                $('#employee_data').editable({
                    container: 'body',
                    selector: 'td.c1',
                    url: "update2.php",
                    title: 'מלל חופשי',
                    type: "POST",
                    dataType: 'json',
                    params: function(params) {
                        params.week = $('td.c1').data('week');
                        return params;
                    },
                    validate: function(value){

                    }
                });

                $('#employee_data').editable({
                    container: 'body',
                    selector: 'td.d',
                    url: "update2.php",
                    title: 'מלל חופשי',
                    type: "POST",
                    dataType: 'json',
                    params: function(params) {
                        params.week = $('td.d').data('week');
                        return params;
                    },
                    validate: function(value){

                    }
                });


                $('#employee_data').editable({
                    container: 'body',
                    selector: 'td.e',
                    url: "update2.php",
                    title: 'מלל חופשי',
                    type: "POST",
                    dataType: 'json',
                    params: function(params) {
                        params.week = $('td.e').data('week');
                        return params;
                    },
                    validate: function(value){

                    }
                });

                $('#employee_data').editable({
                    container: 'body',
                    selector: 'td.f',
                    url: "update2.php",
                    title: 'מלל חופשי',
                    type: "POST",
                    dataType: 'json',
                    params: function(params) {
                        params.week = $('td.f').data('week');
                        return params;
                    },
                    validate: function(value){

                    }
                });

                $('#employee_data').editable({
                    container: 'body',
                    selector: 'td.warehouse',
                    url: "update2.php",
                    title: 'מלל חופשי',
                    type: "POST",
                    dataType: 'json',
                    params: function(params) {
                        params.week = $('td.warehouse').data('week');
                        return params;
                    },
                    validate: function(value){

                    }
                });



                $('#employee_data').editable({
                    container: 'body',
                    selector: 'td.module1',
                    url: "update2.php",
                    title: 'מלל חופשי',
                    type: "POST",
                    dataType: 'json',
                    params: function(params) {
                        params.week = $('td.module1').data('week');
                        return params;
                    },
                    validate: function(value){

                    }
                });
                },100);
            }



            fetch_employee_data(1);
setTimeout(function () {
  $('#weekSelect').change(function(){
    fetch_employee_data($(this).val());
  });
}, 100);



        });







    </script>

<?php include('footer.php'); ?>
