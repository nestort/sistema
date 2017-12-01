<!-- Folio Solicitud Field -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(function() {
    $("#state").change(function(event){
        $.get("municipios/"+event.target.value+"",function(response,state){
            console.log(response);
            $("#town").empty();
            for(i=0;i<response.length; i++){
                $("#town").append("<option value='"+response[i].id+"'> "+response[i].nombre_municipio+"</option>");
            }
        });
    });

});
 
</script>
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

<!--DATOS DE ASPIRANTE/////////////////////////////////////////////-->

<!--datos generales-->
    <div class="row">

<div class=" col-xs-12 col-md-2">

<center><img class="img-responsive img-circle yimg" src="{{ url('img/descarga.png') }}"></center>
<!--texto y icono de la imagen-->
<a href=""><center><caption><h6 <i class="fa fa-camera" aria-hidden="true"></i> Cambiar Imagen</h6></caption></center></a>
</div>
  
<div class=" col-xs-12 col-md-10">
       
        <!-- Apellido Paterno Aspirante Field  nombres y datos   -->

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

        
        <!-- Fecha Nacimiento Asp Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('fecha_nacimiento_asp', 'Fecha Nacimiento:') !!}
            {!! Form::date('fecha_nacimiento_asp', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Sexo Asp Field -->
        <div class="form-group col-sm-3">
        {!! Form::label('sexo_asp', 'Sexo:') !!}
        <select class='form-control'>
        <option>Seleccione</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
        </select>
        </div>
        <!-- Curp Asp Field -->
        <div class="form-group col-sm-3">
        {!! Form::label('curp_asp', 'Curp:') !!}
        {!! Form::text('curp_asp', null, ['class' => 'form-control','placeholder'=>'Ej.RIRE870211']) !!}
        </div>
        <!--  Asp estado civil  %%%%Field -->
        <div class="form-group col-sm-3">
        {!! Form::label('estado_civil', 'Estado Civil:') !!}
        <select class='form-control'>
        <option>Seleccione</option>
        <option value="S">Soltero(a)</option>
        <option value="C">Casado(a)</option>
        <option value="D">Divorciado(a)</option>
        <option value="V">Viudo(a)</option>
        </select>
        </div>
 </div>
 </div>


         <!-- Correo Elect Dom Actual Field -->
        <div class="form-group col-sm-3">
        {!! Form::label('correo_elect_dom_actual', 'Correo Electrónico:') !!}
        {!! Form::text('correo_elect_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ejemplo@hotmail.com']) !!}
        </div>
        <!-- %%Telefono Fijo Dom Actual Field -->
        <div class="form-group col-sm-3">
        {!! Form::label('telefono_fijo', 'Teléfono Fijo:') !!}
        {!! Form::text('telefono_fijo_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ej.(52)+8164085']) !!}
        </div>
        <!-- %%Telefono movil Dom Actual Field -->
        <div class="form-group col-sm-3">
        {!! Form::label('movil', 'Móvil') !!}
        {!! Form::text('telefono_fijo_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ej.(52)+4442124367']) !!}
        </div>
        <!-- Numero del seguro social fields%%%%-->
        <div class="form-group col-sm-3">
        {!! Form::label('numero_s_s', 'N.S.S') !!}
        {!! Form::text('numero_s_s', null, ['class' => 'form-control','placeholder'=>'Ej.63 84 92 0482 2']) !!}
        </div>
        <!--DIRECCION ACTUAL/////////////////////////////////////////////////-->

       <div class="col-sm-12">
             <center><h3 class="titulos">Dirección Actual</h3></center>
        </div>  
        <!-- pais-->
        <div class="form-group  col-sm-4">
        {!! Form::label('pais', 'País:' )!!}<br>
        {!! Form::select('paises',$paises,null,array('class'=>'form-control')) !!}
        </div>
         
<!--Entidad Federativa Dom Actual Id Field-->
        <div class="form-group col-sm-3">
        {!! Form::label('entidad_federativa_dom_actual_id', 'Entidad Federativa:') !!}
        {!! Form::select('entidad_federativa_dom_actual_id',$entidadesFederativas, null,array('class' => 'form-control','id'=>'state_da')) !!}


        </div>
<!--Municipio Dom Actual Id Field-->
         <div class="form-group col-sm-3">
         {!! Form::label('municipio_dom_actual_id', 'Municipio:') !!}         
         {!! Form::select('municipio_dom_actual_id',['placeholder'=>'Seleccione'], null,array('class' => 'form-control','id'=>'town_da')) !!}


         </div> 
<div class="col-sm-10">
         <!-- Calle Dom Actual Field -->
        {!! Form::label('calle_dom_actual', 'Calle:') !!}
        {!! Form::text('calle_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ej.Valentin Amador']) !!}
         </div>
<div class="col-sm-2">
         <!-- NUMERO EXTERIOR Y/O INTERIOR Actual Field -->
        {!! Form::label('numero_ext_int', 'Num Ext.:') !!}
        {!! Form::text('calle_dom_actual', null, ['class' => 'form-control','placeholder'=>'Ej.#728']) !!}
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
    
        {!! Form::select('escuela_procedencia_id',['placeholder'=>'Seleccione'], null,array('class' => 'form-control','id'=>'prepas_p')) !!} 

        </div>
        

        <!--Modalidad Asp Field-->
        <div class="form-group col-sm-4">
       {!! Form::label('modalidad', 'Modalidad:') !!}
        <select class='form-control'>
        <option>Seleccione</option>
        <option value="1">Escolarizada</option>
        <option value="2">Educación Distancia</option>
        <option value="3">Mixta</option>
        <option value="4">Postgrado</option>
        </select>
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
         <!--datos del turtor-->
         <div class="form-gropup col-sm-4"> 
         <center><h3 class="titulos">Datos del tutor</h3>
         </center>
         {!! Form::text('apellido_paterno_tutor', null, ['class' => 'form-control','placeholder'=>'Apellido paterno']) !!}<br>
         {!! Form::text('apellido_materno_tutor', null, ['class' => 'form-control','placeholder'=>'Apellido materno']) !!}<br>
         {!! Form::text('nombres_tutor', null, ['class' => 'form-control','placeholder'=>'Nombre(s)']) !!}
          <!--Vive Tutor Field-->

         </div>
        <!-- recordar
        Paises
        {!! Form::select('paises',$paises) !!}
        Entidades Federativas
         {!! Form::select('entidadesFederativas',$entidadesFederativas,null,['id'=>'state']) !!}
           
     
         recordar
        Municipios
         {!! Form::select('municipios',['placeholder'=>'Seleccione'],null,['id'=>'town']) !!}
-->
      
<!--
    Municipio Nac Field 
        <div class="form-group col-sm-6">
            {!! Form::label('municipio_nac', 'Municipio Nac:') !!}
            {!! Form::text('municipio_nac', null, ['class' => 'form-control']) !!}
        </div>

<div class="form-group col-sm-6">
    {!! Form::label('folio_solicitud', 'Folio Solicitud:') !!}
    {!! Form::number('folio_solicitud', null, ['class' => 'form-control']) !!}
</div>

Periodo Field 
<div class="form-group col-sm-6">
    {!! Form::label('periodo', 'Periodo:') !!}
    {!! Form::text('periodo', null, ['class' => 'form-control']) !!}
</div>

 Ficha Field 
<div class="form-group col-sm-6">
    {!! Form::label('ficha', 'Ficha:') !!}
    {!! Form::number('ficha', null, ['class' => 'form-control']) !!}
</div>

Escuela Procedencia Id Field
<div class="form-group col-sm-6">
    {!! Form::label('escuela_procedencia_id', 'Escuela Procedencia Id:') !!}
    {!! Form::text('escuela_procedencia_id', null, ['class' => 'form-control']) !!}
</div>

Promedio Bachillerato Field 
<div class="form-group col-sm-6">
    {!! Form::label('promedio_bachillerato', 'Promedio Bachillerato:') !!}
    {!! Form::number('promedio_bachillerato', null, ['class' => 'form-control']) !!}
</div>

Anio Termino Bachillerato Field
<div class="form-group col-sm-6">
    {!! Form::label('anio_termino_bachillerato', 'Anio Termino Bachillerato:') !!}
    {!! Form::number('anio_termino_bachillerato', null, ['class' => 'form-control']) !!}
</div>


Carrera Op1 Id Field 
<div class="form-group col-sm-6">
    {!! Form::label('carrera_op1_id', 'Carrera Op1 Id:') !!}
    {!! Form::number('carrera_op1_id', null, ['class' => 'form-control']) !!}
</div>

Carrera Op2 Id Field
<div class="form-group col-sm-6">
    {!! Form::label('carrera_op2_id', 'Carrera Op2 Id:') !!}
    {!! Form::number('carrera_op2_id', null, ['class' => 'form-control']) !!}
</div>

Modalidad Asp Field
<div class="form-group col-sm-6">
    {!! Form::label('modalidad', 'Modalidad:') !!}
    {!! Form::text('modalidad', null, ['class' => 'form-control']) !!}
</div>

Nacionalidad Asp Field
<div class="form-group col-sm-6">
    {!! Form::label('nacionalidad_asp', 'Nacionalidad Asp:') !!}
    {!! Form::text('nacionalidad_asp', null, ['class' => 'form-control']) !!}
</div>



Entidad Federativa Proc Id Field
<div class="form-group col-sm-6">
    {!! Form::label('entidad_federativa_proc_id', 'Entidad Federativa Proc Id:') !!}
    {!! Form::number('entidad_federativa_proc_id', null, ['class' => 'form-control']) !!}
</div>

Municipio Proc Id Field 
<div class="form-group col-sm-6">
    {!! Form::label('municipio_proc_id', 'Municipio Proc Id:') !!}
    {!! Form::number('municipio_proc_id', null, ['class' => 'form-control']) !!}
</div>
codigo postal
 <div class="form-group col-sm-3">
        {!! Form::label('codigo_postal', 'Codigo Postal:') !!}
        {!! Form::number('codigo_postal', null, ['class' => 'form-control']) !!}
        </div>

Entidad Federativa Dom Actual Id Field
<div class="form-group col-sm-6">
    {!! Form::label('entidad_federativa_dom_actual_id', 'Entidad Federativa Dom Actual Id:') !!}
    {!! Form::number('entidad_federativa_dom_actual_id', null, ['class' => 'form-control']) !!}
</div>

Municipio Dom Actual Id Field
<div class="form-group col-sm-6">
    {!! Form::label('municipio_dom_actual_id', 'Municipio Dom Actual Id:') !!}
    {!! Form::number('municipio_dom_actual_id', null, ['class' => 'form-control']) !!}
</div>

Codigo Postal Dom Actual Field
<div class="form-group col-sm-6">
    {!! Form::label('codigo_postal_dom_actual', 'Codigo Postal Dom Actual:') !!}
    {!! Form::number('codigo_postal_dom_actual', null, ['class' => 'form-control']) !!}
</div>



<Telefono Cel Aspirante Field 
<div class="form-group col-sm-6">
    {!! Form::label('telefono_cel_aspirante', 'Telefono Cel Aspirante:') !!}
    {!! Form::text('telefono_cel_aspirante', null, ['class' => 'form-control']) !!}
</div>

Zona Proc Aspirante Field 
<div class="form-group col-sm-6">
    {!! Form::label('zona_proc_aspirante', 'Zona Proc Aspirante:') !!}
    {!! Form::number('zona_proc_aspirante', null, ['class' => 'form-control']) !!}
</div>

Oportunidades Aspirante Field 
<div class="form-group col-sm-6">
    {!! Form::label('oportunidades_aspirante', 'Oportunidades Aspirante:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('oportunidades_aspirante', false) !!}
        {!! Form::checkbox('oportunidades_aspirante', '1', null) !!} 1
    </label>
</div>

Nombres Padre Field
<div class="form-group col-sm-6">
    {!! Form::label('nombres_padre', 'Nombres Padre:') !!}
    {!! Form::text('nombres_padre', null, ['class' => 'form-control']) !!}
</div>

Apellido Paterno Padre Field 
<div class="form-group col-sm-6">
    {!! Form::label('apellido_paterno_padre', 'Apellido Paterno Padre:') !!}
    {!! Form::text('apellido_paterno_padre', null, ['class' => 'form-control']) !!}
</div>

Apellido Materno Padre Field
<div class="form-group col-sm-6">
    {!! Form::label('apellido_materno_padre', 'Apellido Materno Padre:') !!}
    {!! Form::text('apellido_materno_padre', null, ['class' => 'form-control']) !!}
</div>

Vive Padre Field
<div class="form-group col-sm-6">
    {!! Form::label('vive_padre', 'Vive Padre:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('vive_padre', false) !!}
        {!! Form::checkbox('vive_padre', '1', null) !!} 1
    </label>
</div>

Nombres Madre Field
<div class="form-group col-sm-6">
    {!! Form::label('nombres_madre', 'Nombres Madre:') !!}
    {!! Form::text('nombres_madre', null, ['class' => 'form-control']) !!}
</div>

Apellido Paterno Madre Field
<div class="form-group col-sm-6">
    {!! Form::label('apellido_paterno_madre', 'Apellido Paterno Madre:') !!}
    {!! Form::text('apellido_paterno_madre', null, ['class' => 'form-control']) !!}
</div>

Apellido Materno Madre Field 
<div class="form-group col-sm-6">
    {!! Form::label('apellido_materno_madre', 'Apellido Materno Madre:') !!}
    {!! Form::text('apellido_materno_madre', null, ['class' => 'form-control']) !!}
</div>

Vive Madre Field
<div class="form-group col-sm-6">
    {!! Form::label('vive_madre', 'Vive Madre:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('vive_madre', false) !!}
        {!! Form::checkbox('vive_madre', '1', null) !!} 1
    </label>
</div>

Nombres Tutor Field 
<div class="form-group col-sm-6">
    {!! Form::label('nombres_tutor', 'Nombres Tutor:') !!}
    {!! Form::text('nombres_tutor', null, ['class' => 'form-control']) !!}
</div>

Apellido Paterno Tutor Field 
<div class="form-group col-sm-6">
    {!! Form::label('apellido_paterno_tutor', 'Apellido Paterno Tutor:') !!}
    {!! Form::text('apellido_paterno_tutor', null, ['class' => 'form-control']) !!}
</div>

Apellido Materno Tutor Field
<div class="form-group col-sm-6">
    {!! Form::label('apellido_materno_tutor', 'Apellido Materno Tutor:') !!}
    {!! Form::text('apellido_materno_tutor', null, ['class' => 'form-control']) !!}
</div>

Usuario Id Field
<div class="form-group col-sm-6">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    {!! Form::number('usuario_id', null, ['class' => 'form-control']) !!}
</div>

Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('aspiranteGenerals.index') !!}" class="btn btn-default">Cancel</a>
</div>
