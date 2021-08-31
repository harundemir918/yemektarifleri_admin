@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    @component('components.bread')
        @slot('title')
            Ana Sayfa
        @endslot
        @slot('subtitle')
            Ana sayfa
        @endslot
        Ana Sayfa
    @endcomponent
    {{-- /breadcrumb --}}
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-cutlery fa-3x"></i>
                <div class="info">
                    <h4>Tüm Tarifler</h4>
                    <p><b>5</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-check-square fa-3x"></i>
                <div class="info">
                    <h4>Yayındaki Tarifler</h4>
                    <p><b>10</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Tavsiye Edilen Tarifler</h4>
                    <p><b>500</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Kullanıcılar</h4>
                    <p><b>25</b></p>
                </div>
            </div>
        </div>
    </div>

@endsection

