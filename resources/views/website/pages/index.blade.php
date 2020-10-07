@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
        @if($sliders!=null)
            <!-- Start::Banner Desktop view -->
            @include('website.partials.plugins.image-card.image-overlays')
            <!-- End::Banner Desktop view -->
        @endif

        @foreach($headers as $header)
            @if($header->hasServingWith())
                <!--start::Serving with-->
                    <div class="container-fluid bg-light">
                        <div class="container">
                            <div class="row p-5">
                                <div class="col-12">
                                    <div class="desktop-view">
                                        @foreach($headers as $header)
                                            @foreach($tags as $tag)
                                                @if($header->tag_id == $tag->id && $tag->name == 'serving-with')
                                                    @include('website.partials.plugins.header')
                                                @endif
                                            @endforeach
                                        @endforeach
                                        <div>
                                            @foreach($images as $image)
                                                @foreach($tags as $tag)
                                                    @if($image->tag_id == $tag->id && $tag->name == 'serving-with')
                                                        <img src="{{asset('img/main/'.$image->image)}}"
                                                             class="img-fluid py-5"
                                                             alt="{{$image->image}}">
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Serving with -->
            @endif
        @endforeach

        @foreach($images as $image)
            @if($image->hasFastDelivery())
                <!--start::Deliver more in less time-->
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row p-5">
                                @foreach($textWithImages as $textWithImage)
                                    @foreach($tags as $tag)
                                        @if($tag->name == 'fast-delivery' && $textWithImage->tag_id == $tag->id)
                                            @include('website.partials.plugins.image-card.image-caps.image-caps-right')
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--end::Deliver more in less time -->
            @endif
        @endforeach

        @foreach($headers as $header)
            @if($header->hasTimeAndMoney())
                <!-- Start::Start saving time and money today -->
                    <div class="container-fluid bg-light">
                        <div class="container">
                            <div class="row p-5">
                                <div class="col-12">
                                    <div class="text-center desktop-view">
                                        @foreach($headers as $header)
                                            @foreach($tags as $tag)
                                                @if($header->tag_id == $tag->id && $tag->name == 'time-and-money')
                                                    @include('website.partials.plugins.header')
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::Start saving time and money today -->
            @endif
        @endforeach

        @foreach($headers as $header)
            @if($header->hasSaveMoney())
                <!--start::Save money on every shipment-->
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row p-5">
                                @foreach($textWithImages as $textWithImage)
                                    @foreach($tags as $tag)
                                        @if($tag->name == 'save-money' && $textWithImage->tag_id == $tag->id)
                                            @include('website.partials.plugins.image-card.image-caps.image-caps-left')
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--end::Save money on every shipment -->
            @endif
        @endforeach

        @foreach($headers as $header)
            @if($header->hasEasySteps())
                <!--start::Easily get delivery done-->
                    <div class="container-fluid bg-light">
                        <div class="container">
                            <div class="row p-5">
                                <div class="col-12">
                                    <div class="pb-5 text-center desktop-view">
                                        @foreach($headers as $header)
                                            @foreach($tags as $tag)
                                                @if($header->tag_id == $tag->id && $tag->name == 'easy-steps')
                                                    @include('website.partials.plugins.header')
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>
                                    <div class="row px-5">
                                        @include('website.partials.plugins.image-card.image-card')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Easily get delivery done -->
            @endif
        @endforeach

        <!--start::All of your delivery needs on one platform-->
            <div class="container-fluid">
                <div class="container">
                    <div class="row p-5">
                        @foreach($textWithImages as $textWithImage)
                            @foreach($tags as $tag)
                                @if($tag->name == 'one-platform' && $textWithImage->tag_id == $tag->id)
                                    <div class="col-lg p-5 desktop-view">
                                        <h1>{{$textWithImage->title}}</h1>
                                        <h5 class="py-2">
                                            {{$textWithImage->description}}
                                        </h5>
                                        @foreach($iconCards as $iconCard)
                                            @foreach($tags as $tag)
                                                @if($tag->name == 'one-platform' && $iconCard->tag_id == $tag->id)
                                                    <div class="col-lg my-2 text-justify">
                                                        <div class="row py-2">
                                                            <div class="col-md-3 col-lg-2">
                                                                <h3 style="color: #1d68a7; font-weight: bold">
                                                                    <span>{!! $iconCard->icon !!}</span></h3>
                                                            </div>
                                                            <div class="col-md">
                                                                <h3 class="pb-2"
                                                                    style="color: #1d68a7;">{{$iconCard->title}}</h3>
                                                                <h5>
                                                                    {{$iconCard->description}}
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endforeach

                                        @if($textWithImage->button_text != null)
                                            <h5 class="pt-3">
                                                <a type="submit" href="{{$textWithImage->button_url}}"
                                                   class="btn btn-primary">
                                                    {{$textWithImage->button_text}}
                                                </a>
                                            </h5>
                                        @endif
                                    </div>
                                    <div class="col-lg p-5 ">
                                        <img class="img-fluid" src="{{asset('img/main/'.$textWithImage->image)}}"
                                             alt="{{$textWithImage->image}}">
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
            <!--end::All of your delivery needs on one platform -->

            <!-- start::more delivery options -->
            <div class="container-fluid bg-light">
                <div class="container">
                    <div class="row p-5">
                        <div class="col-12">
                            <div class="col-md text-center desktop-view">
                                @foreach($headers as $header)
                                    @foreach($tags as $tag)
                                        @if($header->tag_id == $tag->id && $tag->name == 'delivery-options')
                                            @include('website.partials.plugins.header')
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            <div class="row">
                                @foreach($iconCards as $iconCard)
                                    @foreach($tags as $tag)
                                        @if($tag->name == 'delivery-options' && $iconCard->tag_id == $tag->id)
                                            @include('website.partials.plugins.icon-card')
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::more delivery options -->

            <!-- start::Adv -->
            <div class="container-fluid bg-primary">
                <div class="container">
                    <div class="row p-5">
                        <div class="col-12">
                            <div class="col-md text-center desktop-view" id="advertisement_one">
                                @foreach($headers as $header)
                                    @foreach($tags as $tag)
                                        @if($header->tag_id == $tag->id && $tag->name == 'advertisement_one')
                                            @include('website.partials.plugins.header')
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::Adv -->

            <!-- start::More than just delivery -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row p-5">
                        <div class="col-12">
                            <div class="col-md text-center desktop-view">
                                @foreach($headers as $header)
                                    @foreach($tags as $tag)
                                        @if($header->tag_id == $tag->id && $tag->name == 'features')
                                            @include('website.partials.plugins.header')
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>

                            <div class="row">
                                @foreach($iconCards as $iconCard)
                                    @foreach($tags as $tag)
                                        @if($tag->name == 'features' && $iconCard->tag_id == $tag->id)
                                            @include('website.partials.plugins.icon-card')
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::More than just delivery -->

            <!-- start::testimonial-->
            <div class="container-fluid bg-light">
                @include('website.partials.plugins.testimonial')
            </div>
            <!-- end::testimonial-->

            <!-- start::partners with ecommerce -->
            <div class="container-fluid" id="partner">
                <div class="container">
                    <div class="row p-5">
                        <div class="col-12">
                            <div class="col-md pb-5 text-center desktop-view">
                                @foreach($headers as $header)
                                    @foreach($tags as $tag)
                                        @if($header->tag_id == $tag->id && $tag->name == 'partners')
                                            @include('website.partials.plugins.header')
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            @include('website.partials.plugins.image-card.partners')
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::partners with ecommerce -->

            <!-- start::features on -->
            <div class="container-fluid bg-light">
                <div class="container">
                    <div class="row p-5">
                        <div class="col-12">
                            <div class="col-md text-center desktop-view">
                                @foreach($headers as $header)
                                    @foreach($tags as $tag)
                                        @if($header->tag_id == $tag->id && $tag->name == 'featured-on')
                                            @include('website.partials.plugins.header')
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                            @include('website.partials.plugins.image-card.featured-on')
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::features on -->

            <!-- start::help -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row p-5">
                        <div class="col-12">
                            <div class="row">
                                @foreach($iconCards as $iconCard)
                                    @foreach($tags as $tag)
                                        @if($tag->name == 'help' && $iconCard->tag_id == $tag->id)
                                            @include('website.partials.plugins.icon-card')
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start::help -->

            <!-- Start::Get started -->
            <div class="container-fluid" style="background-color: #312ec8">
                <div class="container">
                    <div class="row p-5">
                        <div class="col-12">
                            <div class="col-md text-center text-white">
                                @foreach($headers as $header)
                                    @foreach($tags as $tag)
                                        @if($header->tag_id == $tag->id && $tag->name == 'get-started')
                                            @include('website.partials.plugins.header')
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::Get started -->
        </div>
    </div>
@endsection
