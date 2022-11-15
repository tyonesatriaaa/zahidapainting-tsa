@extends('user.layouts.navbar')

@section('content')
<section id="services">
    <div class="container">

        <div class="row">


        <div class="col-md-12">

            <div  class="content-box-large">

<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 40px;">

        <form method="get" action="/admin/users/search">
            <div class="float-left my-2" style="margin-right:20px; float:left">
                <button type="submit" class="btn btn-primary">Search</button>

            </div>

            <div class="float-left my-2" style="float: left">
                <input type="search" name="search" class="form-control" id="cari" aria-describedby="search" >

            </div>

        </form>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

            <table class="table table-bordered">
                <thead class="thead">
                <tr>
                <th>Id</th>
                <th>Total Harga</th>
                <th>Order Date</th>
                <th>Status Order</th>
                <th>Estimasi Selesai</th>
                <th>Progres</th>
                <th>Bukti Pembayaran</th>
                <th width="180px">Action</th>
            </thead>

                </tr>
                @foreach ($order as $orders)
                <tr>
                <td>{{ $orders->id }}</td>
                <td>{{ $orders->total_cost }}</td>
                <td>{{ $orders->order_date }}</td>
                <td>{{ $orders->order_status }}</td>
                <td>{{ $orders->estimasi_date }}</td>
                <td>{{ $orders->progress }}</td>
                <td>
                    @if(is_null($orders->bukti))
                    Belum Upload
                    @else
                    Sudah Upload
                    @endif
                </td>

                <td>
                 <a class="btn btn-primary" href="{{ route('showpesanan', $orders->id) }}">Show</a>

                <form action="{{ route('batalkanpesanan', $orders->id) }}" method="POST">


                @csrf
                 @method('DELETE')
            @if($orders->order_status == 'Menunggu Konfirmasi')

            <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">Batalkan</button>
            @endif
            </form>

            @if(is_null($orders->bukti))
            <a href="{{ route('showbukti', $orders->id) }}"  class="btn btn-info">Upload Pembayaran</a>
            @endif
            </td>
            </tr>
                @endforeach
            </table>
            </div>
        </div>
        </div>

    

@endsection
