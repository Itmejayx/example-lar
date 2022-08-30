@extends('Backend.layouts.app')
@section('content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Sửa Danh Mục 
        </header>
        <div class="panel-body">
            <div class="position-center">
                <form role="form" method="post">
                    @csrf
                    @foreach($category as $value)
                    <div class="form-group">
                        <label>Tên Danh Mục</label></br>
                        <input type="text" name="category_name" value="{{$value->category_name}}" class="form-control form-control-line" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả danh mục</label></br>
                        <textarea name="category_desc" class="form-control form-control-line" id="" cols="10" rows="10" style="width: 747px; height: 149px;">{{$value->category_desc}}</textarea>
                    </div>
                    <div class="form-group">
                        <select name="category_status"class="form-control form-control-line">
                            <option value="0">Hiện</option>
                            <option value="1">Ẩn</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                    @endforeach
                </form>
            </div>

        </div>
    </section>

</div>
@endsection