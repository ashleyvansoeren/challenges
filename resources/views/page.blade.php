@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.todo')
    @include('partials.test')
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
