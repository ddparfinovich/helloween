@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method = "post" action="{{asset('home')}}" enctype="multipart/form-data">

                        @csrf
                        <div class = "form-group">
                            <label for="email"> Emale address</label>
                            <input name = "email" type="email" class="form-control" id="email" value="{{auth::user()->email}}"> 
                            
                        </div> 
                        <div class = "form-group">
                            <label for="name"> Name</label>
                            <input name ="name" type="text" class="form-control" id="name"> 
                            @error('name')
                            <p>{{$message}}</p>
                            @enderror
                        </div> 
                        <div class = "form-group">
                            <label for="phone"> Phone</label>
                            <input name ="phone" type="text" class="form-control" id="phone"> 
                        </div> 
                        <div class = "form-group">
                            <label for="picture1"> Phone</label>
                            <input name ="picture1" type="file" class="form-control" id="picture1"> 
                        </div> 
                        <div class = "form-group">
                            <label for="catalog_id"> Catalog</label>
                            <select name = "catalog_id" class="form-control" id="catalog_id">
                                @foreach($catalogs as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>   
                        </div>                         
                        <div class = "form-group">
                            <label for="body"> Description</label>
                            <textarea name = "body" class="form-control" id="body" rows="3"></textarea>
                        </div>
                        <div class = "form-group">
                            <input type='submit' value ='save' class = "btn btn-primary btn-block">
                        </div>                       
                    </form>
                    <table class="table table-stripted table-bordered" width="100%">
                    <tr>
                    <th width='100px'>Изображение</th>
                    <th>Наименование</th>
                    <th>Телефон</th>
                    <th>Каталог</th>
                    <th>Действие</th>
                    </tr>
                    @foreach($objs as $one)
                    <tr>
                    <td>
                    @if($one->picture)
                    <img src="{{asset('uploads/'.$one->user_id.'/ss_'.$one->picture)}}"/>
                    @else
                    ---
                    @endif
                    </td>
                    <td>
                    {{$one->name}}
                    </td>
                    <td>
                    {{$one->phone}}
                    </td>
                    <td>
                    {{$one->catalog_id}}
                    </td>
                    <td>
                    Delete
                    </td>
                    </tr>
                    @endforeach
                    </table>
                    <p align='center'>
                    {!!$objs->links()!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
