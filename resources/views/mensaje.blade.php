@extends('plantilla')

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-11 ml-auto mr-auto">
            <div class="card">
                <div class="card-header card-header-primary">
                    <?php 
                    $sessionusuario=session('sessionusuario');
                    ?>
                    <center>
                        <h3 class="card-title">Bienvenido <?php echo $sessionusuario?></h3>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-11 ml-auto mr-auto">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h3 class="card-title">Categorias</h3>
                    <p class="card-category"></p>
                </div>
                <div class="card-body">

                    <div id="contenedor">
                        <div class="especialidades" id="especialidades">

                            <h4>
                                <b>

                                    Dental
                                </b>
                            </h4>
                            <img class="imgespecialidades" id="imgespecialidades"
                                src="{{ asset ('archivos/quirofano.jpg') }}" alt="Quirofano">

                        </div>
                        <div class="especialidades2" id="especialidades2">
                            <h4>
                                <b>
                                    Pediatría
                                </b>
                            </h4>
                            <img class="imgespecialidades" id="imgespecialidades"
                                src="{{ asset ('archivos/quirofano.jpg') }}" alt="Quirofano">
                        </div>
                        <div class="especialidades3" id="especialidades3">
                            <h4>
                                <b>

                                    Oftalmologia
                                </b>
                            </h4>
                            <img class="imgespecialidades" id="imgespecialidades"
                                src="{{ asset ('archivos/quirofano.jpg') }}" alt="Quirofano">
                        </div>
                        <div class="especialidades" id="especialidades">

                            <h4>
                                <b>

                                    Quirofano
                                </b>
                            </h4>
                            <img class="imgespecialidades" id="imgespecialidades"
                                src="{{ asset ('archivos/quirofano.jpg') }}" alt="Quirofano">

                        </div>
                        <div class="especialidades2" id="especialidades2">
                            <h4>
                                <b>

                                    Quirofano
                                </b>
                            </h4>
                            <img class="imgespecialidades" id="imgespecialidades"
                                src="{{ asset ('archivos/quirofano.jpg') }}" alt="Quirofano">
                        </div>
                        <div class="especialidades3" id="especialidades3">
                            <h4>
                                <b>
                                    Quirofano
                                </b>
                            </h4>
                            <img class="imgespecialidades" id="imgespecialidades"
                                src="{{ asset ('archivos/quirofano.jpg') }}" alt="Quirofano">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-11 ml-auto mr-auto">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h3 class="card-title">Nuestros medicos</h3>
                    <p class="card-category"></p>
                </div>
                <div class="card-body">
                    <div id="contenedor">
                        <div class="medicos" id="medicos">
                            <img class="imgespecialidades" id="imgespecialidades"
                                src="https://d2lcsjo4hzzyvz.cloudfront.net/blog/wp-content/uploads/2020/10/07114553/me%CC%81dicos-influencers-en-Instagram.jpg" alt="Quirofano">
                            <b class="informacion" id="informacion"><h3>Información del medico</h3>
                            <p>
                                Nombre: Ricardo Nava Gómez <br>
                                Horario: L-V 08:00AM - 04:00 pm <br> 
                                Especialidad: Medico Cirujano <br>
                            </p></b>
                        </div>
                        <div class="medicos" id="medicos">
                            <img class="imgespecialidades" id="imgespecialidades"
                                src="https://d2lcsjo4hzzyvz.cloudfront.net/blog/wp-content/uploads/2020/10/07114553/me%CC%81dicos-influencers-en-Instagram.jpg" alt="Quirofano">
                            <b class="informacion" id="informacion"><h3>Información del medico</h3>
                            <p>
                                Nombre: Ricardo Nava Gómez <br>
                                Horario: L-V 08:00AM - 04:00 pm <br> 
                                Especialidad: Medico Cirujano <br>
                            </p></b>
                        </div>
                        <div class="medicos" id="medicos">
                            <img class="imgespecialidades" id="imgespecialidades"
                                src="https://d2lcsjo4hzzyvz.cloudfront.net/blog/wp-content/uploads/2020/10/07114553/me%CC%81dicos-influencers-en-Instagram.jpg" alt="Quirofano">
                            <b class="informacion" id="informacion"><h3>Información del medico</h3>
                            <p>
                                Nombre: Ricardo Nava Gómez <br>
                                Horario: L-V 08:00AM - 04:00 pm <br> 
                                Especialidad: Medico Cirujano <br>
                            </p></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
