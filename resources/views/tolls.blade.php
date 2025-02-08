@extends("layouts.app")

@section('content')
    <div class="title">
        <h2>Tolls</h2>
        <a href="{{ '/' }}" class="home-btn">Home</a>
    </div>
    <div class="content">
        @foreach($tolls as $toll)
           <div class="toll_card"> 
                <h3>{{$toll->name}}</h3>
                <div>
                    <h4>Vehicles: </h4> 
                    @foreach($toll->vehicles as $vehicle)
                        <p>{{$vehicle->vehicleType->type}}. {{$vehicle->plate}}</p> 
                    @endforeach
                    <h4>Total income: </h4> 
                    <p>${{$toll->income}}</p>
                </div>
           </div> 
        @endforeach
    </div>
@endsection
