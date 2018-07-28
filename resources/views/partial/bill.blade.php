@extends('layouts.apps')
@section('were')
<div class="container">
<section class="vbox bg-white">
    <header class="header b-b b-light hidden-print">
        <button href="#" class="btn btn-sm btn-info pull-right" onClick="window.print();">Print</button>
        <p style="padding-left: 2px;">Invoice</p>
    </header>
    <section class="scrollable wrapper" id="print" style="padding-left: 36px;">
        <div class="row">
            <div class="col-xs-6">
                <h2 style="margin-top: 0px">Restro<b>Your Choice</b></h2>
                <p>1 Infinite Loop <br>
                    95014 Cuperino, CA<br>
                    United States
                </p>
            </div>
            <div class="col-xs-6 " style="    padding-left: 653px;">
                <h4 >INVOICE</h4>
            </div>
        </div>
        <div class="well m-t" style="margin-bottom: 50px">
            <div class="row" style="background-color:#eceff1;margin-right: 30px;box-shadow: 2px 5px 9px 3px #888888;">
                <div class="col">
                    <strong>TO:</strong>
                    <h4>{{$cart->name}}</h4>
                    <p>
                        {{$cart->address}}
                    </p>
                    <b>Phone: </b>{{$cart->phone}}
                </div>
                <div class="col" style="padding-left: 506px;">
                    <h5>Delevery time: <strong>{{$cart->delivery_time}}</strong></h5>
                    <h5>Order date: <strong>{{$cart->created_at}}</strong><h5>
                    <p class="m-t m-b">Order ID: <strong>#{{$cart->id}}</strong></p>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <table class="table">
            <thead>
            <tr>
                <th width="60">QTY</th>
                <th>DESCRIPTION</th>
                <th width="120">RATE</th>
                <th width="120">AMOUNT</th>
            </tr>
            </thead>
            <tbody>
            <tr>

                <td>{{$cart->quantity}}</td>
                <td><b>1. {{$cart->title}}</b><br><small>It is the best thing</small></td>
                <td class="">{{$cart->price}}</td>
                <td class="">{{$cart->price * $cart->quantity}}</td>
            </tr>
            <tr>
                <td colspan="3" class="text-right"><strong>Subtotal</strong></td>
                <td>{{$cart->price * $cart->quantity}}</td>
            </tr>
            <tr>
                <td colspan="3" class="text-right no-border"><strong>VAT</strong></td>
                <td>0.00</td>
            </tr>
            <tr>
                <td colspan="3" class="text-right no-border"><strong>Total</strong></td>
                <td><strong>{{$cart->price * $cart->quantity}}</strong></td>
            </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-xs-8">
                <p style="text-align: justify;"><i> Ps:&nbsp;Goods once sold cannot be returned.</i></p><br><br>
                <p style="position: absolute;padding: 0px 0px 0px 196px;"><sup><b>{{$cart->name}}</b></sup></p>
                <p>Receivied By: __________________ </p>
            </div>
        </div>
    </section>
</section>
</div>
@endsection