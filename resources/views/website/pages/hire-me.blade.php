@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="container p-3">
                <img src="{{asset('img/logo/logo.png')}}" width="150px" alt="logo">
            </div>
            <div class="p-3 container-fluid bg-primary">
                <div class="container p-3 text-white">
                    <h1>Hire Me</h1>
                    <p>Turn your motorcycle, car, van, 4x4, or lorry into a money-making machine</p>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 py-5 ">
                        <h1 class="text-info">What you get?</h1>
                        <h5>With the increase in online shopping, businesses are looking to deliver more.
                            You'll play a crucial role in building the future of commerce.</h5>
                    </div>
                </div>
            </div>

            <div class="container mb-5">
                <div class="row justify-content-around">
                    <div class="col-md-4">
                        <div class="px-5 py-2 text-center">
                            <div class="mb-2">
                                <h4 class="text-info">
                                    <span class="pr-3"><i class="fas fa-car"></i></span> Earn Great Income
                                </h4>
                            </div>
                            <div>
                                <p>Get paid competitive rates for every
                                    delivery or task completed.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="px-5 py-2 text-center">
                            <div class="mb-2">
                                <h4 class="text-info">
                                    <span class="pr-3"><i class="fas fa-car"></i></span> Weekly Payment
                                </h4>
                            </div>
                            <div>
                                <p>Your earnings will be transferred to
                                    you weekly, by next Saturday.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="px-5 py-2 text-center">
                            <div class="mb-2">
                                <h4 class="text-info">
                                    <span class="pr-3"><i class="fas fa-car"></i></span> Flexible Hours
                                </h4>
                            </div>
                            <div>
                                <p>Work full day or part-time. You can
                                    schedule your own hours.
                                </p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-light">
                <div class="row">
                    <div class="col-12 py-5  text-center">
                        <h1 class="text-info">Make money doing delivery</h1>
                        <a class="btn btn-info text-white">Apply now</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5 ">
                        <h1 class="text-info">How it works?</h1>
                        <h5>Get income with your smartphone and vehicle in 3 simple steps.</h5>
                        <div class="card border-0 mb-3 mr-3">
                            <div class="row no-gutters">
                                <div class="card-img">
                                    <img src="{{asset('img/extra/how_it_works.jpg')}}" class="card-img" alt="how it works">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="card border-0 mb-3 mr-3">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="{{asset('img/extra/about_you.jpg')}}" class="card-img" alt="vision">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h1 class="text-info">About you</h1>
                                    <h5 class="card-title text-muted"><strong>Requirements</strong></h5>
                                    <ul class="card-text text-muted">
                                        <li class="list-unstyled"><i class="far fa-check-circle"> </i>  Vehicle (Motorcycle, car, van, 4 x 4 or lorry) with valid road tax and insurance</li>
                                        <li class="list-unstyled"><i class="far fa-check-circle"> </i>  Good driving record</li>
                                        <li class="list-unstyled"><i class="far fa-check-circle"> </i>  Smartphone with internet data connection</li>
                                        <li class="list-unstyled"><i class="far fa-check-circle"> </i>  Nepalese citizen</li>
                                        <a class="btn btn-info text-white my-3">Sign up for free</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
