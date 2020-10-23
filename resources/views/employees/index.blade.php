@extends('layout.mainlayout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="row justify-content-center">
            <div class="col-auto">
            <h2>All employees </h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-auto">
            <a href="{{ route('employees.create') }}" class="btn btn-success">Create employee</a>
        </div>
    </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="row justify-content-center">
    <div class="col-auto">
  <table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th>@sortablelink('id')</th>
            <th>@sortablelink('firstname')</th>
            <th>@sortablelink('middlename')</th>
            <th>@sortablelink('lastname')</th>
            <th>@sortablelink('slary')</th>
            <th>@sortablelink('employed at')</th>
            <th>action</th>
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
                <td>
                    <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
            </td>
            </tr>
        @endforeach
        {!! $employees->appends(\Request::except('page'))->render() !!}
    </tbody>
</table>
</table>
</table>
@endsection