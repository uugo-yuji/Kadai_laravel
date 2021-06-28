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

                    <form method="POST" action="{{ route('post.update', ['id' => $post->id]) }}">
                @csrf
                  <div class="form-group">
                    <label for="formGroupExampleInput">タイトル</label>
                    <input type="text" class="form-control" id="formGroupExampleInput"
                      name="title" placeholder="タイトル" value="{{ $post->title }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1" value="">本文</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1"
                      rows="5" name="body" placeholder="本文">{{ $post->body }}</textarea>
                  </div>
                  <input class="btn btn-outline-secondary" type="submit" value="更新する">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection