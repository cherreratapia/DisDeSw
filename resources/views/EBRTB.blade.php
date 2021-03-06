@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Empresa de buses')
@section('subtitulo', 'Tripulación | Detalle')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/EBRTB.css') }}">
@endsection()

@section('logoEmpresa')
    <span class="texto-logo">EB</span>
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Empresa de buses')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Empresa de buses </a> -> <a href="#">Tripulación</a> -> <a href="">Detalle</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
        <li class="treeview">
            <a href="#">
            <span>Busqueda</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Bus</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Pasajero</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <span>Itinerario</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Buses </a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <span>Reporte</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Accidentes diarios</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Exceso de velocidad</a></li>
            </ul>
        </li>
        <li class="active treeview menu-open">
            <a href="#">
            <span>Tripulación</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Listar tripulacion</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <span>Carga</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Planificación</a></li>
            </ul>
        </li>
    </ul>
@endsection()

<!-- Body -->
@section('cuerpa')
        <!--Container-->
        <div class="container col-md-11">
        <!--Box-->
        <div class="box">
            <!--Box header-->
            <div class="box-header">
                <h3 class="box-title">Tripulación</h3>   
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
                <img src="" alt="" class="imgChofer">
                {!! Form::open(['url' => '','class' => 'form-horizontal'])!!}
                <div class="input-group NContrato" id="NContrato ">
                    {!! Form::label('name', 'Nombre', ['class' => 'label-input col-sm-1']) !!}
                    <div class="col-sm-2 inputLabel">
                        {!! Form::text('name','',['class' => 'form-control input-sm', 'id' => 'nombreChofer', 'placeholder' => 'Nombre', 'readonly']) !!}
                    </div>
                    {!! Form::label('beginContrato', 'Inicio de contrato', ['class' => 'label-input col-sm-1']) !!}
                    <div class="col-sm-2 inputLabel">
                        {!! Form::text('beginContrato','',['class' => 'form-control input-sm', 'id' => 'inicioContrato', 'placeholder' => 'Inicio contrato', 'readonly']) !!}
                    </div>
                </div>
                </br>
                <div class="input-group NContrato" id="NContrato">
                    {!! Form::label('RUN', 'RUN', ['class' => 'label-input col-sm-1']) !!}
                    <div class="col-sm-2 inputLabel">
                        {!! Form::text('RUN','',['class' => 'form-control input-sm', 'id' => 'runChofer', 'placeholder' => 'Run', 'readonly']) !!}
                    </div>
                    {!! Form::label('horasTrabajadas', 'Horas trabajadas', ['class' => 'label-input col-sm-1']) !!}
                    <div class="col-sm-2 inputLabel">
                        {!! Form::text('horasTrabajadas','',['class' => 'form-control input-sm', 'id' => 'horasTrabajadas', 'placeholder' => 'Horas trabajadas', 'readonly']) !!}
                    </div>
                </div>
                <div class="form-group col-md-11">
                    {!! Form::label('multasMensuales', 'Multas mensuales', ['class' => 'label-input col-sm-2']) !!}
                    <div class="col-sm-1">
                        {!! Form::text('multasMensuales','2',['class' => 'form-control input-sm'])!!}
                    </div>
                    {!! Form::label('multasAnuales', 'Multas anuales', ['class' => 'label-input col-sm-2']) !!}
                    <div class="col-sm-1">
                        {!! Form::text('multasAnuales','2',['class' => 'form-control input-sm'])!!}
                    </div>
                    {!! Form::label('activo','Activo',['class' => 'label-input col-sm-1 antecendentesLabel'])!!}
                    <div class="col-sm-1 checkBox">
                        {!! Form::checkbox('Activo','value', 'true', ['readonly']) !!}
                    </div>
                </div>
                <div class="form-group col-md-11 bloq">
                    <button class="btn btn-danger" id="btnBloquear">Bloquear</button>
                </div>
                {!! Form::close() !!}
            </div>
            <!--/Box body-->
            <!--Box footer-->
            <div class="box-footer">
                <button class="btn" id="btnVolver">Volver</button>            
            </div>
            <!--/Box footer-->
        </div>
        <!--/Box-->
    </div>
    <!--/Container-->
@endsection()

<!-- JS Adicional -->
@section('js')
    <script src="{{ URL::asset('js/EBRT.js') }}"></script>
@endsection()
