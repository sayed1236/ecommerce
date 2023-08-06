@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 row">
            {{--  <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>  --}}
            {{--  <div class="">
                <h1>{{ Auth()->user()->name }}</h1>
            </div>  --}}
            @foreach ($data as $dat)

            <form action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
                @csrf

            {{--  <div class="col-lg-12 row">  --}}

            <div class="card col-lg-4 ">
                <img src="download.png" class="card-img-top" alt="..." >
                <div class="card-body">
                  <h5 class="card-title">{{ $dat->name }}</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button type="submit" class="btn btn-success ">add to cart</button>
                </div>
                </div>
        </div>
    </form>
            @endforeach



        </div>
    </div>
</div>
@endsection
