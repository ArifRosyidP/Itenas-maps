<div class=" map-point ">
    <div class=" gd9 info " style=" top:68%; right:26.455%; ">
        <i class="fa-solid fa-circle fasum" aria-hidden="true"></i>
        <div class="info-item clearfix">
            <p class=" fs-4 fw-bold titlegd mb-3 py-2 px-0">{{ $namegd9->name }}</p>
            <div class="container px-0 mx-auto ">
                <div class="row">
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-building logow "></i>
                        <!-- <p class="jaringantext"> - AP</p> -->
                        <p class="jaringantext ">{{ $asgd9 === 0 ? '-' : $asgd9 }} Aset</p>
                    </div>
                </div>
                <div class="row btnaset">
                    <div class="container px-0 mx-auto">
                        @if ($asgd9 === 0)
                            <a class="text-decoration-none">
                                <a class="text-decoration-none btn btn-dark disabled text-nowrap btn-detail-aset">
                                    Detail Aset
                                </a>
                            </a>
                        @else
                            <a href="/detailaset/Gedung 9/09"
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
