@extends('layout/main')
@section('judul','Gallery')
@section('isi_utama')

<section id="about" class="bg-primary text-white mb-0" style="background-color: rgb(117,140,136);background-image: url({{ asset('/img/uploads/background2.png') }});">
    <h2 class="text-uppercase text-center text-secondary" style="font-family: 'Amatic SC', cursive;">About Tinara</h2>
    <div class="container"><img class="d-block" src="{{ asset('/img/uploads/hr.png') }}" style="margin: 10px auto;">
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead" style="color: rgb(44,62,80);">Freelancer is a free bootstrap theme. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead" style="color: rgb(44,62,80);">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
            </div>
        </div>
    </div>
</section>

@endsection