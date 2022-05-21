@extends('layouts.app')

@section('content')
<div class="admin-page container-fluid px-5">
  <div class="row">
    <div class="col-12">
      <h1>Tutti i post per Admin</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-9">
        @foreach ($posts as $post)
        <div class="my-card d-flex">
          <img src="{{ $post->image_url }}" alt="Picture of {{ $post->title }}" class="card-img">
          <div class="my-card-body">
            <h2 class="title">{{ $post->title }}</h2>
            <h4 class="author">{{ $post->author }}</h4>
            <p class="content">{{ $post->content }}</p>
          </div>
        </div>
        @endforeach
      </div>
    <div class="col-3">
      <div class="my-sidebar">
        Questo blog si mantiene grazie a:
      </div>
    </div>
  </div>
</div>
@endsection
