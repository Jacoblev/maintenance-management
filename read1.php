<?php include('header.php'); ?>

<style>
    .hide
    {
        display:none;
    }
</style>

<body>
<div class="container">
    <br />
    <div class="table-responsive">

        <div id="grid_table"></div>
    </div>
</div>

<script>

    $('#grid_table').jsGrid({

        width: "100%",
        height: "600px",

        filtering: true,
        inserting:true,
        editing: true,
        sorting: true,
        paging: true,
        autoload: true,
        pageSize: 10,
        pageButtonCount: 5,
        deleteConfirm: "Do you really want to delete data?",

        controller: {
            loadData: function(filter){
                console.log(filter);
                return $.ajax({
                    type: "GET",
                    url: "fetch_data.php",
                    data: filter
                });
            },
            insertItem: function(item){
                return $.ajax({
                    type: "POST",
                    url: "fetch_data.php",
                    data:item
                });
            },
            updateItem: function(item){
                return $.ajax({
                    type: "PUT",
                    url: "fetch_data.php",
                    data: item
                });
            },
            deleteItem: function(item){
                return $.ajax({
                    type: "DELETE",
                    url: "fetch_data.php",
                    data: item
                });
            },
        },

        fields: [
            {
                name: "id",
                type: "hidden",
                css: 'hide'
            },
            {
                name: "name",
                type: "text",
                width: 150,
                validate: "required"
            },
            {
                name: "names",
                type: "text",
                width: 150,
                validate: "required"
            },
            {
                name: "kind",
                type: "text",
                width: 50,
                validate: "required"
            },
            {
                name: "location",
                type: "text",
                validate: "required"
            },
            {
                name: "descc",
                type: "text",
                validate: "required"
            },
            {
                name: "start_time",
                type: "text",
                validate: "required"
            },
            {
                name: "timepicker",
                type: "text",
                validate: "required"
            },
            {
                name: "details",
                type: "text",
                validate: "required"
            },
            {
                name: "datepicker",
                type: "text",
                validate: "required"
            },
            {
                type: "control"
            }
        ]

    });

</script>

<?php include('footer.php'); ?>
