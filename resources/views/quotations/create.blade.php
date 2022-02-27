@extends('layouts.web')

@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="part-txt">
                        <h1>Contact Us</h1>
                        <ul>
                            <li>Home</li>
                            <li><i class="icofont-double-right"></i></li>
                            <li class="current">Quotation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="row no-gutters justify-content-between">
                <div class="col-xl-12 col-lg-12">
                    <div class="form-area">
                        <div class="title">
                            <h2>Request for Quotation:</h2>
                            <p>Use the form below to request for quotation</p>
                        </div>
                        <form action="{{ route('quotations.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Phone:</strong>
                                        <input type="tel" class="form-control" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Address:</strong>
                                        <textarea class="form-control" name="address" placeholder="Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary form-control"
                                        style="display: block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
