@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Tutti i posts</h1>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-success">
                        Crea nuovo post
                    </a>
                    <a href="{{ route('admin.index') }}"><i class="fa-solid fa-3x fa-circle-arrow-left btn-back"></i></a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Titolo</th>
                            <th>Slug</th>
                            <th>Autore</th>
                            <th>Tags</th>
                            <th>Categoria</th>
                            <th class="text-center">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->user ? $post->user->name : '' }}</td>
                                <td>
                                    @foreach ($post->tags as $tag)
                                        <a href="{{ route('admin.tags.show', $tag->id) }}" class="text-decoration-none">{{ $tag->name }}</a>
                                        @if (!$loop->last)
                                            <span> -</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <div>{{ $post->category ? $post->category->name : '' }}</div>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-info btn-sm"
                                        href="{{ route('admin.posts.show', ['post' => $post->slug]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                    <a class="btn btn-warning btn-sm"
                                        href="{{ route('admin.posts.edit', ['post' => $post->slug]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                            <polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon>
                                            <line x1="3" y1="22" x2="21" y2="22"></line>
                                        </svg>
                                    </a>
                                    <form class="d-inline-block"
                                        action="{{ route('admin.posts.destroy', ['post' => $post->slug]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-activity">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
