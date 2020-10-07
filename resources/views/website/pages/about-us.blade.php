@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="container p-3">
                <img src="{{asset('img/logo/logo.png')}}" width="200px" alt="logo">
            </div>
            <div class="p-3 container-fluid bg-primary">
                <div class="container p-3 text-white">
                    <h1>About dSewa</h1>
                    <p>Seamless & Accessible Courier</p>
                </div>
            </div>
            <div class="container p-3">
                <div class="row py-5">
                    <h2>Philosophy & Vision</h2>
                    <p></p>
                </div>
                <div class="row">
                    <div class="card mb-3 mr-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{asset('img/extra/vision.jpg')}}" class="card-img" alt="vision">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>Vision</strong></h5>
                                    <p class="card-text">Enabling people, business and communities to efficiency
                                        -through technology.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{asset('img/extra/mission.jpg')}}" class="card-img" alt="Mission">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>Mission</strong></h5>
                                    <p class="card-text">Leverage our technology to unlock values in supply chain and
                                        build smart and efficient solutions
                                        that can create sustainable growth for business and society.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container p-3">
                <div class="row py-5">
                    <h2>Our Values</h2>
                    <p></p>
                </div>
                <div class="row">
                    <div class="card mb-3 mr-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{asset('img/extra/partnership.jpg')}}" class="card-img" alt="partnership">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>Partnership</strong></h5>
                                    <p class="card-text">We dedicate to collaborate and connect for a greater value to
                                        all
                                        stakeholders.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{asset('img/extra/resistance.jpg')}}" class="card-img" alt="resistance">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>Resistance</strong></h5>
                                    <p class="card-text">We respond to challenges and learn quickly to cope and overcome
                                        every risk and adversity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{asset('img/extra/creative.jpg')}}" class="card-img" alt="creative">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>Creative</strong></h5>
                                    <p class="card-text">We are continuously developing better process and innovate
                                        better
                                        way of working.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container p-3">
                <div class="py-5"></div>
                <div class="row">
                    <div class="card text-white bg-secondary mb-3 mr-3" style="max-width: 28rem;">
                        <div class="card-header"><h5>Contact</h5></div>
                        <div class="card-body">
                            <p class="card-title">Delivery Sewa Company Pvt Ltd
                            </p>
                            <p class="card-text">  <span class="text-reset">*dSewa is nickname for Delivery Sewa company Pvt Ltd.</span>
                            </p>
                            <a class="btn btn-info float-right">Contact support</a>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3 mr-3" style="max-width: 28rem;">
                        <div class="card-header"><h5>HQ</h5></div>
                        <div class="card-body">
                            <p class="card-title">Delivery Sewa Company Pvt Ltd
                            </p>
                            <p class="card-text">Road No. 03, Sambhu Marg,
                                Ward No. 09, KMC,
                                Kathmandu, Bagmati, Nepal
                            </p>
                        </div>
                    </div>
                    <div class="card text-white bg-danger mb-3" style="max-width: 25rem;">
                        <div class="card-header"><h5>Connect through</h5></div>
                        <div class="card-body">
                            <ul>
                                <li class="list-unstyled"><a href="#" class="text-white"><i class="fab fa-facebook"></i> Facebook</a></li>
                                <li class="list-unstyled"><a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a></li>
                                <li class="list-unstyled"><a href="#" class="text-white"><i class="fab fa-twitter"></i> Twitter</a></li>
                                <li class="list-unstyled"><a href="#" class="text-white"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                                <li class="list-unstyled"><a href="#" class="text-white"><i class="fab fa-youtube"></i> Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
