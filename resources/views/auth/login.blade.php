


        @if(Auth::guest())
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

            <div class="form-group">
                <div class="col-md-7 col-md-offset-5">
                    <button type="submit" class="btn btn-primary btn-group-sm">inciar secion</button>
                </div>
            </div>
        </form>
                @else

                @endif

