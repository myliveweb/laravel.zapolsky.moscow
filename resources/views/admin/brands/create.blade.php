@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Бренды</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Бренды</li>
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
                        <h3 class="card-title">Добавление нового бренда</h3>
                    </div>
                    <form method="post" action="{{ route('brands.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="InputText1">Wildberries Id <span style="color: #dc3545;">*</span></label>
                                <input type="text" name="wb_id" class="form-control @error('wb_id') is-invalid @enderror" id="InputText1" value="{{ old('wb_id') }}" placeholder="Введите WB Id">
                            </div>
                            <div class="form-group">
                                <label for="InputText2">Название <span style="color: #dc3545;">*</span></label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="InputText2" value="{{ old('name') }}" placeholder="Введите название">
                            </div>
                            <div class="form-group">
                                <label for="InputText3">URL <span style="color: #dc3545;">*</span></label>
                                <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" id="InputText3" value="{{ old('url') }}" placeholder="Введите URI адрес">
                            </div>
                            <div class="form-group">
                                <label for="InputText4">Первая буква <span style="color: #dc3545;">*</span></label>
                                <input type="text" name="letter" class="form-control @error('letter') is-invalid @enderror" id="InputText4" value="{{ old('letter') }}" placeholder="Введите букву">
                            </div>
                            <div class="form-group">
                                <label for="InputText5">Site Id</label>
                                <input type="text" name="site_id" class="form-control @error('site_id') is-invalid @enderror" id="InputText5" value="{{ old('site_id') }}" placeholder="Введите Site Id">
                            </div>
                            <div class="form-group">
                                <label for="InputText7">Колличество товаров <span style="color: #dc3545;">*</span></label>
                                <input type="text" name="total" class="form-control @error('total') is-invalid @enderror" id="InputText7" value="{{ old('total') }}" placeholder="Введите колличество">
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
