<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        .title_deg {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 40px;
        }


        .table_deg {
            border: 2px solid white;

            width: 100%;
            margin: auto;
            text-align: center;
        }

        .th_deg {
            background: skyblue;
        }

        .img_size {
            height: 100px;
            width: 150px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <h1 class="title_deg">All Orders</h1>
                <div style="margin:auto; padding-bottom:30px; padding-left:440px;">
                    <form action="{{ url('search') }}" method="GET">
                        @csrf
                        <input type="text" style="color: black" name="search" placeholder="Search For Something">
                        <input type="submit" value="Search" class="btn btn-outline-primary">
                    </form>
                </div>
                <table class="table_deg">
                    <tr class="th_deg">
                        <th style="padding: 7px; border:1px solid white;">Name</th>
                        <th style="padding: 7px; border:1px solid white;">Email</th>
                        <th style="padding: 7px; border:1px solid white;">Address</th>
                        <th style="padding: 7px; border:1px solid white;">Phone</th>
                        <th style="padding: 7px; border:1px solid white;">Product Title</th>
                        <th style="padding: 7px; border:1px solid white;">Quantity</th>
                        <th style="padding: 7px; border:1px solid white;">Price</th>
                        <th style="padding: 7px; border:1px solid white;">Payment status</th>
                        <th style="padding: 7px; border:1px solid white;">Delivery Status</th>
                        <th style="padding: 7px; border:1px solid white;">Image</th>
                        <th style="padding: 7px; border:1px solid white;">Delivered</th>
                        <th style="padding: 7px; border:1px solid white;">Print PDF</th>
                        <th style="padding: 7px; border:1px solid white;">Send Email</th>

                    </tr>
                    @forelse ($order as $order)
                        <tr>
                            <td style="border:1px solid white; padding:2px;">{{ $order->name }}</td>
                            <td style="border:1px solid white; padding:2px;">{{ $order->email }}</td>
                            <td style="border:1px solid white; padding:2px;">{{ $order->address }}</td>
                            <td style="border:1px solid white; padding:2px;">{{ $order->phone }}</td>
                            <td style="border:1px solid white; padding:2px;">{{ $order->product_title }}</td>
                            <td style="border:1px solid white; padding:2px;">{{ $order->quantity }}</td>
                            <td style="border:1px solid white; padding:2px;">{{ $order->price }}</td>
                            <td style="border:1px solid white; padding:2px;">{{ $order->payment_status }}</td>
                            <td style="border:1px solid white; padding:2px;">{{ $order->delivery_status }}</td>
                            <td style="border:1px solid white; padding:2px;"><img class="img_size"
                                    src="/product/{{ $order->image }}" alt=""></td>
                            <td style="border:1px solid white; padding:2px;">
                                @if ($order->delivery_status == 'processing')
                                    <a href="{{ url('delivered', $order->id) }}"
                                        onclick="return confirm('Are You Sure This Product is Delivered !!!')"
                                        class="btn btn-primary">Delivered</a>
                            </td>
                        @else
                            <p style="color: green;">Delivered</p>
                    @endif
                    <td style="border:1px solid white; padding:2px;">
                        <a class="btn btn-secondary" href="{{ url('print_pdf', $order->id) }}">Print PDF</a>
                    </td>

                    <td>
                        <a href="{{ url('send_email', $order->id) }}" class="btn btn-info">Send Email</a>
                    </td>
                    </tr>
                    @empty
                    <div>
                        <tr>
                            <td colspan="16">
                                No Data Found
                            </td>
                        </tr>
                    </div>
                        @endforelse
                    </table>
                </div>
            </div>
            <!-- container-scroller -->
            @include('admin.script')
    </body>

    </html>
