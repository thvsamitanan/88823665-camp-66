@extends('layouts.default_with_menu')

@section('content')
<form action="{{ url('/product') }}" method="post">
    @csrf
    <div class="row mt-3">
        <div class="col-6">
            <label>Category Name</label>
            <input type="text" name="category_name" class="form-control">
        </div>
    </div>
    <button class="btn btn-primary mt-3" id="btn-add-product-list" type="button">+ เพิ่ม product</button>
    <div class="row mt-3" id="product-list">
        <div class="col-md-6">
            <label>Product Name <button type="button" class="btn btn-danger mt-3" id="btn-del-product-list">ลบ</button>
            </label>
            <input name="product_name[]" type="text" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-3">บันทึก</button>
</form>

<table class="table mt-5">
    <thead>
        <tr>
            <th>#</th>
            <th>Category Name</th>
            <th>Product List</th>
            <th>User Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $index => $cat)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $cat->name }}</td>
            <td>
                <ul>
                    @foreach ($product as $pro)
                    @if ($pro->category_id == $cat->id)
                    <li>{{ $pro->name }}</li>
                    @endif
                    @endforeach
                </ul>
            </td>
            <td>
                @foreach ($product as $pro)
                @foreach ($users as $us)
                @if ($pro->category_id == $cat->id && $pro->user_id == $us->id)
                <div>{{ $us->name }}</div>
                @endif
                @endforeach
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


@section('scripts')
<script>
       $(document).ready(function() {
            $('#btn-add-product-list').on('click', function() {
                $('#product-list').append(`
                    <div class="col-6">
                        <label>Product Name
                            <button type="button" class="btn btn-danger ml-3 mt-2 mb-2 btn-del-product-list">ลบ</button>
                        </label>
                        <input name="product_name[]" type="text" class="form-control" required>
                    </div>
                `);
            });

            $(document).on('click', '.btn-del-product-list', function() {
                $(this).parent().parent().remove();
            });
        });
</script>
@endsection
