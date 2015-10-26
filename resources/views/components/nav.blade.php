
<nav class="navbar navbar-default noborder" role="navigation">

    <div class="container-fluid">
        <div class="navbar-header boton-responsive">
            <button type="button" name="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion">
                <span class="sr-only">Desplegar/ocultar Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navegacion">
            <div class="row container-fluid">
                <div class="col-md-9">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('home') }}">INICIO</a></li>
                        <li><a href="{{route('quien') }}">QUIENES SOMOS</a></li>
                            <li><a href="">SERVICIOS</a></li>
                            <li><a href="">EMPRESA</a></li>
                            <li><a href="">BOLSA DE EPLEOS</a></li>


                    </ul>
                </div>
                <div class="col-md-3 navbar-right hidden-xs hidden-sm">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <span class="glyphicon glyphicon-search"></span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>