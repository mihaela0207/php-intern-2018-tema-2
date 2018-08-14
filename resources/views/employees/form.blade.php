<div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Company id: </strong>
        {!! Form::text('company_id', null, ['placeholder'=>'Company id','class'=>'form-control']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Name: </strong>
        {!! Form::textarea('name', null, ['placeholder'=>'Name','class'=>'form-control','style'=>'height:150px']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <a class="btn btn-xs btn-success" href="{{ route('employees.index') }}">Back</a>
      <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
    </div>
  </div>