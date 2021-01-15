@extends('backend.app')

@section('content')
    <x-dashboard />
    <div id="dashboard">
        <Dashboard></Dashboard>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>

@endpush
