@extends('layouts.app')

@section('content')
<ul>
        @if (count($post) > 0)
            @foreach ($post as $posts)
                <li><a href="{{route('post.show', $posts['id'])}}">{{$posts['title']}}</a></li>
             @endforeach
             @else
                <script>alert("Tidak Ada Data!")</script>
        @endif
             
    </ul>
@endsection
    