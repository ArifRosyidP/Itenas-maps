<div class=" map-point ">
    <div class=" gd10 info " style=" top:78.15%; right:20.7%; ">
        <i class="fa-solid fa-circle fasum" aria-hidden="true"></i>
        <div class="info-item clearfix">
            <p class=" fs-4 fw-bold titlegd mb-3 py-2 px-0">{{ $namegd10->name }}</p>
            <div class="container px-0 mx-auto ">
                <div class="row">
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-building logow "></i>
                        <!-- <p class="jaringantext"> - AP</p> -->
                        <p class="jaringantext ">{{ ($asgd10 === 0) ? "-" : ($asgd10) }} Aset</p>
                    </div>
                </div>
                <div class="row btnaset">
                    <div class="container px-0 mx-auto">
                        @if ($asgd10 === 0)
                        <a class="text-decoration-none">
                            <button type="button" class="btn btn-dark" style="width: 150px; " disabled></i>Detail Aset</button>
                        </a>
                        @else
                        <a href="/detailaset/Gedung 10/10" class="text-decoration-none">
                            <button type="button" class="btn btn-go" style="width: 150px; "></i>Detail Aset</button>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>