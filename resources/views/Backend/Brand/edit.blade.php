@extends('Backend.layouts.app')
@section('content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Sửa Thương Hiệu 
        </header>
        <div class="panel-body">
            <div class="position-center">
                <form role="form" method="post">
                    @csrf
                    @foreach($brand as $value)
                    <div class="form-group">
                        <label>Tên thương hiệu</label></br>
                        <input type="text" name="brand_name" value="{{$value->brand_name}}" class="form-control form-control-line" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả</label></br>
                        <textarea name="brand_desc" class="form-control form-control-line" id="" cols="10" rows="10" style="width: 747px; height: 149px;">{{$value->brand_desc}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                    @endforeach
                </form>
            </div>

        </div>
    </section>

</div>
@endsection