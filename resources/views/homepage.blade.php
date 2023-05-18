@extends('layouts.main')
@push('title')
    <title>Home page</title>
@endpush
@section('main-section')
<h2 class='text-primary'>{!!$name!!}</h2>
<h3>{{$email}}</h3>
{{time()}}<br>
{{date('d-M-Y')}}<br>

@if ($name=='happy')
    <h1>{{$name}}</h1>
@else
    <h1>{{'not ok'}}</h1>
@endif
@endsection