@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="my-account style-1 margin-top-5 margin-bottom-40">
                    <ul class="tabs-nav">
                        <li class=""><a href="register/#tab2">Đăng kí</a></li>
                    </ul>
                    <div class="tabs-container alt">
                        <div class="tab-content" id="tab2">
                            <form method="post" action="{{ route('register') }}" class="register">
                                @csrf
                                <div class="form-row form-row-wide">
                                    <label>Username:
                                        <i class="im im-icon-Male"></i>
                                        <input name="name" value="{{old('name')}}">
                                    </label>
                                    @error('name')
                                    <p class="text-danger">{{$message }}</p>
                                    @enderror
                                </div>
                                <div class="form-row form-row-wide">
                                    <label>Email Address:
                                        <i class="im im-icon-Mail"></i>
                                        <input name="email" class="form-control" value="{{old('email')}}" type="text">
                                    </label>
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-row form-row-wide">
                                    <label>Password:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="form-control" value="{{old('password')}}" name="password" type="password"/>
                                    </label>
                                    @error('password')
                                    <p class="text-danger">{{ $message}}</p>
                                    @enderror
                                </div>
                                <label>Repeat Password:
                                    <i class="im im-icon-Lock-2"></i>
                                    <input type="password" name="password_confirmation"/>
                                    <a href=""></a>
                                </label>
                                <div class="form-row">
                                    <button type="submit" class="button border fw margin-top-10">Đăng kí</button>
                                    <button class="button border fw margin-top-10" onclick="window.history.go(-1); return false">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
