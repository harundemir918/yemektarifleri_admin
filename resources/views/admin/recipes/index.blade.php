@extends('layouts.app')

@section('content')
  {{-- breadcrumb --}}
  @component('components.bread',['icon'=>'cutlery'])
    @slot('title')
      Tarifler
    @endslot
    @slot('subtitle')
      Tarif listesi
    @endslot
    Tarifler
  @endcomponent
  {{-- /breadcrumb --}}
  {{-- list of recipes --}}
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Tarif listesi</h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
            <tr>
              <th>#</th>
              <th>Resim</th>
              <th>Ad</th>
              <th>Kategori</th>
              <th>İçindekiler</th>
              <th>Tarif</th>
              <th>Kalori</th>
              <th>Süre</th>
              <th>Kişi</th>
              <th>Karbonhidrat</th>
              <th>Protein</th>
              <th>Yağ</th>
              <th>Aktif</th>
              <th>Tavsiye</th>
              <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($recipes as $recipe)
              <tr>
                <td>{{ $recipe->id }}</td>
                <td><img src="{{ 'storage/recipes/' . $recipe->picture }}" width="64" height="64"></td>
                <td>{{ $recipe->title }}</td>
                <td>{{ $recipe->category }}</td>
                <td>{{ substr($recipe->ingredients, 0, 50) . "..." }}</td>
                <td>{{ substr($recipe->recipe, 0, 50) . "..." }}</td>
                <td>{{ $recipe->calories }}</td>
                <td>{{ $recipe->duration }}</td>
                <td>{{ $recipe->person }}</td>
                <td>{{ $recipe->carbohydrate }}</td>
                <td>{{ $recipe->protein }}</td>
                <td>{{ $recipe->fat }}</td>
                <td>
                  <input type="checkbox" @if($recipe->active == 1) checked @endif onclick="return false;">
                </td>
                <td>
                  <input type="checkbox" @if($recipe->recommended == 1) checked @endif onclick="return false;">
                </td>
                <td>
                  <a href="{{ route('recipes.edit',$recipe->id) }}"><i class="fa fa-edit"></i></a>
                  <a href="{{ route('recipes.delete',$recipe->id) }}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  {{-- /list of recipes --}}
@endsection