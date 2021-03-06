@extends('layouts.app')
@section('header')
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a href="#" class="navbar-brand mb-0 h1 px-5">Edit phone</a>
  </div>
</nav>
@endsection

@section('content')
{!! Form::open(['route' => ['Phone.update',$phone->id],'method' => 'put']) !!}
    <div class="row mb-3">
      <label for="phone" class=" col-md-4 col-form-label text-md-end">phone</label>
      <div class="col-6">
      <input type="text" class="form-control " id="phone" name="phone" required value="{{$phone->phone}}">
     </div> 
     <div class="col-12 text-center m-5 " style="">
        <button type="submit" class="btn btn-primary" >update</button>
     </div>
    </div>
    {!! Form::close() !!}
@endsection
