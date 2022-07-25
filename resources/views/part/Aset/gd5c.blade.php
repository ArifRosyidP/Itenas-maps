<div class=" map-point ">
    <div class=" gd5c info " style="top:51.65%; right:17.67%; ">
        <i class="fa-solid fa-circle fasum" aria-hidden="true"></i>
        <div class="info-item clearfix">
            <p class=" fs-4 fw-bold titlegd mb-3 py-2 px-0">{{ $namegd5c->name }}</p>
            <div class="container px-0 mx-auto ">
                <div class="row">
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-building logow "></i>
                        <!-- <p class="jaringantext"> - AP</p> -->
                        <p class="jaringantext ">{{ ($asgd5c === 0) ? "-" : ($asgd5c) }} Aset</p>
                    </div>
                </div>
                <div class="row btnaset">
                    <div class="container px-0 mx-auto">
                        @if ($asgd5c === 0)
                        <a class="text-decoration-none">
                            <button type="button" class="btn btn-dark" style="width: 150px; " disabled></i>Detail Aset</button>
                        </a>
                        @else
                        <a href="/detailaset/Gedung 5c/05" class="text-decoration-none">
                            <button type="button" class="btn btn-go" style="width: 150px; "></i>Detail Aset</button>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>