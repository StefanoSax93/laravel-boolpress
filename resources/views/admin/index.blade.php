@extends('layouts.app')

@section('content')
    <div class="container h-50">
        <h1 class="mb-5">
            Benvenuto <strong>{{ Auth::user()->name }}</strong>
        </h1>

        <div class="div h-75">
            <div class="row row-cols-2 h-100">
                <div class="col h-100 mb-4">
                    <a href="{{ route('admin.posts.index') }}" class="text-uppercase text-white">
                        <div class="card h-100 d-flex justify-content-center align-items-center"
                            style="background: linear-gradient(black,skyblue)">
                            <h2>
                                vai ai Post
                            </h2>
                        </div>
                    </a>
                </div>
                <div class="col h-100 mb-4">
                    <a href="{{ route('admin.users.index') }}" class="text-uppercase text-white">
                        <div class="card h-100 justify-content-center align-items-center"
                            style="background: linear-gradient(forestgreen,silver)">
                            <h2>
                                vedi lista utenti
                            </h2>
                        </div>
                    </a>
                </div>
                <div class="col h-100 mb-4">
                    <a href="{{ route('admin.tags.index') }}" class="text-uppercase text-white">
                        <div class="card h-100 justify-content-center align-items-center"
                            style="background: linear-gradient(purple,lightgrey)">
                            <h2>
                                Lista Tags
                            </h2>
                        </div>
                    </a>
                </div>
                <div class="col h-100 mb-4">
                    <a href="{{ route('admin.categories.index') }}" class="text-uppercase text-white">
                        <div class="card h-100 justify-content-center align-items-center"
                            style="background: linear-gradient(orange,black)">
                            <h2>
                                Categorie
                            </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
