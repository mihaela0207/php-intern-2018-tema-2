@extends('employees.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h3>Laravel CRUD </h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="{{ route('employees.create') }}">Create New Company</a>
      </div>
    </div>
  </div>

  
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>Id</th>
      <th>Company id</th>
      <th>Name</th>
      <th width="300px">Actions</th>
    </tr>

    @foreach ($employees as $employee)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $employee->company_id }}</td>
        <td>{{ $employee->name }}</td>
        <td>
          <a class="btn btn-xs btn-info" href="{{ route('employees.show', $employee->id) }}">Show</a>
          <a class="btn btn-xs btn-primary" href="{{ route('employees.edit', $employee->id) }}">Edit</a>

          {!! Form::open(['method' => 'DELETE', 'route'=>['employees.destroy', $employee->id], 'style'=> 'display:inline']) !!}
          {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
  {!! $employees->links() !!}
@endsection