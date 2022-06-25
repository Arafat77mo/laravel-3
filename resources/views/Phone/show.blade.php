@extends('layouts.app')


@section('content')
@foreach ($phone as $phone)
    

  <div class="card" style="width: 18rem;">
    <div class="card-body"> 
             <h6 class="card-subtitle mb-2 text-muted">{{'Your Number'}}</h6>
 <h5 class="card-title"> Number of User : {{$phone->user_id}}</h5>
      <h5 class="card-title"> {{$phone->phone}}</h5>
     

    </div>
    </div>
  </div>
@endforeach


@endsection