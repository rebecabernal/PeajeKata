@extends("layouts.app")

@section('content')

        <h1 class="text">Welcome</h1>
        <section class="mainContent">
            <div class="option">
                <a href="{{ route('tolls') }}">
                    <img src="https://res.cloudinary.com/dg28513f0/image/upload/v1739009350/hwybngps54qy9b00cm7d.jpg" alt="toll station">
                </a>
                <p>Tolls</p>
            </div>

            <div class="option">
                <a href="{{ route('vehicles') }}">
                    <img src="https://res.cloudinary.com/dg28513f0/image/upload/v1739009044/gyvxtr6zrb6kqic4byca.jpg" alt="red toyota celica">
                </a>
                <p>Vehicles</p>
            </div>
        </section>
@endsection