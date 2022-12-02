@extends('admin.main')


@section('title')
Главная Dashboard
@endsection

@section('content')

<div class="card-body">
  <form method="POST" action="{{ route('admin.home.update', $setting->id) }}">
    @csrf
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <h2 class="col-sm-12">Основные настройки страницы</h2>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Номер телефона</label>
              @error('number')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $setting->number }}" class="form-control" name="number" placeholder="Заголовок">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Адрес</label>
              @error('address')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $setting->address }}" class="form-control" name="address" placeholder="Заголовок">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Ссылка на карты</label>
              @error('map')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $setting->map }}" class="form-control" name="map" placeholder="Заголовок">
            </div>
          </div>
      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Сохранить настройки</button>
      </div>    
    </div>
  </form>
</div>

@endsection