@extends('layouts.app')
@section('main-content')

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome {{ Auth::user() -> name }}!</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Social Links</h4>
                    </div>
                    <div class="card-body">
                        @php
                            $social = $settings -> social;
                            $social_data = json_decode($social);
                        @endphp
                        @include('validation')
                        <form action="{{ route('social.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Facebook</label>
                                <div class="col-lg-9">
                                    <input value="{{ $social_data -> fb }}" name="fb" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Twitter</label>
                                <div class="col-lg-9">
                                    <input value="{{ $social_data -> tw }}" name="tw" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Linkedin</label>
                                <div class="col-lg-9">
                                    <input value="{{ $social_data -> ln }}" name="ln" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Instagram</label>
                                <div class="col-lg-9">
                                    <input value="{{ $social_data -> in }}" name="in" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Dribble</label>
                                <div class="col-lg-9">
                                    <input value="{{ $social_data -> drb }}" name="drb" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->
@endsection
