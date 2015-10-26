<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400italic' rel='stylesheet' type='text/css'>
    {!!Html::style('assets/css/bootstrap.css')!!}
    {!!Html::style('assets/css/estilos.css')!!}
    <meta charset="UTF-8">

    <title>Egresados Aunar</title>

        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>

        @endif
    @include('components.jumbotron')
    @include('components.nav')
    @include('components.carrusel')












<body>




@yield('content')




{!!Html::script('assets/js/jquery.js')!!}
{!!Html::script('assets/js/bootstrap.min.js')!!}
</body>
</html>
