<div class=" map-point ">
    <div class=" gd8 info " style=" top:67.725%; right:18.5%; ">
        <i class="fa-solid fa-circle fasum" aria-hidden="true"></i>
        <div class="info-item clearfix">
            <p class=" fs-4 fw-bold titlegd mb-3 py-2 px-0">{{ $namegd8->name }}</p>
            <div class="container px-0 mx-auto ">
                <div class="row fs-6">
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-wifi logow "></i>
                        <!-- <p class="jaringantext"> - AP</p> -->
                        <p class="jaringantext ">{{ $jargd8->ap == 0 ? '-' : $jargd8->ap }} AP</p>
                    </div>
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-download logow "></i>
                        <!-- <p class="jaringantext"> - Mbps</p> -->
                        <p class="jaringantext">{{ $jargd8->download == 0.0 ? '-' : $jargd8->download }} Mbps</p>
                    </div>
                    <div class="col info-item-wraping">
                        <i class="fa-solid fa-upload logow"></i>
                        <!-- <p class="jaringantext"> - Mbps</p> -->
                        <p class="jaringantext">{{ $jargd8->upload == 0.0 ? '-' : $jargd8->upload }} Mbps</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
