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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Список активных продавцов</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Поиск">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <a href="{{ route('sellers.create') }}" class="btn btn-primary" style="margin: 1.25rem;">Добавить продавца</a>
                        @if (count($sellers) > 0)
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>WB ID</th>
                                <th>Название</th>
                                <th>Бренд</th>
                                <th>Товаров</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($sellers as $seller)
                                <tr class="item">
                                    <td>{{ $seller->id }}</td>
                                    <td><a href="https://www.wildberries.ru/seller/{{ $seller->wb_id }}" target="_blank">{{ $seller->wb_id }}</a></td>
                                    <td>{{ $seller->fine_name }}</td>
                                    <td>{{ $seller->trademark }}</td>
                                    <td>{{ $seller->total }}</td>
                                    <td>
                                        <div style="display: flex; flex-direction: row; flex-wrap: nowrap; gap: 5px;">
                                            <div>
                                                <a href="{{ route('sellers.edit', ['seller' => $seller->id]) }}" style="color: #28a745;"><i class="fas fa-edit"></i></a>
                                            </div>
                                            <div>
                                                <form method="post" action="{{ route('sellers.destroy', ['seller' => $seller->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="border: none; background-color: transparent;" onclick="return confirm('Подтвердите удаление')">
                                                        <span style="font-size: 2rem; color: #dc3545; line-height: 1rem; position: relative; top: 2px;">×</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                            <div style="margin: 0 0 1.5rem 1.5rem;">Продавцы отсутствуют..</div>
                        @endif
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection

