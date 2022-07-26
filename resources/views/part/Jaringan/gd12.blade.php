<div class=" map-point ">
    <div class=" gd12 info " style=" top:68.1%; right:36%; ">
        <i class="fa-solid fa-circle fasum" aria-hidden="true"></i>
        <div class="info-item clearfix">
            <p class=" fs-4 fw-bold titlegd mb-3 py-2 px-0">{{ $namegd12->name }}</p>
            <div class="container px-0 mx-auto ">
                <div class="row fs-6">
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-wifi logow "></i>
                        <!-- <p class="jaringantext"> - AP</p> -->
                        <p class="jaringantext ">{{ $jargd12->ap == 0 ? '-' : $jargd12->ap }} AP</p>
                    </div>
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-download logow "></i>
                        <!-- <p class="jaringantext"> - Mbps</p> -->
                        <p class="jaringantext">{{ $jargd12->download == 0.0 ? '-' : $jargd12->download }} Mbps</p>
                    </div>
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-upload logow"></i>
                        <!-- <p class="jaringantext"> - Mbps</p> -->
                        <p class="jaringantext">{{ $jargd12->upload == 0.0 ? '-' : $jargd12->upload }} Mbps</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
