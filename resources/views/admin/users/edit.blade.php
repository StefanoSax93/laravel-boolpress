@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Modifica utente {{ $user->name }}</h1>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-activity">
                            <line x1="20" y1="12" x2="4" y2="12"></line>
                            <polyline points="10 18 4 12 10 6"></polyline>
                        </svg> Tutti gli utenti
                    </a>
                </div>

                <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Inserisci il nome" value="{{ old('name', $user->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Inserisci l'email" value="{{ old('email', $user->email) }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="profile_img_file" class="form-label">Immagine profilo</label>

                        <div class="d-flex">
                            @if($user->profile_img) 
                                <img class="img-thumbnail" style="width: 150px"
                                src="{{ asset('storage/' . $user->profile_img) }}">
                            @else 
                                <img class="img-thumbnail" style="width: 150px"
                                src="https://www.pngfind.com/pngs/m/610-6104451_image-placeholder-png-user-profile-placeholder-image-png.png" alt="">
                            @endif

                            <input type="file" name="profile_img"
                                class="form-control-file pl-2 @error('profile_img') is-invalid @enderror" id="profile_img_file"
                                value="{{ old('profile_img', $user->profile_img) }}">
                        </div>
                        @error('profile_img')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Indirizzo</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                            placeholder="Inserisci l'indirizzo"
                            value="{{ old('address', $user->details ? $user->details->address : '') }}" required>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Città</label>
                        <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"
                            placeholder="Inserisci la città"
                            value="{{ old('city', $user->details ? $user->details->city : '') }}" required>
                        @error('city')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Provincia</label>
                        <input type="text" name="province" class="form-control @error('province') is-invalid @enderror"
                            placeholder="Inserisci la provincia"
                            value="{{ old('province', $user->details ? $user->details->province : '') }}" required>
                        @error('province')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                            placeholder="Inserisci il numero di telefono"
                            value="{{ old('phone', $user->details ? $user->details->phone : '') }}" required>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-activity">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                                <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                <polyline points="7 3 7 8 15 8"></polyline>
                            </svg> Salva post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
