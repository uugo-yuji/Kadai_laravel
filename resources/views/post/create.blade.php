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

                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                <form method="POST" action="{{ route('post.store') }}">
                @csrf
                  <div class="form-group">
                    <label for="formGroupExampleInput">タイトル</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="タイトル">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">本文</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="body" placeholder="本文"></textarea>
                  </div>
                  <br>
                  <input class="btn btn-outline-secondary" type="submit" value="登録する">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection