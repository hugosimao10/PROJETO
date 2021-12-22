@include('partials/head')
<body id="page-top">
<section class="page-section bg-light" id="loginRegisto">
    <h2 class="text-uppercase text-center text-black">Área de Login</h2></br>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registar</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <!-- <form method="POST" action="{{ route('login') }}">
                     @csrf
                        <div class="group">
                            <label class="label">E-mail</label>
                            <input id="email" type="email" class="input">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="group">
                            <label class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password">
                            @if ($errors->has('pass'))
                            <span class="text-danger">{{ $errors->first('pass') }}</span>
                            @endif
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Entrar">
                        </div>
                    </form> -->

                    <form action="{{ route('login') }}" method="POST">
                    @csrf
                         <label for="email">Email:</label><br>
                         <input type="email" id="email" name="email"><br>
                         @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                         <label for="pass">Password:</label><br>
                         <input type="password" id="pass" name="pass"><br><br>
                         @if ($errors->has('pass'))
                            <span class="text-danger">{{ $errors->first('pass') }}</span>
                            @endif
                         <input type="submit" value="Submit">
                    </form>


                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Esqueceu a password?</a>
                    </div>
                </div>
                <div class="sign-up-htm">
                    <form action="" method="POST">
                    @csrf
                        <div class="group">
                            <label class="label">E-mail</label>
                            <input id="emailRegister" type="email" class="input">
                            @if ($errors->has('emailRegister'))
                            <span class="text-danger">{{ $errors->first('emailRegister') }}</span>
                            @endif
                        </div>
                        <div class="group">
                            <label class="label">Password</label>
                            <input id="passwordRegister" type="password" class="input" data-type="password">
                            @if ($errors->has('passwordRegister'))
                            <span class="text-danger">{{ $errors->first('passwordRegister') }}</span>
                            @endif
                        </div>
                        <div class="group">
                            <label class="label">Reescrever Password</label>
                            <input id="passwordRegisterConfirm" type="password" class="input" data-type="password">
                            @if ($errors->has('passwordRegisterConfirm'))
                            <span class="text-danger">{{ $errors->first('passwordRegisterConfirm') }}</span>
                            @endif
                        </div>
                        <div class="group">
                            <label for="name" class="label">Primeiro nome</label>
                            <input id="name" type="text" class="input">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="group">
                            <label for="lastname" class="label">Apelido</label>
                            <input id="lastname" type="text" class="input">
                            @if ($errors->has('lastname'))
                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            @endif
                        </div>
                        <div class="group">
                            <label for="tlm" class="label">Telemóvel</label>
                            <input id="tlm" type="number" class="input">´
                            @if ($errors->has('tlm'))
                            <span class="text-danger">{{ $errors->first('tlm') }}</span>
                            @endif
                        </div>
                        <div class="group">
                            <label for="address" class="label">Morada</label>
                            <input id="address" type="text" class="input">
                            @if ($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Registar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Footer-->
    @include('partials/footer')
</body>

</html>
