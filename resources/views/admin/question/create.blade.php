@extends('admin.main')


@section('title')
Добавить кейс
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.question.store') }}">
    @csrf
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Вопрос</label>
              @error('question')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('question') }}" class="form-control" name="question" placeholder="Вопрос">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Ответ</label>
              @error('answer')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('answer') }}" class="form-control" name="answer" placeholder="Ответ">
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