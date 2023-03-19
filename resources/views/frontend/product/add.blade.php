@extends('admin.layout.app')

@section('title')
Add Caste
@endsection


@section('heading')
Add Caste
@endsection

@section('page_content')

<div class="card-body">
    <form action="{{ route('cast.store') }}" method="post">
      @csrf
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="name">Name</label>
        <div class="col-sm-10">
          <input type="text" value="{{old('name')}}"  name="name" class="form-control" id="name" placeholder="cast name">
        </div>
        @if ($errors->has('name'))
        <span class="invalid feedback" role="alert">
            <strong>{{ $errors->first('name') }}.</strong>
        </span>
        @endif
      </div>

      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="price">Price</label>
        <div class="col-sm-10">
          <input type="number" value="{{old('price')}}"  name="price" class="form-control" id="price" placeholder="subscription price">
        </div>
        @if ($errors->has('price'))
        <span class="invalid feedback" role="alert">
            <strong>{{ $errors->first('price') }}.</strong>
        </span>
        @endif
      </div>

      
      <div class="row mb-3">

        <label class="col-sm-2 col-form-label" for="status">Status:</label>
        <div class="col-sm-10">
            
            <select name="status"  class="form-control" id="status">
                <option  value="1" {{old('status') == '1' ? 'selected' : ''}}>Active</option>
                <option  value="0" {{old('status') == '0' ? 'selected' : ''}}>Inactive</option>
                
            </select>
            @if ($errors->has('status'))
            <span class="invalid feedback" role="alert">
                <strong>{{ $errors->first('status') }}.</strong>
            </span>
            @endif
        </div>
    </div>
    
      <div class="row justify-content-end">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>

@endsection