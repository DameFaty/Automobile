@extends('layouts/contentNavbarLayout')

@section('title', 'Acceuil')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')

<div class="p-6 m-20 bg-white rounded shadow mb-4">
    {{$chart->container()}}
</div>

<div class="col-md-6 col-lg-10 order-2 mb-4 d-flex justify-content-around">
    <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Voitures</h5>
        </div>
        <div class="card-body">
            <ul class="p-0 m-0">
                @foreach($Voiture as $V)
                <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                        <img src="{{asset('Voitures/'.$V->Image.'/')}}" class="w-px-50 h-auto rounded-circle">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <small class="text-muted d-block mb-1">{{$V->Marque}}</small>
                            <h6 class="mb-0">{{$V->Model}}</h6>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <h6 class="mb-0">{{$V->Kilometrage}}</h6> <span class="text-muted">Km</span>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Voitures</h5>
        </div>
        <div class="card-body">
            <ul class="p-0 m-0">
                @foreach($Voiture as $V)
                <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                        <img src="{{asset('Voitures/'.$V->Image.'/')}}" class="w-px-50 h-auto rounded-circle">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <small class="text-muted d-block mb-1">{{$V->Marque}}</small>
                            <h6 class="mb-0">{{$V->Model}}</h6>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <h6 class="mb-0">{{$V->Kilometrage}}</h6> <span class="text-muted">Km</span>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Voitures</h5>
        </div>
        <div class="card-body">
            <ul class="p-0 m-0">
                @foreach($Voiture as $V)
                <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                        <img src="{{asset('Voitures/'.$V->Image.'/')}}" class="w-px-50 h-auto rounded-circle">
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <small class="text-muted d-block mb-1">{{$V->Marque}}</small>
                            <h6 class="mb-0">{{$V->Model}}</h6>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                            <h6 class="mb-0">{{$V->Kilometrage}}</h6> <span class="text-muted">Km</span>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}

@endsection
