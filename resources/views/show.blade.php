@extends('app.welcome')
@section('content')

        @foreach($posts as $post)
            @if($category->id===$post->category_id)
                <div class="grid">
                    <div class="container">
                        <div class="populars_post">
                <div class="popular_block_1">
                <img src="{{$post->image}}">
                </div>
                    <div class="popular_block_2">
                    <p>{{$post->content}}</p>
                    </div>
                        </div>
                    </div>
                </div>
            @endif


@endforeach

@endsection
