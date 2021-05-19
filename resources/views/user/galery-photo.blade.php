@extends('konten')
@section('content')

<div class="col-md-8">
    <div class="our-clients">
        <h2 class="classic-title">
            <span class="dongker-color"> Galeri Foto </span>
        </h2>
        <ul id="portfolio-list" data-animated="fadeIn">
            <li>
                <img src="{{asset('images/indonesia.png')}}" alt="" />
                <div class="portfolio-item-content">
                    <span class="header">Town winter 2016</span>
                    <p class="body animated8">web develpment, design</p>
                </div>
                <div class="icon-list">
                    <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
                    <a class="zoom lightbox" href="{{asset('images/indonesia.png')}}"><i class="fa fa-eye"></i></a>
                </div> 
            </li>
            <li>
                <img src="{{asset('images/indonesia.png')}}" alt="" />
                <div class="portfolio-item-content">
                    <span class="header">Town winter 2016</span>
                    <p class="body animated8">web develpment, design</p>
                </div>
                <div class="icon-list">
                    <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
                    <a class="zoom lightbox" href="{{asset('images/indonesia.png')}}"><i class="fa fa-eye"></i></a>
                </div> 
            </li>
        </ul>
    </div>
</div>

@endsection 