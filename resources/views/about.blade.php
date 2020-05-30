@extends('layout')

@section('title', 'Products')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>About</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="container">
      <div class="">
        <h1 class="about"> About </h1>
        <div class="about-section">
          <div class="about-picture">
            <img src="/img/cow.jpg" alt="Man milking cow">
          </div><!-- end about-picture -->
          <div class="about-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquid temporibus quo reiciendis, quasi consectetur veniam inventore       reprehenderit, excepturi laborum quia dolorum incidunt sunt impedit veritatis autem earum delectus. Vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquid temporibus quo reiciendis.
          </div><!-- end about-text -->
          {{-- <div class="train-tracks"><img src="/img/train.gif" alt="Man milking cow"></div> --}}
          {{-- <br> --}}
          <hr>
          <hr>

          <div class="about-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquid temporibus quo reiciendis, quasi consectetur veniam inventore       reprehenderit, excepturi laborum quia dolorum incidunt sunt impedit veritatis autem earum delectus. Vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquid temporibus quo reiciendis.
          </div><!-- end about-text -->
          <div class="about-picture">
            <img src="/img/biscuits.jpg" alt="Man milking cow">
          </div><!-- end about-picture -->
        </div> <!-- end about-section -->
        <div class="spacer"></div>
      </div>
    </div>


@endsection
