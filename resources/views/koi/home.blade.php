@section('content')
@extends('layouts.app')

{{-- Header --}}
<div class="mt-5"></div>
<div class="row justify-content-center align-items-center mb-4">
    <div class="col-md-5 text-center text-md-start">
    <h1>
        <div class="display-3 text-danger">
            Reqick Auction
        </div>
        <div class="display-5 text-muted">
            Koi Auction
        </div>
    </h1>
    <p class="lead my-4 text-muted">
        We hold Koi Auction and sells high quality Koi Products such as their foods, filters, medicine, etc. 
    </p>
    <a href="#rule" class="btn btn-danger btn-md mb-3">
        Rules
    </a> <br>
    </div>
    <div class="col-md-5 text-center d-none d-md-block">
        <img class='img-fluid' src="/img/koihome.png" alt="" />
    </div>
</div>

{{-- Header End --}}

{{-- Body --}}

<section id="rule">
    {{-- <div class="display-5 text-danger text-center mb-5">
       Auction Rules
    </div> --}}
    <div class="row mb-4">
        <div class="text-center mb-4">
            <h5 class="text-danger display-6">Yth.</h5>
            <p>Teman - Teman</p>
            <p>Sehubungan dengan baru aktifnya sistem injury time di saat closing, mohon sering sering mefresh browser anda pada layar bidding.</p>
            <p>Injury time mb-4 memberlakukan perpanjangan waktu 3 menit jika ada yang membid leader at the moment.</p>

            <h6 class="text-danger">1. Mohon perhatikan Layar BIDDING serta Refresh Browser anda untuk tampilan lebih maksimal dan update</h6>
            <h6 class="text-muted">2. Jika ada ganguan atau kesulitan, jangan ragu hubungi via WA Glen 0816900003.</h6>
            <h6 class="text-muted">Terima Kasih</h6>
        </div>
        <div class="col-12 col-lg-6  mb-4">
            <div class="text-center text-danger display-6 mb-4">
                Rules
            </div>
            <h6 class="text-danger">1. The Auction Of This Service Adopts An Automatic Bidding System.</h6>
            <p class="text-muted">When you place a bid, you enter the maximum amount you are willing to pay. We will place bids on your behalf using the automatic bidding system, which is based on the current high bid. We will bid only as much as necessary to make sure that you remain the high bidder, up to your maximum amount.</p>
            <h6 class="text-danger mb-4">2. The Bidding Period, The Bidding Time, Successful Bid Time And Time Concerning Management Is Based On West Indonesia Time.</h6>
            <h6 class="text-danger">3. Bidding Is Available Only In The Bidding Period Provided To Each Koi.</h6>
            <p class="text-muted">The bidding period starts from the event beginning to the bidding end time. If another bidder places a higher bid 5 minutes before the auction ends, the ending time is extended 5 minutes.</p>
            <h6 class="text-danger">4. After Placing A Bid, We Will Not Accept Cancellation.</h6>
            <p class="text-muted">When bidders cancel biddings, we may forbid the use of our service or cancel membership of the bidders in accordance with Gading Koi Auction assessment of the situation.</p>
            

        </div>
        <div class="col-12 col-lg-6">
            <div class="text-center text-danger display-6 mb-4">
                Peraturan
            </div>
            <h6 class="text-danger">1. Layanan Lelang Ini Mengadopsi Sistem Penawaran Otomatis.</h6>
            <p class="text-muted">Ketika anda melakukan penawaran, anda akan memasukkan jumlah maksimum penawaran yang anda bersedia untuk bayar. Kami akan mengajukan penawaran atas nama anda dengan menggunakan sistem penawaran otomatis, yang berdasarkan kepada tawaran tertinggi saat itu. Kami akan melakukan penawaran kembali hanya sebanyak jumlah yang dipelukan untuk memastikan bahwa anda akan tetap menjadi penawar dengan penawaran tertinggi, hingga pada jumlah maksimum yang Anda telah tetapkan pada sebelumnya.</p>
            <h6 class="text-danger mb-4">2. Periode Penawaran, Waktu Penawaran, Waktu Ketika Penawaran Berhasil, Dan Waktu Yang Berkaitan Dengan Manajemen Berdasarkan Zona Waktu Indonesia. Bagian Barat(WIB)</h6>
            <h6 class="text-danger">3. Penawaran Hanya Dapat Dilakukan Dalam Periode Penawaran Yang Diberikan Kepada Masing - Masing Koi.</h6>
            <p class="text-muted">Periode penawaran dimulai ketika awal acara berlangsung hingga pada waktu penawaran berakhir. Jika penawar lain melakukan penawaran yang lebih tinggi pada saat 5 menit sebelum waktu penawaran berakhir, maka waktu akhir penawaran akan ditambahkan selama 5 menit.</p>
            <h6 class="text-danger">4. Apabila Telah Melakukan Penawaran, Maka Kami Tidak Akan Menerima Adanya Pembatalan Penawaran.</h6>
            <p class="text-muted">Ketika penawar melakukan pembatalan penawaran, maka kami mungkin akan melarang penawar tersebut untuk menggunakan lagi layanan lelang kami ataupun menghapus keanggotaannya dari layanan Lelang Kami, yang dimana tindakan-tindakan tersebut akan terlebih dahulu disesuaikan dengan kondisi dan situasi yang mungkin akan terjadi. Please read the rule for more information.</p>
        </div>
    </div>

    <div class="row">
        <div class="text-center mb-5">
            <h5 class="text-danger display-6">Terms and Conditions</h5>
        </div>
        <div class="col-12 col-lg-6  mb-4">
            <h6 class="text-danger">1. Max payment will be three days after auction ends.</h6>
            <p class="text-muted">If you need more time please call us</p>
            <h6 class="text-danger">2. Fish(es) could be taken in maksimum one week after auction ends.</h6>
            <p class="text-muted">if one week after auction ends and the fish still in Gading Koi you'll be guaranteed for the fish. If one week is over or your fish has been shipped the guarantee is over and all is on your own risk</p>
            <h6 class="text-danger mb-4">3. For customer who lives in Jakarta, the shipping cost is free with minimum transaction IDR 5 million</h6>
            <p class="text-muted">The bidding period starts from the event beginning to the bidding end time. If another bidder places a higher bid 5 minutes before the auction ends, the ending time is extended 5 minutes.</p>
            <h6 class="text-danger">4. For customer who lives outside Jakarta area, please call us for further information about shipping cost. We can send anywhere in Indonesia.</h6>
        </div>
        <div class="col-12 col-lg-6">
            <h6 class="text-danger">1. Maksimal pembayaran adalah tiga hari setelah pelelangan berakhir.</h6>
            <p class="text-muted">Jika anda membutuhkan waktu lebih silahkan hubungi kami</p>
            <h6 class="text-danger">2. Ikan dapat diambil atau dikirimmaksimal satu minggu setelah pelelangan berakhir.</h6>
            <p class="text-muted">Jika selama satu minggu tersebut ikan masih berada di Gading Koi maka ikan masih dalam tanggungan Gading Koi. Apabila sudah melewati batas waktu atau ikan sudah dikirimkan maka resiko akan menjadi tanggung jawab pelanggan</p>
            <h6 class="text-danger mb-4">3. Untuk pelanggan yang tinggal dikota Jakarta, gratis biaya pengiriman dengan minimal transaksi Rp 5.000.000,-</h6>
            <h6 class="text-danger">4. Untuk pelanggan yang tinggal diluar Jakarta, silahkan hubungi kami untuk informasi lebih lanjut mengenai biaya pengiriman. Kami melayani pengiriman ke seluruh Nusantara</h6>
        </div>
    </div>
</section>


@endsection