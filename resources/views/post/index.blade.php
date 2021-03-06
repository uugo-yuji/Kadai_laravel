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
                  <h6 class="font-weight-bold">記事一覧</h6>
                  <form method="GET" action="{{ route('post.create') }}">
                    <button type="submit" class="btn btn-outline-secondary">
                      新規登録
                    </button>
                  </form>
                  <select id="sort" name="sort" onchange="sortChange();">
                    <option value="asc">昇順</option>
                    <option value="desc">降順</option>
                  </select>

                  <div class="example">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col"></th>
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
                  </div>
                  {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/sort.js') }}"></script>
@endsection