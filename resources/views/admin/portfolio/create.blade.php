@extends('admin.main')


@section('title')
Добавить кейс
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.portfolio.store') }}">
    @csrf
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Цель</label>
              @error('task')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('task') }}" class="form-control" name="task" placeholder="Цель">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Ссылка</label>
              @error('link')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('link') }}" class="form-control" name="link" placeholder="Ссылка">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              @error('image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-4 input-group">
                <label style="display: block; width:100%">Изображение</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить кейс</button>
      </div>    
    </div>
  </form>
</div>

@endsection