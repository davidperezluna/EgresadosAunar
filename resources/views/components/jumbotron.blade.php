<section class="jumbotron">

    <div class="container-fluid">
        <div class="container-fluid row">
            <div class="col-md-9 col-sm-9">
            </div>
            <div class="col-md-3 col-sm-3">
                @include('auth.login')
            </div>
        </div>
    </div>


    @if(Auth::guest())
        @else

        <div class="container-fluid">
            <div class="container-fluid row">
                <div class="col-md-9 col-sm-9">
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->email}}
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="{{route('logout')}}">Logout</a></li>
                            <li><a href="#">Editar Perfil</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>


