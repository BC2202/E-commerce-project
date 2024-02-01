<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .font_size {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .text_color {
            color: black;
            padding-bottom: 20px;
        }

        .div_design {
            padding-bottom: 15px;
        }

        label {
            display: inline-block;
            width: 200px;
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
                <div class="div_center">
                    <h1 class="font_size">Add Product</h1>
                    <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_design">
                            <label for="">Product Title :</label>
                            <input class="text_color" type="text" name="title" placeholder="Write a title"
                                required="">
                        </div>

                        <div class="div_design">
                            <label for="">Product Description :</label>
                            <input class="text_color" type="text" name="description"
                                placeholder="Write a description" required="">
                        </div>

                        <div class="div_design">
                            <label for="">Product Price :</label>
                            <input class="text_color" type="number" name="price" placeholder="Write a price"
                                required="">
                        </div>
                        <div class="div_design">
                            <label for="">Discount Price:</label>
                            <input class="text_color" type="text" name="dis_price" placeholder="Write a discount">
                        </div>
                        <div class="div_design">
                            <label for="">Product Quantity :</label>
                            <input class="text_color" type="number" min="1" name="quantity"
                                placeholder="Write a Quantity" required="">
                        </div>
                        <div class="div_design">
                            <label for="">Product Catagory:</label>
                            <select class="text_color" name="catagory" required="">
                                <option value="" selected="">Add a Catagory here</option>
                                @foreach ($catagory as $catagory)
                                    <option value="{{ $catagory->catagory_name }}">{{ $catagory->catagory_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="div_design">
                            @for ($i = 1; $i <= 24; $i++)
                                <div class="div_design">
                                    <label for="">
                                        Product Image {{ $i }} Here:
                                    </label>
                                    <input type="file" name="image{{ $i }}"
                                        @if ($i == 1) required @endif>
                                </div>
                            @endfor
                        </div>
                        {{-- <div class="div_design">
                            <label for="">Product Image 1 Here:</label>
                            <input type="file" name="image1">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 2 Here:</label>
                            <input type="file" name="image2">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 3 Here:</label>
                            <input type="file" name="image3">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 4 Here:</label>
                            <input type="file" name="image4">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 5 Here:</label>
                            <input type="file" name="image5">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 6 Here:</label>
                            <input type="file" name="image6">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 7 Here:</label>
                            <input type="file" name="image7">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 8 Here:</label>
                            <input type="file" name="image8">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 9 Here:</label>
                            <input type="file" name="image9">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 10 Here:</label>
                            <input type="file" name="image10">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 11 Here:</label>
                            <input type="file" name="image11">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 12 Here:</label>
                            <input type="file" name="image12">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 13 Here:</label>
                            <input type="file" name="image13">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 14 Here:</label>
                            <input type="file" name="image14">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 15 Here:</label>
                            <input type="file" name="image15">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 16 Here:</label>
                            <input type="file" name="image16">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 17 Here:</label>
                            <input type="file" name="image17">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 18 Here:</label>
                            <input type="file" name="image18">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 19 Here:</label>
                            <input type="file" name="image19">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 20 Here:</label>
                            <input type="file" name="image20">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 21 Here:</label>
                            <input type="file" name="image21">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 22 Here:</label>
                            <input type="file" name="image22">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 23 Here:</label>
                            <input type="file" name="image23">
                        </div>
                        <div class="div_design">
                            <label for="">Product Image 24 Here:</label>
                            <input type="file" name="image24">
                        </div> --}}
                        <div class="div_design">
                            <label for="">Product vedio Here:</label>
                            <input type="file" name="vedio">
                        </div>

                        <div>
                            <input type="submit" value="Add Product" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- container-scroller -->
        @include('admin.script')
</body>

</html>
