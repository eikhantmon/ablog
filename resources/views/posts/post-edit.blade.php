@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {{ $post->title }} post </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.update', ['id' => $post->id ]) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                      <div class="form-group">
                        <label for="title">Blog title</label>
                        <input type="text" class="form-control" id="title" placeholder="" name="title" value="{{ $post->title }}">
                      </div>
                      <div class="form-group">
                        <label for="cover">Blog cover</label>
                        <input type="file" class="form-control" id="cover" placeholder="" name="cover" >
                      </div>
                      <div class="form-group">
                        <label for="pre_description">Blog Pre Description</label>
                        <textarea id="pre_description" class="form-control" name="pre_description">{{ $post->pre_description }}</textarea>

                      </div>
                      <div class="form-group">
                        <label for="description">Blog Description</label>
                        <textarea id="description" class="form-control" name="description">{{ $post->description }}</textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
