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
                Registro de usuario
            </div>
            {{ Form::open(array('url' => 'Usuario/Registrar/', 'method' => 'post' )) }}
                <div class="body bg-gray">
                    <fieldset>
                        <label> Datos generales </label>
                        <div class="form-group">
                            {{ Form::text('txtNom1', '', array('class' => 'form-control', 'placeholder' => 'Primer nombre')) }}
                            <span class="text-red"> {{ $errors->first('txtNom1') }} </span>
                        </div>
                        <div class="form-group">
                            {{ Form::text('txtNom2', '', array('class' => 'form-control', 'placeholder' => 'Segundo nombre')) }}
                            <span class="text-red"> {{ $errors->first('txtNom2') }} </span>
                        </div>
                        <div class="form-group">
                            {{ Form::text('txtApe1', '', array('class' => 'form-control', 'placeholder' => 'Primer apellido')) }}
                            <span class="text-red"> {{ $errors->first('txtApe1') }} </span>
                        </div>
                        <div class="form-group">
                            {{ Form::text('txtApe2', '', array('class' => 'form-control', 'placeholder' => 'Segundo apellido')) }}
                            <span class="text-red"> {{ $errors->first('txtApe2') }} </span>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label> Cuenta </label>
                        <div class="form-group">
                            {{ Form::text('txtNomUsuario', '', array('class' => 'form-control', 'placeholder' => 'Nombre de usuario')) }}
                            <span class="text-red"> {{ $errors->first('txtNomUsuario') }} </span>
                        </div>
                        <div class="form-group">
                            {{ Form::password('txtContrasenha', array('class' => 'form-control', 'placeholder' => 'Contraseña')) }}
                            <span class="text-red"> {{ $errors->first('txtContrasenha') }} </span>
                        </div>
                    </fieldset>
                </div>
                <div class="footer">
                    {{ Form::submit('Registrarme', array('class' => 'btn bg-olive btn-block')) }}
                </div>
            {{ Form::close() }}

        </div>

		<!-- jQuery 2.0.2 -->
		{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
	</body>
</html>