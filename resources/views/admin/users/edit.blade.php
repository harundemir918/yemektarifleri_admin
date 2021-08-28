@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    @component('components.bread',['icon'=>'users'])
        @slot('title')
            Kullanıcılar
        @endslot
        @slot('subtitle')
            Kullanıcı düzenle
        @endslot
        Kullanıcılar
    @endcomponent
    {{-- /breadcrumb --}}
    {{-- Edit User --}}
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <h3 class="tile-title">Kullanıcı Düzenle - #{{ $user->name }}</h3>
                    {{-- form for edit the user information --}}
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                          action="{{ route('users.edit',$user->id) }}">
                        @csrf
                        <div class="form-group row">
                            <label class="control-label col-md-3">Ad</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="name" placeholder="Enter full name"
                                       value="{{ old('name', $user->name) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" type="email" name="email"
                                       placeholder="Enter email address" value="{{ old('email', $user->email) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Cinsiyet</label>
                            <div class="col-md-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="Erkek" type="radio" name="gender"
                                               @if($user->gender == 'Erkek' || old('gender') == 'Erkek') checked @endif>Erkek
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="Kadın" type="radio" name="gender"
                                               @if($user->gender == 'Kadın' || old('gender') == 'Kadın') checked @endif>Kadın
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Profil Fotoğrafı</label>
                            <div class="col-md-8">
                                <input id="avatar" type="file" class="form-control" name="avatar">
                            </div>
                        </div>

                    {{-- /form for editing the user information --}}
                </div>
                <div class="tile-footer">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i>Güncelle
                            </button>
                            <a class="btn btn-secondary" href="#">
                                <i class="fa fa-fw fa-lg fa-times-circle"></i>İptal
                            </a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- /Edit User --}}
@endsection