@extends('employees.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Show Employee </h3> <a class="btn btn-xs btn-primary" href="{{ route('employees.index') }}">Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Company id: </strong>
        {{ $employee->company_id }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Name: </strong>
        {{ $employee->name }}
      </div>
    </div>
  </div>
  
@endsection