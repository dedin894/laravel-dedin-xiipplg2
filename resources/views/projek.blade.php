@extends('layout.header')
@section('container')
        <div class="container my-4">
            <div class="row">

                <div class="col-md-8 col-12 mt-3">
                    <div class="article mb-4">
                        <h3 class="text-center">Project 1 : Membuat Website SPP</h3>
                        <div class="my-3 text-center">
                            <img src="{{ asset('img/spp.png') }}" class="img-fluid rounded shadow-sm" alt="Website SPP">
                        </div>
                        <div class="textarticle text-start">
                            <p><strong>Deskripsi : </strong>Sistem Pembayaran SPP merupakan aplikasi yang membantu sekolah mengelola data siswa, 
                            pembayaran SPP, transaksi, tunggakan, dan laporan secara lebih mudah, cepat, dan terorganisir.</p>
                        </div>
                    </div>

                    <div class="article mb-4">
                        <h3 class="text-center">Project 2 : Desain Tampilan Aplikasi Onyam Food</h3>
                        <div class="my-3 text-center">
                            <img src="{{ asset('img/makan.png') }}" class="img-fluid rounded shadow-sm" alt="Aplikasi Onyam Food">
                        </div>
                        <div class="textarticle text-start">
                            <p><strong>Deskripsi : </strong>Desain tampilan aplikasi Onyam Food bertujuan untuk 
                            memberikan pengalaman pengguna yang lebih baik dan menarik.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
@endsection