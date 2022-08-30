@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Lista utenti</h1>
                    <a href="{{ route('admin.index')}}"><i class="fa-solid fa-3x fa-circle-arrow-left btn-back"></i></a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Posts</th>
                            <th class="text-center">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->posts as $post)
                                        <div>
                                            <a href="{{ route('admin.posts.show', ['post' => $post->slug]) }}">{{ $post->title }}</a>
                                        </div>
                                    @endforeach
                                </td>
                                
                                @if($user->id === Auth::user()->id)
                                <td class="text-center">
                                    <a class="btn btn-warning btn-sm"
                                        href="{{ route('admin.users.edit', ['user' => $user->id]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                            <polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon>
                                            <line x1="3" y1="22" x2="21" y2="22"></line>
                                        </svg>
                                    </a>
                                </td> 
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
