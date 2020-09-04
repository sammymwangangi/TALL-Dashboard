@extends('layouts.admin')

@section('content')
    @foreach($language as $lang)
    {{ $lang }}
    @endforeach
    {{ $repository['url'] }}
    {{ $repository['stargazers_count'] }}
    {{ $owner['login'] }}
    {{ ($contributor['0']['contributions']) + ($contributor['1']['contributions']) }}
{{--    <x-heroicon-s-heart class="h-6 w-6 text-red-600" />--}}

@endsection
