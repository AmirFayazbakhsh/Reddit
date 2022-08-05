@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __($community->name) }}</div>

                    <div class="card-body">
                        <a class="btn btn-sm btn-primary" href="{{ route('communities.posts.create', $community) }}">Create
                            Post</a>
                    </div>

                    <div class="card-body">
                        @forelse ($posts as $post)
                            <a class="" href="{{ route('communities.posts.show', [$community, $post]) }}">
                                <h3>{{ $post->title }}</h3>
                            </a>
                            <div>
                                <p>{{ \Illuminate\Support\Str::words($post->post_text, 10) }}</p>
                            </div>
                            <hr>
                        @empty
                            No post exist
                        @endforelse

                        {{ $posts->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
