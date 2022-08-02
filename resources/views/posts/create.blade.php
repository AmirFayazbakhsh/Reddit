@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post for {{$community->name}}</div>

                <div class="card-body">

                    <form action="{{route('communities.posts.store',$community)}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="post_text" class="col-md-4 col-form-label text-md-end">{{ __('Post Text') }}</label>

                            <div class="col-md-6">
                                <textarea id="post_text" type="textarea" class="form-control @error('post_text') is-invalid @enderror" name="post_text" value="{{ old('post_text') }}" required autocomplete="post_text" autofocus></textarea>

                                @error('post_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="post_url" class="col-md-4 col-form-label text-md-end">{{ __('Post URL') }}</label>

                            <div class="col-md-6">
                                <input id="post_url" type="text" class="form-control @error('post_url') is-invalid @enderror" name="post_url" value="{{ old('post_url') }}" required autocomplete="post_url" autofocus>

                                @error('post_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="post_image" class="col-md-4 col-form-label text-md-end">{{ __('Post Image') }}</label>

                            <div class="col-md-6">
                                <input id="post_image" type="file" class="form-control @error('post_image') is-invalid @enderror" name="post_image" value="{{ old('post_image') }}" required autocomplete="post_image" autofocus>

                                @error('post_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 form-group">

                            <div class="col-md-4 offset-md-4">
                                <input class="form-control btn btn-primary" type="submit" value="Create">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
