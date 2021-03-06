<!-- Folio Solicitud Field -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
$(function() {
    $("#state_da").change(function(event){
        $.get("municipios/"+event.target.value+"",function(response,state){
            console.log(response);
            $("#town_da").empty();
            for(i=0;i<response.length; i++){
                $("#town_da").append("<option value='"+response[i].id+"'> "+response[i].nombre_municipio+"</option>");
            }
        });
    });
});

</script>
<script>
$(function() {
    $("#state_da_edicion").change(function(event){
        $.get("municipios2/"+event.target.value+"",function(response,state){
            console.log(response);
            $("#town_da").empty();
            for(i=0;i<response.length; i++){
                $("#town_da").append("<option value='"+response[i].id+"'> "+response[i].nombre_municipio+"</option>");
            }
        });
    });
});

</script>
<script>
$(function() {
    $("#state_p").change(function(event){
        $.get("prepas/"+event.target.value+"",function(response,state){
            console.log(response);
            $("#prepas_p").empty();
            for(i=0;i<response.length; i++){
                $("#prepas_p").append("<option value='"+response[i].id+"'> "+response[i].nombre_preparatoria+"</option>");
            }
        });
    });
});

</script>

   <br>
      <div role="tabpanel">
        <ul class="nav nav-tabs" >

          <li ><a href="{{route('aspiranteSocioecomicos.edit',['aspiranteSocioecomico'=>$idSoc])}}" class="{{$captura_socioeco?'valido':'invalido'}}"><b class="glyphicon glyphicon-usd ">Socioeconómicos</b></a>
          <li ><a href="{{route('aspiranteSaluds.edit',['aspiranteSalud'=>$idSal])}}" class="{{$captura_salud?'valido':'invalido'}}"><b class="glyphicon glyphicon-lock "> Salud</b></a></li>
          <li ><a href="" class="{{false?'valido':'invalido'}}"><b class="glyphicon glyphicon-picture"> Documentos</b></a></li>

          @if ($captura_salud and $captura_socioeco and  $captura_salud )
            <li ><a href="{{URL::to('referenciaB',['pers'=>$folio,'cve_pago'=>'01999','fechaLimite'=>$fechaLimite,'importe'=>$importe])}}" class="valido"><b class="glyphicon glyphicon-share"> Referencia de Pago</b></a></li>
          @endif

        </ul>
      </div>
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="seccion1"><br>
    <div class="row">
        <div class=" col-xs-12 col-md-2">
          <center><img class="img-responsive img-circle yimg" src="{{ url('img/descarga.png') }}"></center>
          <!--texto y icono de la imagen-->
          <a href=""><center><caption><h6 <i class="fa fa-camera" aria-hidden="true"></i> Cambiar Imagen</h6></caption></center></a>
        </div>
        <div class=" col-xs-12 col-md-10">
          <center><h3 class="titulos" >Datos del aspirante</h3></center>
          <div  class="col-sm-12">
            <center>{!! Form::label('apellido_paterno_aspirante', 'Nombre del Aspirante:') !!}</center>
          </div>
          <div  style="clear:both;" class="form-group col-sm-4">
            {!! Form::text('apellido_paterno_aspirante', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}
          </div>
          <!-- Apellido Materno Aspirante Field -->
          <div  class="form-group col-sm-4">
            {!! Form::text('apellido_materno_aspirante', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}
          </div>
          <!-- Nombres Aspirante Field -->
          <div class="form-group col-sm-4">
            {!! Form::text('nombres_aspirante', null, ['class' => 'form-control','placeholder'=>'Nombre(s)']) !!}
          </div>


        @if ($modo=='crear')
         <!-- Fecha Nacimiento Asp Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('fecha_nacimiento_asp', 'Fecha Nacimiento:') !!}
            {!! Form::date('fecha_nacimiento_asp', null, ['class' => 'form-control']) !!}

        </div>
        @else
        <!-- Fecha Nacimiento Asp Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('fecha_nacimiento_asp', 'Fecha Nacimiento:') !!}
            {!! Form::date('fecha_nacimiento_asp', $aspiranteGeneral->fecha_nacimiento_asp, ['class' => 'form-control']) !!}

        </div>
        @endif


          <!-- Sexo Asp Field -->
          <div class="form-group col-sm-3">
            {!! Form::label('sexo_asp', 'Sexo:') !!}
            {!! Form::select('sexo_asp', array('M' => 'Masculino', 'F' => 'Femenino'),null,array('class'=>'form-control')) !!}
          </div>
          <!-- Curp Asp Field -->
          <div class="form-group col-sm-3">
            {!! Form::label('curp_asp', 'Curp:') !!}
            {!! Form::text('curp_asp', null, ['class' => 'form-control','placeholder'=>'Ej.RIRE870211']) !!}
          </div>
          <div class="form-group col-sm-2">
            {!! Form::label('estado_civil_asp_id', 'Estado Civil:') !!}
            {!! Form::select('estado_civil_asp_id',$edo_civil,null,array('class'=>'form-control')) !!}
          </div>
        </div>
    </div>

    @if ($modo=='crear')
      <!-- Correo Elect Dom Actual Field -->
      <div class="form-group col-sm-3">
      {!! Form::label('correo_elect_dom_actual', 'Correo Electrónico:') !!}
      <h4>capturar</h4>
      </div>
    @else
          <!-- Correo Elect Dom Actual Field -->
      <div class="form-group col-sm-3">
      {!! Form::label('correo_elect_dom_actual', 'Correo Electrónico:') !!}
      <h4>{{$aspiranteGeneral->correo_elect_dom_actual}}</h4>
      </div>
    @endif

    <!-- %%Telefono Fijo Dom Actual Field -->
    <div class="form-group col-sm-3">
    {!! Form::label('telefono_fijo', 'Teléfono Fijo:') !!}
    {!! Form::text('telefono_fijo_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ej.(52)+8164085']) !!}
    </div>
    <!-- %%Telefono movil Dom Actual Field -->
    <div class="form-group col-sm-3">
    {!! Form::label('movil', 'Móvil') !!}
    {!! Form::text('telefono_cel_aspirante', null, ['class' => 'form-control','placeholder'=>'Ej.(52)+4442124367']) !!}
    </div>

    @if ($modo=='crear')
      <!-- Numero del seguro social fields%%%%-->
      <div class="form-group col-sm-2">
      {!! Form::label('numero_seguro_social', 'N.S.S') !!}
      {!! Form::text('numero_seguro_social', null, ['class' => 'form-control','placeholder'=>'123456']) !!}
      </div>
    @else
      <!-- Numero del seguro social fields%%%%-->
      <div class="form-group col-sm-2">
      {!! Form::label('numero_seguro_social', 'N.S.S') !!}
      <h4>{{$aspiranteGeneral->numero_seguro_social}}</h4>
      </div>
    @endif

    <!--DIRECCION ACTUAL/////////////////////////////////////////////////-->

    <div class="col-sm-12">
         <center><h3 class="titulos">Dirección Actual</h3></center>
    </div>
    <!-- pais-->
    <div class="form-group  col-sm-2">
      {!! Form::label('pais_asp_id', 'País:' )!!}<br>
      {!! Form::select('pais_asp_id',$paises,154,array('class'=>'form-control')) !!}
    </div>

    @if ($modo=='crear')
    <!--Entidad Federativa Dom Actual Id Field-->
    <div class="form-group col-sm-3">
      {!! Form::label('entidad_federativa_dom_actual_id', 'Entidad Federativa:') !!}
      {!! Form::select('entidad_federativa_dom_actual_id',$entidadesFederativas, null,array('class' => 'form-control','id'=>'state_da')) !!}
    </div>
    @else
    <!--Entidad Federativa Dom Actual Id Field-->
    <div class="form-group col-sm-3">
      {!! Form::label('entidad_federativa_dom_actual_id', 'Entidad Federativa:') !!}
      {!! Form::select('entidad_federativa_dom_actual_id',$entidadesFederativas, null,array('class' => 'form-control','id'=>'state_da_edicion')) !!}
    </div>
    @endif

    <!--Si tiene un valor el municipio se genera la lista de municipios de su etidad y se selecciona su valor, el evento de cambio será cuando selecciona otro municipio o selecciona entidad y tenddrá que seleccionar un municipio-->
    @if ($aspiranteGeneral->municipio_dom_actual_id > 0)
     <!--Municipio Dom Actual Id Field-->
    <div class="form-group col-sm-4">
       {!! Form::label('municipio_dom_actual_id', 'Municipio:') !!}
       {!! Form::select('municipio_dom_actual_id',$municipios,null,array('class'=>'form-control','id'=>'town_da')) !!}
    </div>
    @else
    <!--Municipio Dom Actual Id Field-->
    <div class="form-group col-sm-4">
       {!! Form::label('municipio_dom_actual_id', 'Municipio:') !!}
       {!! Form::select('municipio_dom_actual_id',['placeholder'=>'Seleccione'], null,array('class' => 'form-control','id'=>'town_da')) !!}
    </div>
    @endif
    <div class="col-sm-10">
       <!-- Calle Dom Actual Field -->
      {!! Form::label('calle_dom_actual', 'Calle con Número:') !!}
      {!! Form::text('calle_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ej.Valentin Amador #200-1']) !!}
    </div>

    <!--codigo Postal Dom Actual Field-->
    <div class="form-group col-sm-3">
      {!! Form::label('codigo_postal_dom_actual', 'Código Postal:') !!}
      {!! Form::text('codigo_postal_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ej.19823']) !!}
    </div>

    <!-- Colonia Dom Actual Field -->
    <div class="form-group col-sm-3">
      {!! Form::label('colonia_dom_actual', 'Colonia:') !!}
      {!! Form::text('colonia_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ej.San Antonio']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('zona_proc_aspirante_id', 'Zona Proc Aspirante:') !!}
        {!! Form::select('zona_proc_aspirante_id',$zona_proc,null,array('class'=>'form-control')) !!}
    </div>
    <!--CARRERAS EN ORDEN PREFERENCIAL/////////////////////////////////-->
    <div class="col-sm-12">
      <center><h3 class="titulos">Carreras en Orden de Preferencia</h3></center>
      <!--Carrera Op1 Id Field-->
      <div class="form-group col-sm-6 form-inline">
      {!! Form::label('carrera_op1_id', 'Opción 1:') !!}
      {!! Form::select('carrera_op1_id',$carr) !!}
      </div>
      <!--Carrera Op2 Id Field-->
      <div class="form-group col-sm-6 form-inline">
      {!! Form::label('carrera_op2_id', 'Opción 2:') !!}
      {!! Form::select('carrera_op2_id',$carr)!!}
      </div>
    </div>
    <!-- PREPARATORIA DE PROCEDENCIA//////////////////////////////////-->
    <!--datos de la escuela-->
    <div class="col-sm-12">
      <center><h3 class="titulos">Preparatoria de Procedencia</h3></center>

      <!--Entidad Federativa Proc Id Field-->
      <div class="col-sm-6">

        {!! Form::label('entidad_federativa_proc_id', 'Entidad Federativa:') !!}
        {!! Form::select('entidad_federativa_proc_id',$entidadesFederativas, null,array('class' => 'form-control','id'=>'state_p')) !!}

      </div>
      <!--Escuela Procedencia Id Field-->
      <div class="col-sm-6">
        {!! Form::label('escuela_procedencia_id', 'Escuela Procedencia:') !!}
        {!! Form::select('escuela_procedencia_id',$escuela_procedencia, null,array('class' => 'form-control','id'=>'prepas_p')) !!}
      </div>


      <!--Añio Termino Bachillerato Field-->
      <div class="form-group col-sm-4">
        {!! Form::label('anio_termino_bachillerato', 'Año de Egreso') !!}
        {!! Form::text('anio_termino_bachillerato', null, ['class' => 'form-control','placeholder'=>'ej. 1980']) !!}
      </div>

      <!--Promedio Bachillerato Field-->
      <div class="form-group col-sm-4">
        {!! Form::label('promedio_bachillerato', 'Promedio Bachillerato:') !!}
        {!! Form::text('promedio_bachillerato', null, ['class' => 'form-control','placeholder'=>'Ej. 8.5']) !!}
      </div>
    </div>

    <!--datos del padre-->
    <div class="form-gropup col-sm-4">
       <center><h3 class="titulos" >Datos del padre</h3>
       </center>
       {!! Form::text('apellido_paterno_padre', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}<br>
       {!! Form::text('apellido_materno_padre', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}<br>
       {!! Form::text('nombres_padre', null, ['class' => 'form-control','placeholder'=>'Nombre(s)']) !!}
       <!--Vive Padre Field-->
        <div class="form-gropup col-sm-12">
            {!! Form::label('vive_padre','Vive Padre:') !!}
            <label class="rad">
            {!! Form::label('vive_padre','Si:') !!}
            {!! Form::radio('vive_padre',true) !!}
            {!! Form::label('vive_padre','No:') !!}
            {!! Form::radio('vive_padre',false) !!}
            </label>
        </div>
     </div>
     <!--datos de la madre-->
     <div class="form-gropup col-sm-4">
           <center><h3 class="titulos">Datos de la madre</h3></center>
           {!! Form::text('apellido_paterno_madre', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}<br>
           {!! Form::text('apellido_materno_madre', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}<br>
           {!! Form::text('nombres_madre', null, ['class' => 'form-control','placeholder'=>'Nombre(s)']) !!}
            <!--Vive madre Field-->
            <div class="form-gropup col-sm-12">
            {!! Form::label('vive_madre','Vive Madre') !!}
            <label class="rad">
            {!! Form::label('vive_madre','Si:') !!}
            {!! Form::radio('vive_madre',true) !!}
            {!! Form::label('vive_madre','No:') !!}
            {!! Form::radio('vive_madre',false) !!}

            </label>
            </div>
    </div>
    <!--datos del tutor-->
    <div class="form-gropup col-sm-4">
           <center><h3 class="titulos">Datos del tutor</h3>
           </center>
           {!! Form::text('apellido_paterno_tutor', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}<br>
           {!! Form::text('apellido_materno_tutor', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}<br>
           {!! Form::text('nombres_tutor', null, ['class' =>
           'form-control','placeholder'=>'Nombre(s)']) !!}
    </div>


    <div class="form-group col-sm-6">
        {!! Form::label('periodo_id', 'Periodo:') !!}
        {!! Form::number('periodo_id', $periodo, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('ficha', 'Ficha:') !!}
        {!! Form::number('ficha', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('usuario_id', 'Usuario Id:') !!}
        {!! Form::number('usuario_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('tipo_modalidad_id', 'Modalidad Id:') !!}
        {!! Form::number('tipo_modalidad_id', $modalidad, ['class' => 'form-control']) !!}
    </div>
</div>


    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('aspiranteGenerals.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>
