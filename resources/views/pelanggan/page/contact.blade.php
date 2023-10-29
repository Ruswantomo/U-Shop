@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text">
                Selamat datang di U-Shop, destinasi utama untuk mendapatkan pakaian berkualitas tinggi dengan gaya yang sederhana dan elegan, yang terinspirasi oleh semangat Uniqlo. 
                Kami memahami bahwa gaya pribadi adalah cara terbaik untuk mengekspresikan diri, dan kami berkomitmen untuk membantu Anda menemukan pilihan baju yang mencerminkan kepribadian dan gaya Anda.
                
                Kualitas adalah fokus utama kami. Kami menghadirkan kepada Anda pakaian yang tidak hanya tahan lama, tetapi juga mudah untuk dipadukan dengan item lain dalam koleksi kami. Setiap produk kami dipilih dengan teliti dan dirancang untuk memberikan kenyamanan serta tampilan yang tak lekang oleh waktu.
                Kami berkomitmen untuk memberikan nilai terbaik kepada pelanggan kami.

                Kepuasan pelanggan adalah prioritas kami. Tim layanan pelanggan kami selalu siap untuk membantu Anda dengan pertanyaan, masalah, atau permintaan khusus. 
                Kami percaya bahwa setiap pelanggan adalah bagian penting dari keluarga kami, dan kami berusaha untuk memberikan pengalaman berbelanja online yang luar biasa.
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/office-2.png') }}" style="width:100%" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x"></i>
            <p class="m-0 fs-5">+ 300 Pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-home fa-2x"> </i>
            <p class="m-0 fs-5"> +500 Seller</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-shirt fa-2x"></i>
            <p class="m-0 fs-5">+ 1000 Product</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
    <hr class="mb-5">
    <div class="row  mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px;"></div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Kritik dan saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center">Masukan kritik dan saran anda kepada aplikasi kami ini agar kami dapat memberikan
                        apa yang menjadi kebutuhan anda dan kami dapat berkembang lebih baik lagi.
                    </p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value=""
                                placeholder="Masukan email Anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4 w-100"> Kirim pesan anda</button>
                </div>
            </div>
        </div>
    </div>
@endsection
