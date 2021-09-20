@extends('layouts.app')

@section('content')
  {{-- breadcrumb --}}
  @component('components.bread',['icon'=>'cutlery'])
    @slot('title')
      Kategoriler
    @endslot
    @slot('subtitle')
      Kategori listesi
    @endslot
    Kategoriler
  @endcomponent
  {{-- /breadcrumb --}}
  {{-- list of recipes --}}
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="row">
          <h3 class="tile-title">Kategori listesi</h3>
          <a href="{{ route('categories.create') }}"><button class="btn btn-primary" type="submit">
              <i class="fa fa-fw fa-lg fa fa-plus"></i>Yeni Kategori Ekle
            </button></a>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead>
            <tr>
              <th>#</th>
              <th>Resim</th>
              <th>Ad</th>
              <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
              <tr>
                <td>{{ $category->id }}</td>
                <td><img src="{{ 'storage/categories/' . $category->picture }}" width="64" height="64"></td>
                <td>{{ $category->title }}</td>
                <td>
                  <a href="{{ route('categories.edit',$category->id) }}"><i class="fa fa-edit"></i></a>
                  <a href="{{ route('categories.delete',$category->id) }}"><i class="fa fa-trash"></i></a>
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