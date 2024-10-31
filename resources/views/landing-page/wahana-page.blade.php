@extends('layouts.landing')
@section('title', 'Wahana')
@section('css')
    @livewireStyles
@endsection
@section('content')

@livewire('wahana-section.main')
    
@endsection
@section('js')
    @livewireScripts
    @stack('scripts')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection