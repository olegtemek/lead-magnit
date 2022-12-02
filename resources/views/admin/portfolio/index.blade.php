@extends('admin.main')


@section('title')
Все кейсы
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.portfolio.create') }}" class="btn btn-success">Добавить кейс</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все кейсы</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Фотография</th>
                <th>Цель</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($portfolios as $portfolio)
            <tr>
              <td><img src="/{{$portfolio->image}}" style="max-width:200px" alt=""></td>
              <td>{{$portfolio->task}}</td>
              <td>
                <a href="{{route('admin.portfolio.edit', $portfolio->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.portfolio.destroy', $portfolio->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Удалить</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          </table>
        </div>
        
        </div>
    </div>
  </div>
</section>

@endsection