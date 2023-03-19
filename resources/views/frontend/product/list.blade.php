@extends('frontend.layout.app')

@section('title')
Products
@endsection


@section('heading')
Products
@endsection


@section('filter')
{{-- <a class='btn btn-primary' href="{{ route('cast.add') }}">Add</a> --}}
@endsection


@section('page_content')
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
    
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th></th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @if(count($products) != 0)
          @foreach ( $products as $list )
          <tr>
           

            <td> <strong>{{ $list->name }}</strong></td>
            
             <td>{{ $list->description}}</td>
          
            
            <td> {{ $list->price}}
            </td>
            <td></td>
            <td>
             <img src="{{ $list->image}}" alt=".">
            </td>
          
          </tr>
          @endforeach
        @else
        <tr><td style="text-align: center;" colspan="5">no data</td></tr>

        @endif
         
          
        </tbody>
      </table>
      {{ $products->links()}}
    </div>
  

@endsection