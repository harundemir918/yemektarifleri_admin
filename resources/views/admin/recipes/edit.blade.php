@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    @component('components.bread',['icon'=>'cutlery'])
        @slot('title')
            Tarifler
        @endslot
        @slot('subtitle')
            Tarif görüntüle
        @endslot
        Tarifler
    @endcomponent
    {{-- /breadcrumb --}}
    {{-- Edit User --}}
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <h3 class="tile-title">Tarif Görüntüle - #{{ $recipe->title }}</h3>
                    {{-- form for edit the user information --}}
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data"
                          action="{{ route('recipes.edit',$recipe->id) }}">
                        @csrf
                        <div class="form-group row">
                            <label class="control-label col-md-3">Resim</label>
                            <div class="col-md-8">
                                <img src="{{ $recipe->picture }}" height="256">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Ad</label>
                            <div class="col-md-8">
                                <p>{{ old('name', $recipe->title) }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Kategori</label>
                            <div class="col-md-8">
                                <p>{{ old('email', $recipe->category) }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">İçindekiler</label>
                            <div class="col-md-8">
                                <p>{{ old('name', $recipe->ingredients) }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Tarif</label>
                            <div class="col-md-8">
                                <p>{{ old('name', $recipe->recipe) }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Kalori</label>
                            <div class="col-md-8">
                                <p>{{ old('name', $recipe->calories) }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Süre</label>
                            <div class="col-md-8">
                                <p>{{ old('name', $recipe->duration) }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Kişi</label>
                            <div class="col-md-8">
                                <p>{{ old('name', $recipe->person) }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Karbonhidrat</label>
                            <div class="col-md-8">
                                <p>{{ old('name', $recipe->carbohydrate) }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Protein</label>
                            <div class="col-md-8">
                                <p>{{ old('name', $recipe->protein) }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Yağ</label>
                            <div class="col-md-8">
                                <p>{{ old('name', $recipe->fat) }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Yayın Durumu</label>
                            <div class="col-md-8">
                                <input type="checkbox" name="active" @if($recipe->active == 1) checked @endif>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Tavsiye Edilme Durumu</label>
                            <div class="col-md-8">
                                <input type="checkbox" name="recommended" @if($recipe->recommended == 1) checked @endif>
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