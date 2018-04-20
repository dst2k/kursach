@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


@if ($errors->any())   
  <div class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  </div>     
@endif
@if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session()->get('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
@if(session()->has('error'))
  <div class="alert alert-danger" role="alert">
    {{ session()->get('error') }}
  </div>
@endif





                    <div class="row">
  <div class="col-sm-5">
    <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
                    <label>Загрузите фото:</label>
                    <input type="file" name="image[]" multiple>
                    <button type="submit" class="btn btn-primary">Загрузить</button>
                    

                    
                </form>
  </div>
                  
        </div>
    </div>
</div>
@endsection
