@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <h1 class="heading2xl text-red">This is a test</h1>

  <h1 class="text-heading2xl">Hello, World! Welcome to my site huh!</h1>

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
