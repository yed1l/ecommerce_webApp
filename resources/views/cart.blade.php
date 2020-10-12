@extends('master')
@section('content')
        <div class="container-fluid content table-responsive">
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>Total</th>
                                    <th>Rs 0</th>
                                    <th><button class="btn btn-primary" type="submit"><a href="success.blade.php" target="_blank">Confirm Order</a></button></th>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
