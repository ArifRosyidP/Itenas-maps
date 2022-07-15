<div class=" map-point ">
    <div class=" gd19a info " style=" top:44.95%; right:33.35%; ">
        <i class="fa-solid fa-circle fasum" aria-hidden="true"></i>
        <div class="info-item clearfix">
            <p class=" fs-4 fw-bold titlegd mb-3 py-2 px-0">{{ $namegd19a->name }}</p>
            <div class="container px-0 mx-auto ">
                <div class="row fs-6">
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-wifi logow "></i>
                        <!-- <p class="jaringantext"> - AP</p> -->
                        <p class="jaringantext ">{{ ($jargd19a->ap === 0) ? "-" : ($jargd19a->ap) }} AP</p>
                    </div>
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-download logow "></i>
                        <!-- <p class="jaringantext"> - Mbps</p> -->
                        <p class="jaringantext">{{ ($jargd19a->download === 0.0) ? "-" : ($jargd19a->download) }} Mbps</p>
                    </div>
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-upload logow"></i>
                        <!-- <p class="jaringantext"> - Mbps</p> -->
                        <p class="jaringantext">{{ ($jargd19a->upload === 0.0) ? "-" : ($jargd19a->upload) }} Mbps</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>