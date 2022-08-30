@extends('Backend.layouts.app')
@section('content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm Sản Phẩm
        </header>
        <div class="panel-body">
            <div class="position-center">
                <form role="form" method="Post">
                    @csrf
                    <div class="form-group">
                        <label>Tên Sản Phẩm</label></br>
                        <input type="text" name="category_name" class="form-control form-control-line" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả danh mục</label></br>
                        <textarea name="category_desc" class="form-control form-control-line" id="" cols="10" rows="10" style="width: 747px; height: 149px;"></textarea>
                    </div>
                    <div class="form-group">
                        <select name="category_status" class="form-control form-control-line">
                            <option value="0">Hiện</option>
                            <option value="1">Ẩn</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info">Create</button>
                </form>
            </div>

        </div>
    </section>

</div>
@endsection