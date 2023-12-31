@extends('admin.layouts.app')

@section('content')

    <div class="col-md-10 content">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td class="text-center"><strong>Id</strong></td>
                    <td class="text-center"><strong>Subcategory</strong></td>
                    <td class="text-center"><strong>Name</strong></td>
                    <td class="text-center"><strong>Thumbnail image</strong></td>
                    <td class="text-center"><strong>Description</strong></td>
                    <td class="text-center"><strong>Brans</strong></td>
                    <td class="text-center"><strong>Model</strong></td>
                    <td class="text-center"><strong>Made In</strong></td>
                    <td class="text-center"><strong>Year</strong></td>
                    <td class="text-center"><strong>Price</strong></td>
                    <td class="text-center"><strong>Quantity</strong></td>
                    <td class="text-center"><strong>Options</strong></td>
                </tr>
                </thead>

                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="text-center">{{$product->id}}</td>
                        <td class="text-center">{{$product->subcategory->name}}</td>
                        <td class="text-center">{{$product->name}}</td>
                        <td class="text-center"><img src="{{$product->path_to_thumbnail}}" width="50" height="50"></td>
                        <td class="text-center">{{$product->description}}</td>
                        <td class="text-center">{{$product->brand}}</td>
                        <td class="text-center">{{$product->model}}</td>
                        <td class="text-center">{{$product->made_in}}</td>
                        <td class="text-center">{{$product->year}}</td>
                        <td class="text-center">${{$product->price}}</td>
                        <td class="text-center">
                            {{-- Change quantity of products --}}
                                <form id="change_quantity_{{$product->id}}" name="change_quantity" method="POST" action="{{ url('/admin/products/'.$product->id.'/update/quantity') }}">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}

                                    <input id="quantity_{{$product['id']}}" type="text"
                                           class="text-center form-control quantity_number"
                                           name="quantity" value="{{$product->quantity}}" min="0" max="1000">
                                    <label for="quantity_{{$product['id']}}" class="control-label">Change quantity</label>
                                </form>
                        </td>
                        <td>
                            <form method="POST" action="/admin/products/{{$product->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <!--<a href="categories/product_id/edit" class="btn btn-primary">Edit</a>-->
                                <input type="submit" class="btn btn-danger delete-product" value="Delete Product">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{$products->links()}}
    </div>

    <script type="text/javascript">

        $(document).ready(function() {

            $('.navbar-toggle-sidebar').click(function () {
                $('.navbar-nav').toggleClass('slide-in');
                $('.side-body').toggleClass('body-slide-in');
            });

            $('.quantity_number').on('change', function() {

                var quantity_id = $(this).attr('id');
                var id = quantity_id.split('_')[1];

                // Submit form to change product quantity
                $('#change_quantity_' + id).submit();
            });
        });
    </script>

    <script>
        $('.delete-product').click(function(e){
            e.preventDefault()
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>

@endsection
