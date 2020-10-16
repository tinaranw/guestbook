@extends('layout/main')
@section('judul','Contact')
@section('isi_utama')

<section id="contact">
    <div class="container">
        <h2 class="text-uppercase text-center text-secondary mb-0" style="font-family: 'Amatic SC', cursive;">Contact Me</h2><img class="d-block" src="{{ asset('/img/uploads/hr.png') }}" style="margin: 10px auto;">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Name</label><input class="form-control" type="text" required="" placeholder="Name" id="name"><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Email Address</label><input class="form-control" type="email" required="" placeholder="Email Address" id="email"><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Phone Number</label><input class="form-control" type="tel" required="" placeholder="Phone Number" id="phone"><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-5 pb-2"><textarea class="form-control" rows="5" required="" placeholder="Message" id="message"></textarea><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" type="submit" id="sendMessageButton" style="background-color: #e0afa0;">Send</button></div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection