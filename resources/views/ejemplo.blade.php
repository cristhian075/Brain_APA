@extends('layout.layout')
@section('content')
    <br>
    <div class="container">
        <div class="card text-center">
            <div class="card-header"></div>
            <div class="card-body">
                <h2 class="card-title">Crea tu primera cita APA</h2>
                <p class="card-text"><h4>Tu editor corregirá el lenguaje y los errores de coherencia directamente en el
                    texto,
                    utilizando el control de cambios de Word y proporcionando sugerencias adicionales en los comentarios.
                    <br><br>

                    Mira el siguiente ejemplo y <a
                        href="https://cdn.scribbr.com/wp-content/themes/scribbr-2017/inc/examples/docx/Scribbr%20-%2026752%20-%20Correccion%20y%20revision%20-%20Ejemplo.docx"
                        class="link-primary">descarga el archivo completo aquí</h4></a>.
                </p>
            </div>
            <div class="card-footer text-muted"></div>
        </div>
        <br>
        <div align="center"><img src="/img/example-document.png"></div>
        <div class="container-fluid">
            <p>
                <button class="btn btn-info btn-circle btn-lg" type="button" data-bs-toggle="collapse"
                    data-bs-target="#primero" aria-expanded="false" aria-controls="collapseExample">
                    1
                </button>
            <div class="collapse" id="primero">
                <div class="card card-body">
                    <h4>Utilizamos la perífrasis verbal “deber + verbo al infinitivo” o “tener que + verbo al infinitivo”.</h4>
                </div>
            </div>
            </p>
            <p>
                <button class="btn btn-primary btn-circle btn-lg" type="button" data-bs-toggle="collapse"
                    data-bs-target="#segundo" aria-expanded="false" aria-controls="collapseExample">
                    2
                </button>
            <div class="collapse" id="segundo">
                <div class="card card-body">
                    <h4>Haz uso de los conectores para no tener que redactar frases tan largas. Así ,tu texto será mucho más
                        ligero, fluido y agradable de leer.</h4>
                </div>
            </div>
            </p>
            <p>
                <button class="btn btn-danger btn-circle btn-lg" type="button" data-bs-toggle="collapse"
                    data-bs-target="#tercero" aria-expanded="false" aria-controls="collapseExample">
                    3
                </button>
            <div class="collapse" id="tercero">
                <div class="card card-body">
                    <h4>Es poco aconsejable que un párrafo de cuatro líneas esté compuesto por una sola frase. En este caso, te
                        recomendaría que repasaras el texto y lo dividieras en, al menos, dos frases.</h4>
                </div>
            </div>
            </p>
        </div>
    </div>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection
