<html>

<head>
</head>

<body>
    <h1>Ag-Grid Example</h1>
    <div id="myGrid" style="height: 115px;width:500px" class="ag-fresh"></div>

    <!-- Own Scripts -->
    <script src="{{ asset('js/example.js') }}"></script>
</body>

<script src="https://www.ag-grid.com/dist/ag-grid/ag-grid.js"></script>
<script type="text/javascript">
    /* var res = [
        @foreach($storedTasks as $task) 
        {
            name: "{{ $task->name }}",
            created_at: "{{ $task->created_at }}",
            updated_at: "{{ $task->updated_at }}"
        },
        @endforeach
    ];*/
    
    var res = {!! json_encode($storedTasks) !!};
    console.log("res: " + JSON.stringify(res));
</script>
<script src="example.js"></script>


</html>
