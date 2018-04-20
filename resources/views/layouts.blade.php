@extends('layouts.app')
@section('content')

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Выберите макет коллажа ^_^
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  @foreach($layouts as $layout)
    <a class="dropdown-item" href="{{ url('/collage/' . $layout->id) }}"><img src="{{ url('storage/kursach/layouts/' . $layout->layout) }} "style="max-height: 120px"/></a>
  @endforeach
    </div>
</div>
<div class="col-sm-10">
<a class="btn btn-secondary" href="{{ url('home') }}">Назад</a>
</div>

@endsection