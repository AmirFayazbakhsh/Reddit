@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __($community->name . ' /    ' . $post->title) }}</div>

                    <div class="card-body">
                        @if ($post->post_url)
                            <div><a href="{{ $post->post_url }}">{{ $post->post_url }}</a></div>
                        @endif
                        @if ($post->post_text)
                            <div>
                                <p>
                                    {{ $post->post_text }}
                                </p>
                            </div>
                        @endif

                        <div class="" style="display: inline-block">
                            <a class="btn btn-sm btn-primary"
                                href="{{ route('communities.posts.edit', [$community, $post]) }}">Edit</a>
                            <form action="{{ route('communities.posts.destroy', [$community, $post]) }}" method="POSt">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
