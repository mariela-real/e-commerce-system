@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class= "row">

        <div class = "col-sm-10">
            <a href="{{route('aboutUs_carousel.create')}}" class="btn btn-success">Nuevo</a>
            <table class="table table-striped">
                <thead>
                    <th>Orden</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @forelse ($carousels as $item)
                    <tr>
                        <td>{{$item->order}}</td>
                        <td><img src="/img/carousel/{{$item->urlphoto}}" width="300"></td>
                        <td>
                           <a href="{{route('aboutUs_carousel.edit', $item->id) }}" class="btn btn-success">Editar</a>
                           {!! Form::open(['method'=>'DELETE','route'=>['aboutUs_carousel.destroy',$item->id], 'style'=>'display:inline'])!!}
                           {!! Form::submit('Eliminar', ['class'=>'btn btn-success']) !!}
                           {!! Form::close() !!}
                       </td>
                    </tr>

                    @empty

                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection

