<div class=" map-point ">
    <div class=" gd11 info " style=" top:78.7%; right:33%; ">
        <i class="fa-solid fa-circle fasum" aria-hidden="true"></i>
        <div class="info-item clearfix">
            <p class=" fs-4 fw-bold titlegd mb-3 py-2 px-0">{{ $namegd11->name }}</p>
            <div class="container px-0 mx-auto ">
                <div class="row">
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-building logow "></i>
                        <!-- <p class="jaringantext"> - AP</p> -->
                        <p class="jaringantext ">{{ ($asgd11->jmlaset === 0) ? "-" : ($asgd11->jmlaset) }} Aset</p>
                    </div>
                </div>
                <div class="row btnaset">
                    <div class="container px-0 mx-auto">
                        <a href="https://aset.itenas.ac.id/login" class="text-decoration-none">
                            <button type="button" class="btn btn-go" style="width: 150px; "></i>Detail Aset</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>