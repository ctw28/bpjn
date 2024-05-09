@extends('frontend/template')


@section('head')
<style>
    .bg-breadcrumb {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/frontend/assets/img/banner-bpjn-2.png);
    }
</style>
@endsection
@section('content')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s" id="head-title">Berita</h1>
    </div>
</div>

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="section-title mb-5">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0" style="color:#000">Semua</h4>
            </div>
            <!-- <h1 class="display-3 mb-4">Our Service Given Physio Therapy By Expert.</h1> -->
            <!-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> -->
        </div>
        <div class="row g-4 justify-content-center" id="list-container">
        </div>
    </div>
    <div id="pagination"></div>
</div>
<!-- Services End -->
@endsection
@section('scripts')
<script>
    var vApiUrl = base_url;

    var vKategori = '{{ "konten-list/".$kategori }}';
    getMenu();

    function getMenu() {
        $.ajax({
            url: base_url + '/api/get-menu?search=' + vKategori + '&showall=true',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log(response);
                vApiUrl = vApiUrl + '/' + response[0].endpoint;
                document.querySelector('#head-title').innerText = response[0].nama
                loadData();
            },
            error: function() {
                alert(jenis + ' tidak ditemukan!');
            }
        });
    }

    function loadData(page = 1, search = '') {
        $.ajax({
            url: vApiUrl + '&page=' + page + '&search=' + search,
            method: 'GET',
            success: function(response) {
                var dataList = $('#list-container');
                var pagination = $('#pagination');
                dataList.empty();

                $.each(response.data, function(index, data) {
                    var thumbnail = (data.thumbnail !== null) ? base_url + "/" + data.thumbnail : base_url + "/" + "images/thumbnail.jpg";
                    var urlread = `${base_url}/konten/${data.jeniskonten.slug}/${data.slug}`
                    dataList.append(`
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="${thumbnail}" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> ${data.waktu}</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> ${data.komentar_count} Comments</a>
                                </div>
                                <a href="${urlread}" class="h4">${data.judul}</a>
                                <p class="my-4">${data.pembuka}</p>
                            </div>
                        </div>
                    </div>`);
                });

                // renderPagination(response, pagination);
            }
        });
    }
</script>
@endsection