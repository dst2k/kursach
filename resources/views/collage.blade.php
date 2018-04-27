@extends('layouts.app')
@section('content')

<form action="{{ URL::to('preview') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<p><img src="{{ url('storage/kursach/layouts/' . $layout->layout) }}" style="height: 300px"></p>
@foreach($images as $image)

<div class="layout">
<p><img src="{{ url('storage/kursach/' . $image->image) }} " style="height: 100px"/></p>

@for($i=1; $i<=$img_quantity; $i++)
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
    <input type="radio" name="image{{$i}}" value="{{$i}}" >{{$i}}
    </div>
  </div>
</div>
@endfor
</div>

@endforeach

<p><button type="submit" class="btn btn-primary">Предпросмотр</button></p>
<a class="btn btn-secondary" href="{{ url('layouts') }}">Назад</a>
</form>
@endsection