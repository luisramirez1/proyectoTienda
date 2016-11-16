@extends('principal')

@section('contenido')
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a> <i>/</i></li>
                <li>Registrar Producto</li>
            </ul>
        </div>
    </div> <br>
<article id="jum">
    <form action="{{url('/guardarProducto')}}" method="POST" class="jumbotron" id="form1" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <section id="seccion1">
                <article class="form-group">
                    <label for="Nombre">Nombre:</label>
                    <input name="name" type="text" class="form-control" placeholder="Nombre" required>
                </article>
                <article class="form-group">
                    <label for="Precio">Precio:</label>
                    <input name="precio" type="tel" class="form-control" placeholder="Precio" required onkeypress="return justNumbers(event);">
                </article>
                <article class="form-group">
                    <label for="Descripcion">Descripcion:</label>
                    <input name="descripcion" type="text" class="form-control" placeholder="Descripcion" required>
                </article>
                <article class="form-group">
                    <label for="Categoria">Categoria:</label>
                    <select name="categoria" class="form-control" required>
                        <option value="">Categoria</option>
                        @foreach($cate as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>
                </article>                             
                <article class="form-group">
                    <label for="Imagen">Imagen:</label>
                    <input name="imagen" type="file" class="form-control" accept="image/*" required>
                </article>
                <input type="submit" value="Registrar" class="btn btn-info" id="botonEditar">
                <a href="{{url('/')}}" class="btn btn-primary">Cancelar</a>
            </section>
    </form>
</article>
@endsection
