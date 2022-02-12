@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">

    <div class="content-header">

        <h1>Blank Page
            <small>all starts here</small>
        </h1>

        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
            <li class="active">@lang('site.users')</li>
        </ol>

    </div>

    <section class="content">

        The DashBoard where you have a full control on your website

    </section>
</div>

@endsection