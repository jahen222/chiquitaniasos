@extends('admin.layouts.app')

@section('content')

    <div class="col-md-10 content">
        <form method="POST" action="/admin/products" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                </div><!--
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Image</label>
                    <input type="file" class="form-control" name="image" required>
                </div>-->
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Subcategory</label>
                    <select name="subcategory_id" class="form-control" required>
                        @foreach($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Price $</label>
                    <input type="number" class="form-control" placeholder="Price $" name="price" min="0" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Quantity</label>
                    <input type="number" class="form-control" placeholder="Quantity" name="quantity" min="0" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Brand</label>
                    <input type="text" class="form-control" placeholder="Brand" name="brand" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Model</label>
                    <input type="text" class="form-control" placeholder="Model" name="model" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Made In</label>
                    <input type="text" class="form-control" placeholder="Made In" name="made_in" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Year</label>
                    <input type="number" class="form-control" placeholder="Year" name="year" min="0" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Description</label>
                    <textarea id="summernote" type="textarea" class="form-control" name="description"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPassword4">Principal image</label>
                    <input type="file" class="form-control" name="image" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Galery:</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Galery image 1</label>
                    <input type="file" class="form-control" name="galery_1">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Galery image 2</label>
                    <input type="file" class="form-control" name="galery_2">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Galery image 3</label>
                    <input type="file" class="form-control" name="galery_3">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Galery image 4</label>
                    <input type="file" class="form-control" name="galery_4">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Extra fields:</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Extra name field 1</label>
                    <input type="text" class="form-control" name="e_n_1">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Extra description field 1</label>
                    <input type="text" class="form-control" name="e_d_1">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Extra name field 2</label>
                    <input type="text" class="form-control" name="e_n_2">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Extra description field 2</label>
                    <input type="text" class="form-control" name="e_d_2">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Extra name field 3</label>
                    <input type="text" class="form-control" name="e_n_3">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Extra description field 3</label>
                    <input type="text" class="form-control" name="e_d_3">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Extra name field 4</label>
                    <input type="text" class="form-control" name="e_n_4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Extra description field 4</label>
                    <input type="text" class="form-control" name="e_d_4">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Extra name field 5</label>
                    <input type="text" class="form-control" name="e_n_5">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Extra description field 5</label>
                    <input type="text" class="form-control" name="e_d_5">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>

@endsection
