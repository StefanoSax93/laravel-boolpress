@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-11">


                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col">
                            <h1 class="text-uppercase">
                                {{ $category->name }}
                            </h1>

                            <div>
                                <h4 class="text-uppercase">post associati</h4>
                                
                                @foreach ($category->posts as $post)
                                    <div>
                                        <a href="{{ route('admin.posts.show', ['post' => $post->slug]) }}" class="text-decoration-none">
                                            {{ $post->title }}
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    @endforeach
                </div>


            </div>


            <div class="col">
                <a href="{{ route('admin.index') }}" class=""><i
                        class="fa-solid fa-3x fa-circle-arrow-left btn-back"></i></a>
            </div>
        </div>
    </div>
@endsection
