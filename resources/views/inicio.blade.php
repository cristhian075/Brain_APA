@extends('layout.layout')
@section('content')
    <br>
    <div class="card text-center">
        <div class="card-header"></div>
        <div class="card-body">
            <h2 class="card-title">Crea tu primera cita APA</h2>
            <p class="card-text">Genera fácilmente citas y listas de referencias. Para empezar, selecciona el tipo de
                fuente que quieres citar.</p>
            <button type="button" class="btn btn-primary">Página web</button>
            <button type="button" class="btn btn-primary">Revista cientifica</button>
            <button type="button" class="btn btn-primary">Libro</button>
            <button type="button" class="btn btn-primary">Informe</button>
            <button type="button" class="btn btn-primary">Imagen</button>
            <button type="button" class="btn btn-outline-secondary">Otros...</button>
        </div>
        <div class="card-footer text-muted"></div>
    </div>
    <br>
    <div class="container">
        <h1>Guía de citación APA</h1>
        <p class="lh-base">El formato de la APA es ampliamente utilizado por estudiantes, investigadores y
            profesionales de las ciencias sociales y del comportamiento. El generador APA de Scribbr genera automáticamente
            referencias precisas y citas en el texto de forma gratuita.
            Está guía de citación APA describe las reglas de citación más importantes de la 7ª edición del Manual de
            Publicaciones de la Asociación Americana de Psicología (APA), publicado en el 2020.</p>
        <br>
        <h1>Citas en el texto en formato APA</h1>
        <p class="lh-base">
        <h4>Lo básico</h4>
        Las citas en el texto son referencias breves ubicadas en el mismo relato, las cuales dirigen a los lectores a la
        página de referencias del final del trabajo. Debes incluirlas cada vez que citas o parafraseas las ideas o
        palabras de otra persona.

        Las citas en el texto, según el formato APA, constan del apellido del autor y el año de publicación (conocido
        como el sistema autor-fecha). Además, si estás citando una parte específica de una fuente, también debes incluir
        un localizador, es decir, un número de página o marca temporal. Por ejemplo: (Smith, 2020, p. 170).</p>

        <p class="lh-base">
        <h4>Cita entre paréntesis versus cita narrativa</h4>
        Las citas en el texto pueden presentarse de dos formas distintas: entre paréntesis o en el mismo relato. Ambos
        tipos se generan de manera automática al citar una fuente en el generador APA de Scribbr.</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg"
            viewBox="0 0 16 16">
            <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
        </svg>Cita entre paréntesis: Según una nueva investigación… (Smith, 2020). <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg"
            viewBox="0 0 16 16">
            <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
        </svg>NCita narrativa: Smith (2020) señala que…
        <p class="lh-base">
        <h4>Varios autores y autores corporativos</h4>
        Las citas en el texto cambian ligeramente cuando una fuente tiene varios autores o el autor es una organización.
        Presta especial atención a la puntuación.</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tipo de autor</th>
                    <th scope="col">Cita entre paréntesis</th>
                    <th scope="col">Narrative citation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Un autor</th>
                    <td>(Smith, 2020)</td>
                    <td>Smith (2020)</td>
                </tr>
                <tr>
                    <th scope="row">Dos autores</th>
                    <td>(Smith & Jones, 2020)</td>
                    <td>Smith y Jones (2020)</td>
                </tr>
                <tr>
                    <th scope="row">Tres o más autores</th>
                    <td>(Smith, 2020)</td>
                    <td>Smith et al. (2020)</td>
                </tr>
                <tr>
                    <th scope="row">Organización</th>
                    <td>(Scribbr, 2020)</td>
                    <td>Scribbr (2020)</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p class="lh-base">
        <h4>Falta de información</h4>
        Cuando se desconoce el autor, la fecha de publicación o la ubicación de la información, sigue los pasos que se
        describen a continuación:</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Elemento desconocido</th>
                    <th scope="col">Qué hacer</th>
                    <th scope="col">Citas entre paréntesis</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Autor</th>
                    <td>Utiliza el título de la fuente.*</td>
                    <td>(Título de la fuente, 2020)</td>
                </tr>
                <tr>
                    <th scope="row">Fecha</th>
                    <td>Escribe s.f., que significa sin fecha.</td>
                    <td>(Smith, s.f.)</td>
                </tr>
                <tr>
                    <th scope="row">Número de página</th>
                    <td>Utiliza un localizador alternativo o bien
                        omite el número de página.</td>
                    <td>(Smith, 2020, capítulo 3) o
                        (Smith, 2020)</td>
                </tr>
            </tbody>
        </table>
        <p class="lh-base">*El título debe estar en el mismo formato en que este se presenta en la entrada de
            referencia correspondiente (ya sea en cursiva o, si dicho título en la entrada de la referencia no está en
            cursiva, entre comillas dobles). Recuerda que solo la primera letra de la primera palabra del título se escribe
            con mayúscula (al contrario que en inglés).</p>
        <br>
        <h1>Referencias APA</h1>
        <p class="lh-base">
        <h4>Lo básico</h4>
        Las referencias, según APA, generalmente incluyen información sobre el autor, la fecha de publicación, el título
        y la fuente. Dependiendo del tipo de fuente es posible que deba incluirse información adicional que ayude al
        lector a localizar dicha fuente.</p>
        <p class="lh-base">
        <h4>Falta de información</h4>
        No es raro que cierta información sea desconocida o falte, especialmente en aquellas fuentes que se encuentran
        online. En estos casos, la referencia debe ajustarse ligeramente:</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Elemento desconocido</th>
                    <th scope="col">Qué hacer</th>
                    <th scope="col">Citas entre paréntesis</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Autor</th>
                    <td>Inicia la entrada de la referencia con el título de la fuente.</td>
                    <td>Título. (Fecha). Fuente.</td>
                </tr>
                <tr>
                    <th scope="row">Fecha</th>
                    <td>Escribe s.f., que significa sin fecha.</td>
                    <td>Autor. (s.f.). Título. Fuente.</td>
                </tr>
                <tr>
                    <th scope="row">Título</th>
                    <td>Describe el trabajo entre corchetes.</td>
                    <td>Autor. (Fecha). [Descripción]. Fuente.</td>
                </tr>
            </tbody>
        </table>
        <br>
        <h1>Dar formato a la página de referencias según APA</h1>
        <p class="lh-base">
        <h4>Lo básico</h4> En la página de referencias enumera todas las fuentes que has citado a lo largo
        del artículo. Ubica la página de referencias justo después del cuerpo principal del trabajo y antes de cualquier
        anexo.
        <br>
        En la primera línea de esta página debes escribir el título de la sección, es decir, Referencias (en negrita y
        centrado). En la segunda línea, comienza a enumerar las referencias de tu artículo en orden alfabético.
        Aplica las siguientes pautas de formato a la página de referencias según el estilo APA:</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg"
            viewBox="0 0 16 16">
            <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
        </svg>Interlineado doble (en las referencias y entre ellas). <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg"
            viewBox="0 0 16 16">
            <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
        </svg>Sangría colgante o francesa de ½ pulgada (es decir, de 1,3 cm). <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg"
            viewBox="0 0 16 16">
            <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
        </svg>Fuente legible (por ejemplo, Times New Roman 12 o Arial 11). <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg"
            viewBox="0 0 16 16">
            <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
        </svg>Numeración de página en el encabezado superior derecho.
        <br>
        <p class="lh-base"><h4>Qué fuentes incluir</h4>
            En la página de referencias solo debes incluir fuentes que hayas citado previamente en el texto (es decir, que
            tengan una cita dentro de la redacción). No debes incluir referencias a comunicaciones personales a las que el
            lector no puede acceder (por ejemplo, correos electrónicos, conversaciones telefónicas o material online
            privado).</p>
    </div>

@endsection
