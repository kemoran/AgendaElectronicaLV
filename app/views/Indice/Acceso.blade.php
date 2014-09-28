<!DOCTYPE html>
<html class="bg-black">
	<head>
		<meta charset="UTF-8">
		<title> Agenda electronica en Laravel 4 </title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/font-awesome.min.css') }}
		<!-- Theme style -->
		{{ HTML::style('css/AdminLTE.css') }}
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        	{{ HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
        	{{ HTML::style('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}
        <![endif]-->
	</head>
	<body class="bg-black">

		<div class="form-box" id="login-box">
            <div class="header">
                Ingresar al sistema
            </div>
            {{ Form::open(array('url' => 'Acceso/', 'method' => 'post' )) }}
                <div class="body bg-gray">
                    <div class="form-group">
                        {{ Form::text('txtNomUsuario', '', array('class' => 'form-control', 'placeholder' => 'Nombre de usuario')) }}
                        <span class="text-red"> {{ $errors->first('txtNomUsuario') }} </span>
                    </div>
                    <div class="form-group">
                        {{ Form::password('txtContrasenha', array('class' => 'form-control', 'placeholder' => 'Contraseña')) }}
                        <span class="text-red"> {{ $errors->first('txtContrasenha') }} </span>
                    </div>
                    
                    @if(Session::has('mensaje_error'))
                        <span class="text-red"> {{ Session::get('mensaje_error') }} </span>
                    @endif
                </div>
                <div class="footer">
                    {{ Form::submit('Ingresar', array('class' => 'btn bg-olive btn-block')) }}
                    <p>
                        {{ HTML::linkRoute('OlvidarContrasenha', 'Olvidé mi contraseña', array(), array()) }}
                    </p>
                    {{ HTML::linkRoute('RegistrarUsuario', 'Registrarme', array(), array('class' => 'text-center')) }}
                </div>
            {{ Form::close() }}

                <!--
                <div class="margin text-center">
                    <span> Ingresar usando una red social </span>
                    <br/>
                    <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                    <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                    <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>
                </div>
                -->
        </div>

		<!-- jQuery 2.0.2 -->
		{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
	</body>
</html>