@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="d-flex justify-content-between">
            <div>
                <div class="mb-5">
                    <h1 class="text-uppercase">nome tag</h1>
                    <div class="text-capitalize">{{$tag->name}}</div>
                </div>
        
                <div>
                    <h1 class="text-uppercase">post associati</h1>
                    <div>
                        @foreach($tag->posts as $post)
                        <a href="{{ route('admin.posts.show', ['post' => $post->slug]) }}" class="text-decoration-none">
                            {{ $post->title }}
                        </a>

                        @if(!$loop->last) 
                            <span class="mx-2">-</span>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                <a href="{{ route('admin.tags.index') }}" class="text-right"><i class="fa-solid fa-3x fa-circle-arrow-left btn-back"></i></a>
            </div>
        </div>

        
    </div>
@endsection
