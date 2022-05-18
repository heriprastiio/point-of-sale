@extends('layouts.masterlogin')

@section('login')
    <div class="splash-container">
        <div class="card ">

            <div class="card-header text-center"><a href="../index.html"><img class="logo-img"
                        src="{{ asset('assets/images/logopointofsale.png') }}"></a><span class="splash-description">Login
                    please
                    enter
                    your
                    user information.</span>
            </div>
            <div class="card-body">
                @if (count($errors))
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <br />
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ url('admin/login') }}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="name" type="text" placeholder="Username"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember
                                Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a>
                </div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
@endsection
