@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="container p-3">
                <img src="{{asset('img/logo/dSewanew.png')}}" width="200px" alt="logo">
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
                                <img src="{{asset('img/extra/mission.jpg')}}" class="card-img" alt="vision">
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
                                <img src="{{asset('img/extra/partnership.jpg')}}" class="card-img" alt="vision">
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
                                <img src="{{asset('img/extra/resistance.jpg')}}" class="card-img" alt="vision">
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
                                <img src="{{asset('img/extra/creative.jpg')}}" class="card-img" alt="vision">
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
                    <div class="card text-white bg-secondary mb-3 mr-3" style="max-width: 30rem;">
                        <div class="card-header"><h4>Contact</h4></div>
                        <div class="card-body">
                            <h5 class="card-title">Delivery Sewa Company Pvt Ltd
                            </h5>
                            <p class="card-text">*dSewa is nickname for Delivery Sewa company Pvt Ltd.
                            </p>
                            <br></br>
                            <button class="btn btn-primary float-right">Contact support</button>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3 mr-3" style="max-width: 30rem;">
                        <div class="card-header"><h4>HQ</h4></div>
                        <div class="card-body">
                            <h5 class="card-title">Delivery Sewa Company Pvt Ltd
                            </h5>
                            <p class="card-text">Road No. 03, Sambhu Marg,
                                Ward No. 09, KMC,
                                Kathmandu, Bagmati, Nepal
                            </p>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
                        <div class="card-header"><h4>Social</h4></div>
                        <div class="card-body">
                            <h5 class="card-title">Connect through
                            </h5>
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
