@extends('layouts.app')
@section('content')

<form action="{{ URL::to('preview') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<p><img src="{{ url('storage/kursach/layouts/' . $layout->layout) }}" style="height: 300px"></p>
@foreach($images as $image)

<p><img src="{{ url('storage/kursach/' . $image->image) }} " style="height: 100px"/></p>

@for($i=1; $i<=$img_quantity; $i++)

<div class="form-group row">
    <div class="col-sm-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="check_list[]" value="{{ $i }}">
        <label class="form-check-label" for="gridCheck1">
          {{ $i }}
        </label>
      </div>
    </div>
  </div>

@endfor

_________________________________________
<p></p>

@endforeach

<p><button type="submit" class="btn btn-primary">Предпросмотр</button></p>
<a class="btn btn-secondary" href="{{ url('layouts') }}">Назад</a>
</form>
@endsection