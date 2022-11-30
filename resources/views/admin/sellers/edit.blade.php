@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Продавцы</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Продавцы</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Редактирование продавца "{{ $seller->fine_name }}"</h3>
                    </div>
                    <form method="post" action="{{ route('sellers.update', ['seller' => $seller->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="InputText1">Wildberries Id <span style="color: #dc3545;">*</span></label>
                                <input type="text" name="wb_id" class="form-control @error('wb_id') is-invalid @enderror" id="InputText1" value="{{ $seller->wb_id }}" placeholder="Введите WB Id">
                            </div>
                            <div class="form-group">
                                <label for="InputText2">Экранное имя <span style="color: #dc3545;">*</span></label>
                                <input type="text" name="fine_name" class="form-control @error('fine_name') is-invalid @enderror" id="InputText2" value="{{ $seller->fine_name }}" placeholder="Введите экранное имя">
                            </div>
                            <div class="form-group">
                                <label for="InputText3">Системное имя</label>
                                <input type="text" name="name" class="form-control" id="InputText3" value="{{ $seller->name }}" placeholder="Введите системное имя">
                            </div>
                            <div class="form-group">
                                <label for="InputText4">Торговая марка</label>
                                <input type="text" name="trademark" class="form-control" id="InputText4" value="{{ $seller->trademark }}" placeholder="Введите торговую марку">
                            </div>
                            <div class="form-group">
                                <label for="InputText5">ОГРН</label>
                                <input type="text" name="ogrn" class="form-control" id="InputText5" value="{{ $seller->ogrn }}" placeholder="Введите ОГРН">
                            </div>
                            <div class="form-group">
                                <label for="InputText6">Фактический адрес</label>
                                <input type="text" name="legal_address" class="form-control" id="InputText6" value="{{ $seller->legal_address }}" placeholder="Введите адрес">
                            </div>
                            <div class="form-group">
                                <label for="InputText7">Колличество товаров <span style="color: #dc3545;">*</span></label>
                                <input type="text" name="total" class="form-control @error('total') is-invalid @enderror" id="InputText7" value="{{ $seller->total }}" placeholder="Введите колличество">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
