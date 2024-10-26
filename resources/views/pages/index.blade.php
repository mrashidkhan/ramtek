@extends('layouts.master')

@section('title', 'Home')

@section('page-title', 'Home')

@section('content')

    @include('partials.caraouselsection')
    @include('partials.factsection')
    @include('partials.aboutsection')
    @include('partials.servicessection')
    {{-- @include('partials.projectsection')
    @include('partials.blogsection') --}}
    @include('partials.teamsection')
    {{-- @include('partials.testimonialsection') --}}
    @include('partials.contactsection')

@endsection
