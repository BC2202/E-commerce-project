<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    @include('admin.css')
    <style type="text/css">
        .center {
            margin: auto;
            width: 30%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .th_color th {}

        .font_size {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;

        }

        .img_size {
            height: 130px;
            width: 180px;
        }

        .th_color {
            background: skyblue;
        }

        .th_deg {
            padding: 20px;
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
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close"data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <h2 class="font_size">All Products</h2>
                <table class="center">
                    <tr class="th_color">
                        <th class="th_deg">Title</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Quantity</th>
                        <th class="th_deg">Catagory</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Discount</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Vedio</th>
                        <th class="th_deg">Edit</th>
                        <th class="th_deg">Delete</th>
                    </tr>
                    @foreach ($product as $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->catagory }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount_price }}</td>

                            <td>
                                @for ($i = 1; $i <= 24; $i++)
                                    @if ($product->{'image' . $i})
                                        <img src="{{ asset('product/' . $product->{'image' . $i}) }}"
                                            alt="Product Image {{ $i }}">
                                    @endif
                                @endfor
                            </td>
                           




                            <!-- Add this code inside the foreach loop where you want to display the video -->
                            <td>
                                @if ($product->vedio)
                                    <video width="320" height="240" controls>
                                        <source src="{{ asset('product/' . $product->vedio) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                            </td>


                            <td><a class="btn btn-primary" href="{{ url('update_product', $product->id) }}">Edit</a>
                            </td>
                            <td><a class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This')"
                                    href="{{ url('delete_product', $product->id) }}">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <!-- container-scroller -->
        @include('admin.script')
</body>

</html>
