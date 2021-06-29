@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>{{ $post->user->name }}さんの投稿</h3>
                    <div class="card">
                      <div class="card-header">
                      {{ $post->title }}
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">{{ $post->body }}</h5>
                        {{ $post->create_at }}
                      </div>
                    </div>
                <form method="GET" action="{{ route('post.edit', ['id' => $post->id]) }}">
                @csrf
                  <input class="btn btn-outline-secondary" type="submit" value="変更する">
                </form>

                  <form method="POST" action="{{ route('post.destroy', ['id' => $post->id]) }}" id="delete_{{ $post->id}}">
                    @csrf
                    <a href="#" class="btn btn-outline-secondary" data-id="{{ $post->id }}" onclick="deletePost(this);">削除する</a>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

function deletePost(e) {
  'use strict';
  if (confirm('本当に削除してもいいですか？')) {
    document.getElementById('delete_' + e.dataset.id).submit();
  }
}
</script>
@endsection