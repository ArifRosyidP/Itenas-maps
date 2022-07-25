<div class=" map-point ">
    <div class=" gd19a info " style=" top:44.95%; right:33.35%; ">
        <i class="fa-solid fa-circle fasum" aria-hidden="true"></i>
        <div class="info-item clearfix">
            <p class=" fs-4 fw-bold titlegd mb-3 py-2 px-0">{{ $namegd19a->name }}</p>
            <div class="container px-0 mx-auto ">
                <div class="row">
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-building logow "></i>
                        <!-- <p class="jaringantext"> - AP</p> -->
                        <p class="jaringantext ">{{ ($asgd19a === 0) ? "-" : ($asgd19a) }} Aset</p>
                    </div>
                </div>
                <div class="row btnaset">
                    <div class="container px-0 mx-auto">
                        @if ($asgd19a === 0)
                        <a class="text-decoration-none">
                            <button type="button" class="btn btn-dark" style="width: 150px; " disabled></i>Detail Aset</button>
                        </a>
                        @else
                        <a href="/detailaset/Gedung 19a/19" class="text-decoration-none">
                            <button type="button" class="btn btn-go" style="width: 150px; "></i>Detail Aset</button>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>