@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
All Category | Arizona Vibe 
@endsection

@php
 $ptype = App\Models\PropertyType::latest()->limit(20)->get();

 @endphp

 <!--Page Title-->
 <section class="page-title-two bg-color-1 centred">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{ asset('frontend/assets/images/shape/shape-9.png') }});"></div>
        <div class="pattern-2" style="background-image: url({{ asset('frontend/assets/images/shape/shape-10.png') }});"></div>
    </div>
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>All Categories </h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>All Category</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="category-section centred">
<div class="auto-container">
<div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
<ul class="category-list clearfix">

    @foreach($ptype as $item)
    @php
        $property = App\Models\Property::where('ptype_id',$item->id)->get();
    @endphp
<li>
    <br></b>
<div class="category-block-one">
<div class="inner-box">
    <div class="icon-box"><i class="{{ $item->type_icon }}"></i></div>
    <h5><a href="{{ route('property.type',$item->id) }}">{{ $item->type_name }}</a></h5>
    <span>{{ count($property) }}</span>
</div>
</div>
</li>
 @endforeach
</ul>
</div>
</div>
</section>


@endsection