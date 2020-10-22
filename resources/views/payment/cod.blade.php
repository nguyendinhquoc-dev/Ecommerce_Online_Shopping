@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">ĐƠN HÀNG CỦA BẠN ĐÃ ĐƯỢC ĐẶT THÀNH CÔNG</h3>
        <p class="text-center">Cảm ơn bạn lựa chọn F.A Ecommerce làm địa chỉ mua hàng.</p>
        <p class="text-center">Chúng tôi sẽ liên hệ với bạn qua Email của bạn (<b>{{$user_order->users_email}}</b>) hoặc số điện thoại (<b>{{$user_order->mobile}}</b>)</p>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection