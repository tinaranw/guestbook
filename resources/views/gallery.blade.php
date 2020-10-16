@extends('layout/main')
@section('judul','Gallery')
@section('isi_utama')

<section id="portfolio" class="portfolio">
    <div class="container">
        <h2 class="text-uppercase text-center text-secondary" style="font-family: 'Amatic SC', cursive;">Gallery</h2><img class="d-block d-lg-flex align-items-lg-center" src="{{ asset('/img/uploads/hr.png') }}" style="margin: 50px auto;">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-1" data-toggle="modal">
                    <div class="d-flex portfolio-item-caption position-absolute h-100 w-100" style="background-color: #bcb8b1;">
                        <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="{{ asset('/img/uploads/157.jpg') }}"></a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-2" data-toggle="modal">
                    <div class="d-flex portfolio-item-caption position-absolute h-100 w-100" style="background-color: #bcb8b1;">
                        <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="{{ asset('/img/uploads/childhood.jpg') }}"></a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-3" data-toggle="modal">
                    <div class="d-flex portfolio-item-caption position-absolute h-100 w-100" style="color: #bcb8b1;background-color: #bcb8b1;">
                        <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="{{ asset('/img/uploads/169.jpg') }}"></a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-4" data-toggle="modal">
                    <div class="d-flex portfolio-item-caption position-absolute h-100 w-100" style="background-color: #bcb8b1;">
                        <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="{{ asset('/img/uploads/BWCQ6198.jpg') }}"></a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-5" data-toggle="modal">
                    <div class="d-flex portfolio-item-caption position-absolute h-100 w-100" style="background-color: #bcb8b1;">
                        <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="{{ asset('/img/uploads/158.jpg') }}"></a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-6" data-toggle="modal">
                    <div class="d-flex portfolio-item-caption position-absolute h-100 w-100" style="background-color: #bcb8b1;">
                        <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="{{ asset('/img/uploads/pride.jpg') }}"></a>
            </div>
        </div>
    </div>
</section>

@endsection