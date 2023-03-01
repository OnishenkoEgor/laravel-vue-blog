@extends('layouts.main')
@section('content')
    <h2>Posts page</h2>
    @if (count($posts))
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('post.show', $post->id) }}"
                        style="display:block; box-shadow:0px 0px 3px 3px rgba(0,0,0,.1); margin-bottom:15px;padding:10px; width:max-content;">
                        <span>{{ $post->id }}</span>
                        <span>{{ $post->title }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
        <div>
            {{ $posts->links() }}
        </div>
    @else
        <p>Not found posts</p>
    @endif
@endsection
