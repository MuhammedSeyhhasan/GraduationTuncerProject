@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">لوحة التحكم</h1>

    <div class="row">
        <!-- قسم المنتجات -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3>{{ $productsCount }}</h3>
                    <p>عدد المنتجات</p>
                </div>
            </div>
        </div>

        <!-- قسم المستخدمين -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3>{{ $usersCount }}</h3>
                    <p>عدد المستخدمين</p>
                </div>
            </div>
        </div>

        <!-- قسم إضافي -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3>...</h3>
                    <p>بيانات إضافية</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
