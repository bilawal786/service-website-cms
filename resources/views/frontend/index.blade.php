@extends('layouts.frontapp')
@section('title', 'CodingCrust | Home')
@section('section')


<?php
$projects = App\Project::all();
$blogs = App\Blog::all();
?>

    @include('includes.frontend.herosection')

    @include('includes.frontend.aboutus')

    @include('includes.frontend.services')

    @include('includes.frontend.portfolio')

    @include('includes.frontend.cta')

    @include('includes.frontend.stats')

    @include('includes.frontend.testimonials')

    @include('includes.frontend.team')

    @include('includes.frontend.contactus')

    @include('includes.frontend.blogs')


@endsection
