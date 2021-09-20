@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    @component('components.bread',['icon'=>'cutlery'])
        @slot('title')
            Kategoriler
        @endslot
        @slot('subtitle')
            Kategori görüntüle
        @endslot
        Kategoriler
    @endcomponent
    {{-- /breadcrumb --}}
    {{-- Edit User --}}
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <h3 class="tile-title">Kategori Görüntüle - #{{ $category->title }}</h3>
                    {{-- form for edit the user information --}}
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                          action="{{ route('categories.edit',$category->id) }}">
                        @csrf
                        <div class="form-group row">
                            <label class="control-label col-md-3">Resim</label>
                            <div class="col-md-8">
                                <img src="{{ '../storage/categories/' . $category->picture }}" height="256">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Ad</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="title" placeholder="Enter full name"
                                       value="{{ old('title', $category->title) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Yeni Resim</label>
                            <div class="col-md-8">
                                <input id="avatar" type="file" class="form-control" name="picture">
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