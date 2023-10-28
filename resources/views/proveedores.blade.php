@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/comida.jpg') }}" class="imagen-fija">
        </div>
        <div class="texto-container">
            <h3>Nuestros Proveedores</h3>
        </div>
    </div>
@endsection
@section('content')

   <div class="container-proveedor">
            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/platjeta.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>La platjeta</h3>
                    <p>
                    La Platjeta es un proyecto que nace en la Barceloneta con el deseo de dar a conocer nuestro producto:
                    pescado y marisco fresco, de calidad y de proximidad. Son muchas las generaciones de nuestra familia que se dedican a la pesca tradicional,
                     un oficio que ahora se esfuerza por incorporar nuevas tecnologías y para cuidar el impacto medioambiental. Contamos con dos barcos,
                    ‘La Ostia’, en honor a nuestra querida Barceloneta, y el ‘Nus’, el jovencito que ha desencadenado esta aventura.
                    </p>
                    <a href="https://laplatjeta.net/" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>


            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/notario.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Cal Notari -Olivier Chantry</h3>
                    <p>
                    «Cal Notari» és un projecte agrícola seguint els criteris agroecològics i basat en la promoció d’un consum de proximitat,
                    coherent i que cuidi el medi ambient i al territori.
                    Al Parc Agrari del Baix Llobregat, es troben terres molt fèrtils, presentant excel·lents condicions climàtiques per a la producció d’una àmplia varietat
                    d’hortalisses de temporada tot l’any. A més, gaudeixen d’una ubicació privilegiada per al desenvolupament de circuits de venda directa gràcies a la seva proximitat
                    amb l’àrea metropolitana de Barcelona. En aquest context general de crisi i de més d’una dècada de lenta agonia de l’agricultura, hi ha alternatives:
                    es pot revaloritzar el treball del camp, mantenir les terres agrícoles fora de l’especulació i consumir hortalisses fresques i de qualitat a un preu just.
                    Per això, a Cal Notari ens hem posat mans a l’obra i estem produint una àmplia gamma de verdures de temporada.
                    </p>
                    <a href="https://calnotari2012.wordpress.com/" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>


            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/pages.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>DPages-Gestió Agroecològica Porcina, SCP</h3>
                    <p>
                    Som dos joves enginyers agrònoms i Màster en Sanitat i Producció Porcina que, després d’anys treballant i estudiant a fons el sector porcí
                    convencional i empesos per una forta convicció de producció sostenible, responsable i allunyada al màxim de la producció agroalimentària industrial,
                    vam decidir tirar endavant dpagès.
                    </p>
                    <a href="https://dpages.cat/es/inicio/" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/caltomas.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Cal Tomas-Embotits de Llania S.L.</h3>
                    <p>
                    Miquel, nuestro bisabuelo, vio que en Francia se vendía carne y abrió la primera carnicería del pueblo.
                    Hoy somos nosotros los que tomamos el relevo y, tal y como han hecho nuestros abuelos y padres, continuamos elaborando los
                    embutidos siguiendo las recetas tradicionales y criando las terneras y las vacas de manera ecológica.
                    </p>
                    <a href="https://dpages.cat/es/inicio/" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>


            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/gotic.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Gotic Ferments</h3>
                    <p>
                    GOTIC FERMENTS nació fruto de un encuentro de dos vecinos en los tejados del barrio Gótico de Barcelona en plena pospandemia.
                    Este encuentro nos une a Miky, cocinero profesional, experimentando en fermentación en ese entonces, y Carla, con un gran bagaje
                    en el mundo de la comunicación, ambos con un gran compromiso social, muy entusiasmados, decidimos arrancar lo que hoy conocemos como GOTIC FERMENTS.

                    </p>
                    <a href="https://www.goticferments.com/" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>


            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/ginebra.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Ginebra Rawal s</h3>
                    <p>
                    La historia de Rawal Organic Dry Gin se remonta a la experiencia obtenida tras más de una década dirigiendo una coctelería especializada en gins.
                    A través de esta experiencia en el año 2019 decido construir la primera microdestilería en Barcelona ciudad y crear un producto natural, artesanal y ecológico
                    </p>
                    <a href="https://www.rawalgin.com/" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/valls.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Cal Valls</h3>
                    <p>
                    Somos una empresa familiar comprometida en ofrecer a las personas una alimentación saludable y ecológica desde hace 45 años.
                    Por eso, elaboramos conservas vegetales y zumos de fruta provenientes de una agricultura ecológica y biodinámica de calidad, cercana
                    y respetuosa con la salud de las personas, de la tierra y del entorno.
                    </p>
                    <a href="https://www.calvalls.com/web/es/" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/bolet.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Bolet ben fet -TEB VERD SCCL</h3>
                    <p>
                    La Granja de Bolet Ben Fet  es un centro especial de trabajo de la cooperativa Teb Verd  SCCL.
                    Formamos parte del Grupo Cooperativo TEB (Taller Escuela Barcelona) especializado en la inserción social
                    y laboral de personas con discapacitado intelectual. Actualmente, el TEB atiende y da trabajo a unas mil
                    personas.
                    En la granja de Bolet Ben Fet , en Sant Antoni de Vilamajor (Barcelona), en la falda del Montseny,
                    trabajamos diez compañeros que nos dedicamos a la producción ecológica de setas.La forma de trabajar
                    es plenamente integradora, ofreciendo una viabilidad plena entre el trabajo bien hecho y las personas que
                    formamos parte de la cooperativa.
                    </p>
                    <a href="https://www.boletbenfet.com/es/" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/ous.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Ous de Calaf - Avicola Frauca S.L.</h3>
                    <p>
                    Sóc en Xavier Frauca Torrens, 3a generació d’una família dedicada a la cria de gallines i la producció d’ous.
                    He aconseguit distribuir-los des de la meva producció pròpia a Calaf fins a Barcelona, amb parades a diferents mercats de la ciutat.
                    </p>
                    <a href="https://mercatdelninot.com/parada/ous-de-calaf/" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/triticum.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Triticum - L'ESSÈNCIA DEL BLAT, S.L.</h3>
                    <p>
                    Triticum nació con una única y sencilla intención: hacer pan de calidad para la hostelería y la restauración. Es una empresa joven y emprendedora que elabora pan pre cocido para alta gastronomía. Fue creada en el 2006 y desde entonces ha ido creciendo en proyectos, clientes y productos.
                    TRITICUM ha recuperado la esencia artesana de un producto milenario a partir de las últimas técnicas en panificación y se ha convertido en un referente en el campo de la panadería al ser capaz de satisfacer a los paladares más exigentes. Por ello, trabaja para aquellos restaurantes, hoteles y empresas de catering que valoran el pan de calidad.
                    Triticum ofrece el equilibrio perfecto entre calidad, regularidad, buen servicio y profesionalidad, porque utiliza materias primas muy selectas (cebolla pochada, pipas, semillas de amapola, aceitunas Kalamata, harinas molidas en molino de piedra…).
                    </p>
                    <a href="https://www.triticum.net/es" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/espiga.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Espiga - COMPANYIA ARTESANA MAIANS S.L</h3>
                    <p>
                    Vam començar el projecte de Cervesa Espiga després d’experiències internacionals a Dinamarca i Alemanya, amb la il·lusió de viure la revolució de la cervesa artesana a Catalunya
                     i poder-ne ser protagonistes. Des del 2012 treballem junts fent el que ens agrada: elaborar i distribuir cerveses amb un caràcter especial,
                    innovant tant com podem amb les cerveses que fem i participant de l’expansió de la cultura cervesera.
                    </p>
                    <a href="https://www.espiga.cat/" target="_blank" class="button">Saber Mas</a>


                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/soul.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Soulblim - Group fructusweb S.L.</h3>
                    <p>
                    Distribuïm productes d’alimentació per a professionals i botigues, productes frescos i IV Gamma tant de producció propia com seleccionats, elaborats, fruits secs, llegums i arrossos.
                    Som Soulblim, i volem inspirar la teva gastronomia.
                    </p>
                    <a href="https://soulblim.com/" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/origo.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Origo panadería</h3>
                    <p>
                    Elaboramos nuestros panes con solo tres ingredientes: harinas ecológicas, agua filtrada y sal marina en un proceso de 48 horas. Las largas fermentación se hacen a base de nuestra masa madre.
                    ¡Sin otros aditivos, ni conservantes, ni azúcar, ni grasa, ni levadura química, ni enzimas!
                    </p>
                    <a href="https://www.origobakery.com/" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>

            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/glosset.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Mas Glosset - Efigie trade SL</h3>
                    <p>
                    Sóm Mas Glosset, una empresa familiar ubicada a Marganell, un petit poble al peu de la muntanya de Montserrat.
                    La nostra història amb el mató i els formatges comença amb la iaia Roseta, quan pujava a vendre mató i quatre gallines a Montserrat a les 4 del matí.
                    Més endavant l’avi Josep ja va començar a distribuir quatre matons per Barcelona i mica en mica la empresa es va anar ampliant, així com la gamma dels nostres
                    productes: formatge fresc, flams, pastís de formatge, iogurts,…
                    </p>
                    <a href="https://masglosset.cat/" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>


            <div class="item">
                <div class="photo">
                    <img src="{{ asset('imagenes/cerveceria-artesana.png') }}" class="imagen">
                </div>
                <div class="contenido">
                    <h3>Subversiva - Eloi Serra Farres</h3>
                    <p>
                    Som una cerveseria quefacerveça artesana desde fa molt de temps i el que ens agrada: elaborar i distribuir cerveses amb un caràcter especial,
                    innovant tant com podem amb les cerveses que fem i participant de l’expansió de la cultura cervesera.
                    </p>
                    <a href="https://instagram.com/subversivacoop?igshid=MzRlODBiNWFlZA==" target="_blank" class="button">Saber Mas</a>
                </div>
            </div>
    </div>

@endsection
