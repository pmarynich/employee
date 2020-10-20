@extends('layout.mainlayout')

@section('content')

   <div class="album text-muted">

     <div class="container">

       <div class="row">

         <h1>This is a demo text</h1>

  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat. Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit et leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut dolor. In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel sodales ipsum sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat. Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit et leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut dolor. In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel sodales ipsum sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat. Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit et leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut dolor. In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel sodales ipsum sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat. Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit et leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut dolor. In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel sodales ipsum sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat. Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit et leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut dolor. In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel sodales ipsum sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.</p>


  <table class="table table-sm">
    <thead>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>middlename</th>
            <th>lastname</th>
            <th>slary</th>
            <th>employed at</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->firstname }}</td>
                <td>{{ $employee->middlename }}</td>
                <td>{{ $employee->lastname }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->employed_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    


 



@endsection

<b></b>