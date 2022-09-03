@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h1 class="text-uppercase font-weight-bold">lista tags</h1>
                @foreach ($tags as $tag)
                    <div>
                        <a href="{{ route('admin.tags.show', $tag->id) }}" class="mb-4 text-capitalize h3 text-info text-decoration-none">{{ $tag->name }}</a>
                    </div>
                @endforeach
            </div>

            <div>
                <a href="{{ route('admin.index') }}" class=""><i class="fa-solid fa-3x fa-circle-arrow-left btn-back"></i></a>
            </div>
        </div>
    </div>
@endsection
