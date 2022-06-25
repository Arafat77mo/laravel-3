@extends('layouts.app')


@section('content')
@foreach ($phone as $phone)
    

  <div class="card" style="width: 18rem;">
    <div class="card-body"> 
             <h6 class="card-subtitle mb-2 text-muted">{{'Your Number'}}</h6>
 <h5 class="card-title"> Number of User : {{$phone->user_id}}</h5>
      <h5 class="card-title"> {{$phone->phone}}</h5>
     
      <div class="row">
        <div class="col-6">
              <a href="{{route('Phone.edit',$phone->id)}}" class="btn btn-primary">update</a>
            </div>
            <div class="col-6">
              {!! Form::open(['route' => ['Phone.destroy',$phone->id],'method' => 'delete']) !!}
              <button type="submit" class="btn btn-danger">Delete</button>
              {!! Form::close() !!}
            </div>
            </div>
            </div>
    </div>
    </div>
  </div>
@endforeach


@endsection