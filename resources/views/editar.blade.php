@extends('principal')

@section('contenido')
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a> <i>/</i></li>
                <li>Editar</li>
            </ul>
        </div>
    </div> <br>
<article id="jum">
    <form action="{{url('/guardarPokemon')}}" method="POST" class="jumbotron" id="form1" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <section id="seccion1">
                <article class="form-group">
                    <label for="Nombre">Nombre:</label>
                    <input name="name" type="text" class="form-control" placeholder="Nombre" required>
                </article>
                <article class="form-group">
                    <label for="Email">Email:</label>
                    <input name="email" type="email" class="form-control" placeholder="Correo" required>
                </article>
                <article class="form-group">
                    <label for="Tel">Celular:</label>
                    <input name="tel" type="tel" class="form-control" placeholder="Celular" required onkeypress="return justNumbers(event);">
                </article>
                <article class="form-group">
                    <label for="Password">Contraseña:</label>
                    <input name="password" type="password" class="form-control" placeholder="Contraseña" required>
                </article>
                <article class="form-group">
                    <label for="Facebook">Facebook:</label>
                    <input name="facebook" type="text" class="form-control" placeholder="Facebook" required>
                </article>
                <article class="form-group">
                    <label for="Twitter">Twitter:</label>
                    <input name="twitter" type="text" class="form-control" placeholder="Twitter" required>
                </article>
                <article class="form-group">
                    <label for="Github">Github:</label>
                    <input name="github" type="text" class="form-control" placeholder="Github" required>
                </article>
                <article class="form-group">
                    <label for="Google">Google+</label>
                    <input name="google" type="text" class="form-control" placeholder="Google+" required>
                </article>                                           
                <article class="form-group">
                    <label for="Imagen">Imagen:</label>
                    <input name="imagen" type="file" class="form-control" accept="image/*" required>
                </article>
                <input type="submit" value="Registrar" class="btn btn-info" id="botonRegistrar">
                <a href="{{url('/')}}" class="btn btn-primary">Cancelar</a>
            </section>
    </form>
</article>
@endsection
