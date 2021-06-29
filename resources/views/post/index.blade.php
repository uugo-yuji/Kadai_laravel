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
                indexです
                  <form method="GET" action="{{ route('post.create') }}">
                    <button type="submit" class="btn btn-outline-secondary">
                      新規登録
                    </button>
                  </form>

                  <table class="table" id="example">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">タイトル</th>
                        <th scope="col">作成日時</th>
                        <th scope="col">詳細</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($posts as $post)
                      <tr>
                        <th scope="row"></th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td><a href="{{ route('post.show', ['id' => $post->id]) }}">詳細をみる</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection