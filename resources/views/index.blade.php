<html>

<head>
</head>

<body>
    <h1>Ag-Grid Example</h1>
    <div id="myGrid" style="height: 115px;width:500px" class="ag-fresh"></div>

    <h1>Old way</h1>
    {{-- display stored tasks --}}
    @if (count($storedTasks) > 0)
      <table class="table">
        <thead>
          <th>Task #</th>
          <th>Name</th>
          <th>Created_At</th>
          <th>Updated_At</th>
        </thead>

        <tbody>
          @foreach ($storedTasks as $storedTask)
            <tr>
              <th>{{ $storedTask->id }}</th>
              <td>{{ $storedTask->name }}</td>
              <td>{{ $storedTask->created_at }}</td>
              <td>{{ $storedTask->updated_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif

    <!-- Own Scripts -->
    <script src="https://www.ag-grid.com/dist/ag-grid/ag-grid.js"></script>
    <script type="text/javascript">
        var res = [
                @foreach($storedTasks as $task) 
                {
                    name: "{{ $task->name }}",
                    created_at: "{{ $task->created_at }}",
                    updated_at: "{{ $task->updated_at }}"
                },
                @endforeach
            ];
        // var res = {!! json_encode($storedTasks) !!};
        console.log("res: " + JSON.stringify(res[1]));
    </script>
    <script src="{{ asset('js/example.js') }}"></script>
</body>
</html>
