@extends('layout')
@section('imagen_entera')
    <div class="imagen-entera-container">
        <div class="image-container">
            <img src="{{ asset('../imagenes/cantina.png') }}" class="imagen-fija">
        </div>
        <div class="titulo-container">
            <h3> Nuestros Eventos</h3>
        </div>
    </div>
@endsection
@section('content')

    <div class="container-de-eventos">

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/aniversario-1.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>Primer aniversario de La Cantina Laab</h3>
                <p>
                    Fa un any Cantina Lab va obrir les seves portes, com vola el temps! Us convidem a passar a veure’ns
                    aquesta última setmana de maig per celebrar-ho amb nosaltres
                    Dijous 27: Hi haurà música a la tarda i brindis de 17h a 21h
                    Dissabte 29: A la carta trobareu també una boníssima fideuà vegana amb productes de temporada i de
                    proximitat
                    Diumenge 30: Hi haurà vermut musical de 12h a 20h i bon ambient assegurat
                    A més a més, durant tot el cap de setmana podreu tornar a assaborir les delicioses tapes estrella
                    que hem cuinat al llarg d’aquest any i moltes més novetats
                    Ens espera un cap de setmana ple d'alegria cantinera
                    Per molts anys més!
                </p>
            </div>
        </div>


        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/aniversario-2.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>Segundo aniversario de La Cantina Laab</h3>
                <p>
                    Fa un any Cantina Lab va obrir les seves portes, com vola el temps! Us convidem a passar a veure’ns
                    aquesta última setmana de maig per celebrar-ho amb nosaltres
                    Dijous 27: Hi haurà música a la tarda i brindis de 17h a 21h
                    Dissabte 29: A la carta trobareu també una boníssima fideuà vegana amb productes de temporada i de
                    proximitat
                    Diumenge 30: Hi haurà vermut musical de 12h a 20h i bon ambient assegurat
                    A més a més, durant tot el cap de setmana podreu tornar a assaborir les delicioses tapes estrella
                    que hem cuinat al llarg d’aquest any i moltes més novetats
                    Ens espera un cap de setmana ple d'alegria cantinera
                    Per molts anys més!
                </p>
            </div>
        </div>


        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/doppler.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>Doppler</h3>
                <p>
                    Sábado 22 vuelve la electrónica con Doppler en la Cantina. Reserva tu mesa para disfrutar de
                    nuestros platos de
                    siempre con la música de Uri Callejo] , Fabio Ceron Rodriguez] y DJ A$ia]

                </p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/blablabar.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>BlaBlaBar</h3>
                <p>
                    ESTRENAMOS BLABLABAR!!!!!!
                    Un ciclo de encuentros con colectivos para charlar, compartir experiencias, birras y cafés.
                    Tejer redes y construir espacios comunes es una necesidad política frente a este sistema, y como no
                    hay nada más común que un bar, allá vamos.
                    Ven a birrear y cafetear con Putas Libertarias.
                    Todos los miércoles a las 19:00 tendremos una nueva charla.
                    Salud y cooperativa!

                </p>
            </div>
        </div>


        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/calcotada.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>Calçotada</h3>
                <p>
                    a tenim confirmades les actuacions de la Calçotada Popular de La Cantina!!
                    - A les 16h actuarà la banda de l’Espai de Creació Musical de Can Batlló Mayer-Sánchez
                    - A les 17h gaudirem dels ritmes del Numcut
                    I durant tot el dia tindrem a disposició jocs infantils i per a més grans amb la col·laboració de La
                    Nau espai familiar - Can Batlló
                    Tot això acompanyat dels menús de calçotada amb productes ecològics dels nostres proveïdors locals.
                    Encara ens queden els últims tiquets. No et quedis sense!!

                </p>
            </div>
        </div>


        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/cine.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>Cine a la Fresca</h3>
                <p>
                    Queden només dos projeccions del cicle de cine a la fresca "L'última. Estimant els bars"!
                    Us convidem el dissabte 24 de juliol a passar la tarda-nit a la plaça de la xemeneia de CAN BATLLÓ.
                    A partir de les 19:00 hi haurà espai de trobada i música reivindicativa de la dj La Niña Mai A les
                    21:00 tindrem el plaer de conèixer i xerrar amb les companyes del Grup Laboral Sants
                    A les 21:30 projectarem "La mano invisible" de David Macián que ens transportarà en una nau
                    industrial, dins d’un espectacle pervers que representa el món del treball. Una incisiva metàfora
                    sobre la precarietat laboral.
                    Gràcies a totes les que han fet possible viure aquest meravellós cicle de cine Zumzeig Bistrot, La
                    Raposa Poblesec, La Deskomunal i amb el suport de Quesoni i La Filadora.
                    Recordem també que aquest dissabte al carrer Béjar hi haurà la sessió organitzada per Zumzeig
                    Bistrot amb la projecció de la pel·lícula "Yo soy así" de Sonia Hermann Dolz
                    Som-hi doncs, ens veiem els propers dos dissabtes per l'última!
                    Disseny gràfic de Judit Panxeta

                </p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/lgtbi.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>LGTBIQ+</h3>
                <p>
                    Mañana, #28deJunio, celebramos en la cantina el día del orgullo LGTBIQ+
                    Desde las 12h hasta las 20h tendremos a unxs grandes amenizando el vermut, la comida, la merienda o
                    las copitas!! Seguiremos festejando y luchando, día a día, por una sociedad donde la diversidad sea
                    lo habitual, y donde nadie sea agredida o violentada por su deseo, identidad de género o expresión
                    de género!!
                    Gracias a @kenpolletofficial @djrosariomusic @mary_popair @helaa.hela y @maria_ram0s_ por dejaros
                    liar a última hora y venir mañana a ponerle alegría, música y color a la cantina!!
                    Y por cierto, hoy, mañana y cualquier día, la cantina es un espacio donde no se tolerará ningún tipo
                    de agresiones y violencias de género, lgtbiq, debidas al lugar de origen, por el color de piel,
                    condición de migración, clase social, etc.

                </p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/salchichada.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>Salchichada</h3>
                <p>
                    Fa un any Cantina Lab va obrir les seves portes, com vola el temps! Us convidem a passar a veure’ns
                    aquesta última setmana de maig per celebrar-ho amb nosaltres
                    Dijous 27: Hi haurà música a la tarda i brindis de 17h a 21h
                    Dissabte 29: A la carta trobareu també una boníssima fideuà vegana amb productes de temporada i de
                    proximitat
                    Diumenge 30: Hi haurà vermut musical de 12h a 20h i bon ambient assegurat
                    A més a més, durant tot el cap de setmana podreu tornar a assaborir les delicioses tapes estrella
                    que hem cuinat al llarg d’aquest any i moltes més novetats
                    Ens espera un cap de setmana ple d'alegria cantinera
                    Per molts anys més!
                </p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/dj.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>Taller de DJ</h3>
                <p>
                    aquest dissabte 14 tindrem a la Cantina un taller de DJ amateur monografic de la ma de la Laila,
                    acompanyada que tambe gestiona el taller regular de DJ de Can Batlló. Apunteu-vos sense cont
                    enviant-nos un missatge de instagram
                </p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/blablabar-2.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>BlaBlaBar</h3>
                <p>
                    Volvemos con el blablabar de la mano de Food Coop, el primer supermercado cooperativo de Barcelona.
                </p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/baile.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>baile</h3>
                <p>
                    El All Dayer está de vuelta y esta vez hemos preparado un cartel increíble para ti para un "Sunday
                    Sesh" en la Terraza de la Cantina Can Batlló.

                    En esta ocasión, nuestro evento tiene un toque británico añadido con un poco de sabor de México. No
                    habrá límites para los djs, dándoles total libertad para tocar con la energía de la gente, así que
                    espera escuchar #breaks, #dub, #house, ... Ver más
                    — en Cantina Lab Can Batlló.
                </p>
            </div>
        </div>

        <div class="item">
            <div class="photo">
                <img src="{{ asset('imagenes/volante-flamenco.png') }}" class="imagen">
            </div>
            <div class="contenido">
                <h3>baile</h3>
                <p>
                    12:30h a una kafeta bien andaluza!!! volantedelapuebla no necesita presentación, necesita vivirse y
                    sentirse, traen un directo de vértigo que no deja indiferente a nadie!! No podemos estar más felices
                    de que actúen en cantina!!! Se nos sale el corazón del pecho de la emocioooon!!! 💃🏾💃🏾💃🏾

                    Dos de nuestras andaluzas preferidas, Lena Na y Maria Ramos completan por lo alto este cartel, que
                    nos asegura una velada de lo más ardiente!! 🔥 ... Ver más
                    — en Cantina Lab Can Batlló.
                </p>
            </div>
        </div>

        <div class="menu">
            <var>
                <ul>
                    <button class="botones button"><li><a href="{{ url('/prox eventos') }}">Proximos Eventos</a></li></button>
                </ul>
            </var>
        </div>


    </div>


@endsection
