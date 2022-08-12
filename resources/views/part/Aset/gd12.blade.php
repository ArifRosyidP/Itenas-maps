<div class=" map-point ">
    <div class=" gd12 info " style=" top:68.1%; right:36%; ">
        <i class="fa-solid fa-circle fasum" aria-hidden="true"></i>
        <div class="info-item clearfix">
            <p class=" fs-4 fw-bold titlegd mb-3 py-2 px-0">{{ $namegd12->name }}</p>
            <div class="container px-0 mx-auto ">
                <div class="row">
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-building logow "></i>
                        <!-- <p class="jaringantext"> - AP</p> -->
                        <p class="jaringantext ">{{ $asgd12 === 0 ? '-' : $asgd12 }} Aset</p>
                    </div>
                </div>
                <div class="row btnaset">
                    <div class="container px-0 mx-auto">
                        @if ($asgd12 === 0)
                            <a class="text-decoration-none">
                                <a class="text-decoration-none btn btn-dark disabled text-nowrap btn-detail-aset">
                                    Detail Aset
                                </a>
                            </a>
                        @else
                            <a href="/detailaset/Gedung 12/12"
                                class="text-decoration-none btn btn-dark text-nowrap btn-detail-aset">
                                Detail Aset
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
