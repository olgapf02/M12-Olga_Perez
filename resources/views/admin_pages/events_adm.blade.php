@extends('admin_pages/layout_adm')
@section('content')
<div class="d-grid gap-2 col-8 mx-auto" style="margin-bottom: 20px;">
    <a href="{{ url('admin/nuevo_evento') }}" class="btn btn-primary" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
        </svg>
    </a>
</div>

@foreach($eventos as $evento)
    <div class="row justify-content-center mt-4">
        <div class="col mb-3 m-15px">
            <div class="card flex-row h-100">
                <img src="{{ asset('storage/' . $evento->imagen) }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="...">
                <div class="card-body d-flex flex-column justify-content-between" style="height: 100px;">
                    <div>
                        <h5 class="card-title">{{ $evento->titulo }}</h5>
                        <p class="card-text text-start ms-4" style="font-size: 18px;">{{ $evento->texto }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach


<div class="row justify-content-center mt-4">
    <div class="col mb-3 ">
        <div class="card flex-row h-100">
            <img src="{{ asset('imagenes/aniversario-1.png') }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="...">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100px;">
                <div>
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-start ms-4" style="font-size: 18px;">jskmkofvkdmknjhbgvbnkvvibhdfghmhngfgdewrtrdtfjgvkhvmgcfhdrgsear54seydrtufjfhd4a5wedufycgfgear5w6e5ufdbskficvuhfdbn--}}
                        fcviufdjhnficvudjfhnficvujh,vlkjhgfdsedl,kmnjbhgvfcdxszazsxdcfgvhbjnknhgfdsaweszddxfcgrftghb vcdrftvcbnmhjkyhtredscvbnmjkliuytredscvbnmjkiuytgf56215485214875214852148521hfgxdbnchjdftsrgfxnghref<gvcxdftgvcftdnficvujfnedfivcujnfdsfnwedkfoivfkdfnmfifjkfdt amet, consectetur adipiscing elit.</p>
                    fcviufdjhnficvudjfhnficvujh,vlkjhgfdsedl,kmnjbhgvfcdxszazsxdcfgvhbjnknhgfdsaweszddxfcgrftghb vcdrftvcbnmhjkyhtredscvbnmjkliuytredscvbnmjkiuytgf56215485214875214852148521hfgxdbnchjdftsrgfxnghref<gvcxdftgvcftdnficvujfnedfivcujnfdsfnwedkfoivfkdfnmfifjkfdt amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row justify-content-center mt-4">
    <div class="col mb-3 m-15px">
        <div class="card flex-row h-100">
            <img src="{{ asset('imagenes/aniversario-1.png') }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="...">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100px;">
                <div>
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-start ms-4" style="font-size: 18px;">jskmkofvkdmknjhbgvbnkvvibhdfghmhngfgdewrtrdtfjgvkhvmgcfhdrgsear54seydrtufjfhd4a5wedufycgfgear5w6e5ufdbskficvuhfdbn
                        fcviufdjhnficvudjfhnficvujh,vlkjhgfdsedl,kmnjbhgvfcdxszazsxdcfgvhbjnknhgfdsaweszddxfcgrftghb vcdrftvcbnmhjkyhtredscvbnmjkliuytredscvbnmjkiuytgf56215485214875214852148521hfgxdbnchjdftsrgfxnghref<gvcxdftgvcftdnficvujfnedfivcujnfdsfnwedkfoivfkdfnmfifjkfdt amet, consectetur adipiscing elit.</p>
                    fcviufdjhnficvudjfhnficvujh,vlkjhgfdsedl,kmnjbhgvfcdxszazsxdcfgvhbjnknhgfdsaweszddxfcgrftghb vcdrftvcbnmhjkyhtredscvbnmjkliuytredscvbnmjkiuytgf56215485214875214852148521hfgxdbnchjdftsrgfxnghref<gvcxdftgvcftdnficvujfnedfivcujnfdsfnwedkfoivfkdfnmfifjkfdt amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row justify-content-center mt-4">
    <div class="col mb-3 m-15px">
        <div class="card flex-row h-100">
            <img src="{{ asset('imagenes/aniversario-1.png') }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="...">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100px;">
                <div>
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-start ms-4" style="font-size: 18px;">jskmkofvkdmknjhbgvbnkvvibhdfghmhngfgdewrtrdtfjgvkhvmgcfhdrgsear54seydrtufjfhd4a5wedufycgfgear5w6e5ufdbskficvuhfdbn
                        fcviufdjhnficvudjfhnficvujh,vlkjhgfdsedl,kmnjbhgvfcdxszazsxdcfgvhbjnknhgfdsaweszddxfcgrftghb vcdrftvcbnmhjkyhtredscvbnmjkliuytredscvbnmjkiuytgf56215485214875214852148521hfgxdbnchjdftsrgfxnghref<gvcxdftgvcftdnficvujfnedfivcujnfdsfnwedkfoivfkdfnmfifjkfdt amet, consectetur adipiscing elit.</p>
                    fcviufdjhnficvudjfhnficvujh,vlkjhgfdsedl,kmnjbhgvfcdxszazsxdcfgvhbjnknhgfdsaweszddxfcgrftghb vcdrftvcbnmhjkyhtredscvbnmjkliuytredscvbnmjkiuytgf56215485214875214852148521hfgxdbnchjdftsrgfxnghref<gvcxdftgvcftdnficvujfnedfivcujnfdsfnwedkfoivfkdfnmfifjkfdt amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row justify-content-center mt-4">
    <div class="col mb-3 m-15px">
        <div class="card flex-row h-100">
            <img src="{{ asset('imagenes/aniversario-1.png') }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="...">
            <div class="card-body d-flex flex-column justify-content-between" style="height: 100px;">
                <div>
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-start ms-4" style="font-size: 18px;">jskmkofvkdmknjhbgvbnkvvibhdfghmhngfgdewrtrdtfjgvkhvmgcfhdrgsear54seydrtufjfhd4a5wedufycgfgear5w6e5ufdbskficvuhfdbn
                        fcviufdjhnficvudjfhnficvujh,vlkjhgfdsedl,kmnjbhgvfcdxszazsxdcfgvhbjnknhgfdsaweszddxfcgrftghb vcdrftvcbnmhjkyhtredscvbnmjkliuytredscvbnmjkiuytgf56215485214875214852148521hfgxdbnchjdftsrgfxnghref<gvcxdftgvcftdnficvujfnedfivcujnfdsfnwedkfoivfkdfnmfifjkfdt amet, consectetur adipiscing elit.</p>
                    fcviufdjhnficvudjfhnficvujh,vlkjhgfdsedl,kmnjbhgvfcdxszazsxdcfgvhbjnknhgfdsaweszddxfcgrftghb vcdrftvcbnmhjkyhtredscvbnmjkliuytredscvbnmjkiuytgf56215485214875214852148521hfgxdbnchjdftsrgfxnghref<gvcxdftgvcftdnficvujfnedfivcujnfdsfnwedkfoivfkdfnmfifjkfdt amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

