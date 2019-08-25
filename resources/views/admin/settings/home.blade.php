@extends('admin.layouts.app')

@section('content')
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

    <div class="col-md-10 col-lg-10 content">
        <form method="POST" action="/admin/settings/home/{{$setting->id}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <!-- Header -->
            <div class="form-row">
              <div class="form-group col-md-6">
                  <h3> Header </h3>
              </div>
              <div class="form-group col-md-6">
                  <h3> Max File Size: <span style="color: red;">2048</span> KB </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> home_header_image.png</label>
                    <input type="file" class="form-control" name="home_header_image">
                </div>
                <div class="form-group col-md-8">
                    <img src="{{ $setting->home_header_image }}" width="60" height="60">
                </div>
            </div>
            <!-- Slider -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Slider </h3>
              </div>
            </div>
            <!-- Slider 1 -->
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputPassword4">home_slider1_text1</label>
                    <input type="text" class="form-control" name="home_slider1_text1" value="{!!$setting->home_slider1_text1!!}">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputPassword4">home_slider1_text2</label>
                    <input type="text" class="form-control" name="home_slider1_text2" value="{!!$setting->home_slider1_text2!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> home_slider1_image.png</label>
                    <input type="file" class="form-control" name="home_slider1_image">
                </div>
                <div class="form-group col-md-3">
                    <img src="{{ asset('images/settings/home/home_slider1_image.png') }}" width="60" height="60">
                </div>
            </div>
            <!-- Slider 2 -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">home_slider2_text</label>
                    <input type="text" class="form-control" name="home_slider2_text" value="{!!$setting->home_slider2_text!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> home_slider2_image.png</label>
                    <input type="file" class="form-control" name="home_slider2_image">
                </div>
                <div class="form-group col-md-3">
                    <img src="{{ asset('images/settings/home/home_slider2_image.png') }}" width="60" height="60">
                </div>
            </div>
            <!-- Slider 3 -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">home_slider3_text</label>
                    <input type="text" class="form-control" name="home_slider3_text" value="{!!$setting->home_slider3_text!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> home_slider3_image.png</label>
                    <input type="file" class="form-control" name="home_slider3_image">
                </div>
                <div class="form-group col-md-3">
                    <img src="{{ asset('images/settings/home/home_slider3_image.png') }}" width="60" height="60">
                </div>
            </div>
            <!-- Slider 4 -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">home_slider4_text</label>
                    <input type="text" class="form-control" name="home_slider4_text" value="{!!$setting->home_slider4_text!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> home_slider4_image.png</label>
                    <input type="file" class="form-control" name="home_slider4_image">
                </div>
                <div class="form-group col-md-3">
                    <img src="{{ asset('images/settings/home/home_slider4_image.png') }}" width="60" height="60">
                </div>
            </div>
            <!-- Categories -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Categories </h3>
              </div>
            </div>

            <div class="form-row row justify-content-start" style="padding-left: 15px">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">subcategory_id_1</label>
                    <select name="subcategory_id_1" class="form-control" required>
                        <option value="category.{{$setting->subcategory_id_1}}">No select...</option>
                        @foreach($categories as $category)
                                <option value="category.{{$category->id}}">{{$category->name}}</option>
                            @foreach($category->subcategories as $subcategory)
                                <option value="subcategory.{{$subcategory->id}}">->{{$subcategory->name}}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">subcategory_id_2</label>
                    <select name="subcategory_id_2" class="form-control" required>
                        <option value="category.{{$setting->subcategory_id_2}}">No select...</option>
                        @foreach($categories as $category)
                                <option value="category.{{$category->id}}">{{$category->name}}</option>
                            @foreach($category->subcategories as $subcategory)
                                <option value="subcategory.{{$subcategory->id}}">->{{$subcategory->name}}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="form-row row justify-content-start" style="padding-left: 15px">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">subcategory_id_3</label>
                    <select name="subcategory_id_3" class="form-control" required>
                        <option value="category.{{$setting->subcategory_id_3}}">No select...</option>
                        @foreach($categories as $category)
                                <option value="category.{{$category->id}}">{{$category->name}}</option>
                            @foreach($category->subcategories as $subcategory)
                                <option value="subcategory.{{$subcategory->id}}">->{{$subcategory->name}}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">subcategory_id_4</label>
                    <select name="subcategory_id_4" class="form-control" required>
                        <option value="category.{{$setting->subcategory_id_4}}">No select...</option>
                        @foreach($categories as $category)
                                <option value="category.{{$category->id}}">{{$category->name}}</option>
                            @foreach($category->subcategories as $subcategory)
                                <option value="subcategory.{{$subcategory->id}}">->{{$subcategory->name}}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">home_categories_text</label>
                    <textarea id="home_categories_text" type="text" class="form-control" name="home_categories_text">{!!$setting->home_categories_text!!}</textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> home_categories_image.png</label>
                    <input type="file" class="form-control" name="home_categories_image">
                </div>
                <div class="form-group col-md-3">
                    <img src="{{ asset('images/settings/home/home_categories_image.png') }}" width="60" height="60">
                </div>
            </div>
            <script type="text/javascript">
                $('#home_categories_text').summernote({
                    tabsize: 2,
                    height: 100
                });
            </script>
            <!-- Publicity 1 -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Publicity 1 </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> home_publicity1_image.png</label>
                    <input type="file" class="form-control" name="home_publicity1_image">
                </div>
                <div class="form-group col-md-8">
                    <img src="{{ $setting->home_publicity1_image }}" width="60" height="60">
                </div>
            </div>
            <!-- Events -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Events </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> home_events_image.png</label>
                    <input type="file" class="form-control" name="home_events_image">
                </div>
                <div class="form-group col-md-8">
                    <img src="{{ $setting->home_events_image }}" width="60" height="60">
                </div>
            </div>
            <!-- Video -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Video </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">home_video</label>
                    <input type="text" class="form-control" name="home_video" value="{!!$setting->home_video!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> home_video_image.png</label>
                    <input type="file" class="form-control" name="home_video_image">
                </div>
                <div class="form-group col-md-4">
                    <img src="{{ $setting->home_video_image }}" width="60" height="60">
                </div>
            </div>
            <!-- Publicity 2 -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Publicity 2 </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">home_publicity2_text</label>
                    <textarea id="home_publicity2_text" type="text" class="form-control" name="home_publicity2_text">{!!$setting->home_publicity2_text!!}</textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> home_publicity2_image.png</label>
                    <input type="file" class="form-control" name="home_publicity2_image">
                </div>
                <div class="form-group col-md-4">
                    <img src="{{ $setting->home_publicity2_image }}" width="60" height="60">
                </div>
            </div>
            <script type="text/javascript">
                $('#home_publicity2_text').summernote({
                    tabsize: 2,
                    height: 100
                });
            </script>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
