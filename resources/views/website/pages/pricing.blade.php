@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="container p-3">
                <img src="{{asset('img/logo/logo.png')}}" width="150px" alt="logo">
            </div>
            <div class="p-3 container-fluid bg-primary">
                <div class="container p-3 text-white">
                    <h1>Pricing</h1>
                    <p>Save upto 20% on membership</p>
                </div>
            </div>
        </div>

        <div class="row p-5">
            <div class="container">
                <div class="snip1214">
                    <div class="plan my-4">
                        <h5 class="plan-title">
                            Drop & Ship
                        </h5>
                        <div class="plan-cost"><span class="plan-price">NPR100</span><span
                                class="plan-type"> /Monthly</span></div>
                        <ul class="plan-features">
                            <li><span class="text-danger"><i class="fas fa-times"> </i></span>FREE Pickup</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Process within 8 Hrs</li>
                            <li><span class="text-danger"><i class="fas fa-times"> </i></span>Specified time delivery</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>10AM - 5PM</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>(L+W+H) = 30 inches</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>FREE Email notifications
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>FREE Apps notifications
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>SMS notifications NPR
                                10.00
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Courier bag discount</li>
                            <li><span class="text-danger"><i class="fas fa-times"> </i></span>Free Credits</li>
                            <li><span class="text-danger"><i class="fas fa-times"> </i></span>Credits (+20%)</li>
                            <li><span class="text-danger"><i class="fas fa-times"> </i></span>Pre-paid Option (-10%)</li>
                        </ul>
                        <div class="plan-select"><a href="">Get Started</a></div>
                    </div>
                    <div class="plan my-4">
                        <h5 class="plan-title">
                            Ecommerce
                        </h5>
                        <div class="plan-cost"><span class="plan-price">NPR100</span><span
                                class="plan-type"> /Monthly</span></div>
                        <ul class="plan-features">
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>FREE Pickup</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Process within 8 Hrs</li>
                            <li><span class="text-danger"><i class="fas fa-times"> </i></span>Specified time delivery</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>10AM - 5PM</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>(L+W+H) = 30 inches</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>FREE Email notifications
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>FREE Apps notifications
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>SMS notifications NPR
                                10.00
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Courier bag discount</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Free Credits</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Credits (+20%)</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Pre-paid Option (-10%)
                            </li>
                        </ul>
                        <div class="plan-select"><a href="">Get Started</a></div>
                    </div>
                    <div class="plan featured my-4">
                        <h5 class="plan-title">
                            Drop & Deliver
                        </h5>
                        <div class="plan-cost"><span class="plan-price">NPR150</span><span
                                class="plan-type"> /Monthly</span></div>
                        <ul class="plan-features">

                            <li><span class="text-danger"><i class="fas fa-times"> </i></span>FREE Pickup</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Process within 8 Hrs</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Specified time delivery
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>10AM - 5PM</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>(L+W+H) = 30 inches</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>FREE Email notifications
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>FREE Apps notifications
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>SMS notifications NPR
                                10.00
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Courier bag discount</li>
                            <li><span class="text-danger"><i class="fas fa-times"> </i></span>Free Credits</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Credits (+20%)</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Pre-paid Option (-10%)
                            </li>
                        </ul>
                        <div class="plan-select"><a href="">Get Started</a></div>
                    </div>
                    <div class="plan my-4">
                        <h5 class="plan-title">
                            Pick & Deliver
                        </h5>
                        <div class="plan-cost"><span class="plan-price">NPR200</span><span
                                class="plan-type"> /Monthly</span></div>
                        <ul class="plan-features">
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>FREE Pickup</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Process within 8 Hrs</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Specified time delivery
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>10AM - 5PM</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>(L+W+H) = 30 inches</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>FREE Email notifications
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>FREE Apps notifications
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>SMS notifications NPR
                                10.00
                            </li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Courier bag discount</li>
                            <li><span class="text-danger"><i class="fas fa-times"> </i></span>Free Credits</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Credits (+20%)</li>
                            <li><span class="text-success"><i class="fas fa-check"> </i></span>Pre-paid Option (-10%)
                            </li>
                        </ul>
                        <div class="plan-select"><a href="">Get Started</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
