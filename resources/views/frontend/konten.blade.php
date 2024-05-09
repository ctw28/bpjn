@extends('frontend/template')


@section('head')
<style>
    .bg-breadcrumb {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../frontend/assets/img/banner-bpjn-2.png);
    }
</style>
@endsection
@section('content')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Berita</h1>
    </div>
</div>
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-12 col-lg-8 col-xl-8">
                <h1 id="judul">Judul</h1>
                <div class="position-relative rounded overflow-hidden mb-3">
                    <img id="gambar" class="img-zoomin img-fluid rounded w-100" alt="">

                </div>
                <div class="d-flex justify-content-between">
                    <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 minute read</a>
                    <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Views</a>
                    <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 05 Comment</a>
                    <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                </div>
                <p class="my-4" id="konten-isi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos necessitatibus alias odit, sit natus accusamus ut saepe cum reprehenderit obcaecati, excepturi ipsa quo nulla est velit vitae voluptate incidunt fuga.</p>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4">

                <div class="p-3 rounded border">
                    <div class="input-group w-100 mx-auto d-flex mb-4">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn btn-primary input-group-text p-3"><i class="fa fa-search text-white"></i></span>
                    </div>
                    <!-- <h4 class="mb-4">Popular Categories</h4>
                    <div class="row g-2">
                        <div class="col-12">
                            <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                Life Style
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                Fashion
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                Relationship
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                Art &amp; Culture
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                Self Development
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3 mb-4">
                                travel &amp; tourism
                            </a>
                        </div>
                    </div>
                    <h4 class="my-4">Stay Connected</h4>
                    <div class="row g-4">
                        <div class="col-12">
                            <a href="#" class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
                                <i class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
                                <span class="text-white">13,977 Fans</span>
                            </a>
                            <a href="#" class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
                                <i class="fab fa-twitter btn btn-light btn-square rounded-circle me-3"></i>
                                <span class="text-white">21,798 Follower</span>
                            </a>
                            <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-2">
                                <i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
                                <span class="text-white">7,999 Subscriber</span>
                            </a>
                            <a href="#" class="w-100 rounded btn btn-dark d-flex align-items-center p-3 mb-2">
                                <i class="fab fa-instagram btn btn-light btn-square rounded-circle me-3"></i>
                                <span class="text-white">19,764 Follower</span>
                            </a>
                            <a href="#" class="w-100 rounded btn btn-secondary d-flex align-items-center p-3 mb-2">
                                <i class="bi-cloud btn btn-light btn-square rounded-circle me-3"></i>
                                <span class="text-white">31,999 Subscriber</span>
                            </a>
                            <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-4">
                                <i class="fab fa-dribbble btn btn-light btn-square rounded-circle me-3"></i>
                                <span class="text-white">37,999 Subscriber</span>
                            </a>
                        </div>
                    </div> -->
                    <h4 class="my-4"><span id="jenis"></span> Lainnya</h4>
                    <div class="row g-4">

                        <div id="lainnya-list">

                        </div>
                        <div class="col-lg-12">
                            <a href="#" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">Lihat Semua</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    var slug = '{{ $slug }}';
    showKonten()
    async function showKonten() {
        let url = `${base_url}/api/list-konten?showall=1&is_web=1&slug=${slug}`
        let fetchRequest = await fetch(url)
        response = await fetchRequest.json()
        console.log(response);
        let data = response[0]
        let thumbnail = (data.thumbnail !== null) ? base_url + '/' + data.thumbnail : "{{ url('images/thumbnail.jpg') }}";

        document.querySelector('#gambar').src = thumbnail
        document.querySelector('#gambar').setAttribute('width', '100%')
        document.querySelector('#judul').innerText = data.judul
        document.querySelector('#jenis').innerText = data.jeniskonten.nama
        document.querySelector('#konten-isi').innerHTML = data.isi
        document.querySelector('#konten-isi').innerHTML = data.isi
        showLainnya(data.jeniskonten.slug)
        // document.getElementById('aplikasi-terkait').innerHTML = response[0].code

    }
    async function showLainnya(jenis) {

        let url = `${base_url}/api/list-konten?publikasi=1&is_web=true&limit=5&jenis=${jenis}`
        let fetchRequest = await fetch(url)
        response = await fetchRequest.json()
        console.log(response);
        // return 
        let contents = '';
        response.map((data, index) => {
            let thumbnail = (data.thumbnail !== null) ? base_url + '/' + data.thumbnail : "{{ url('images/thumbnail.jpg') }}";
            let link = '{{ route("konten",[":kategori",":slug"]) }}';
            link = link.replace(':kategori', data.jeniskonten.slug)
            link = link.replace(':slug', data.slug)
            contents += ` 
            <div class="col-12">
                <div class="row g-4 align-items-center features-item">
                    <div class="col-4">
                        <div class="rounded-circle position-relative">
                            <div class="overflow-hidden rounded-circle">
                                <img src="${thumbnail}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="features-content d-flex flex-column">
                            <p class="text-uppercase mb-2">Sports</p>
                            <a href="${link}" class="h6">
                            ${data.judul}
                            </a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> ${data.waktu}</small>
                        </div>
                    </div>
                </div>
            </div>
            
            `
        })
        document.querySelector('#lainnya-list').innerHTML = ''
        document.querySelector('#lainnya-list').innerHTML = contents
    }
</script>
@endsection