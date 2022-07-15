<div class=" map-point ">
    <div class=" gd20 info " style=" top:41.75%; right:71.65%; ">
        <i class="fa-solid fa-circle fasum" aria-hidden="true"></i>
        <div class="info-item clearfix">
            <p class=" fs-4 fw-bold titlegd mb-3 py-2 px-0">{{ $namegd20->name }}</p>
            <div class="container px-0 mx-auto ">
                <div class="row fs-6">
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-wifi logow "></i>
                        <!-- <p class="jaringantext"> - AP</p> -->
                        <p class="jaringantext ">{{ ($jargd20->ap === 0) ? "-" : ($jargd20->ap) }} AP</p>
                    </div>
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-download logow "></i>
                        <!-- <p class="jaringantext"> - Mbps</p> -->
                        <p class="jaringantext">{{ ($jargd20->download === 0.0) ? "-" : ($jargd20->download) }} Mbps</p>
                    </div>
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-upload logow"></i>
                        <!-- <p class="jaringantext"> - Mbps</p> -->
                        <p class="jaringantext">{{ ($jargd20->upload === 0.0) ? "-" : ($jargd20->upload) }} Mbps</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>