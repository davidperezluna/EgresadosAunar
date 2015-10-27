<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400italic' rel='stylesheet' type='text/css'>
    {!!Html::style('assets/css/bootstrap.css')!!}
    {!!Html::style('assets/css/estilos.css')!!}

    <meta charset="UTF-8">

    <title>Egresados Aunar</title>
    <!-- Modal -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Por favor inicia secion</h4>
                </div>
                <div class="modal-body">
                    <br>
                    <form class="form-horizontal" role="form" method="POST" action="{{route('login')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-3 control-label">E-Mail</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-group-sm">iniciar secion</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


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
