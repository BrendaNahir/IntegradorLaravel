@extends('layouts.app')
@extends('layouts.nav')
@if(auth()->check() && auth()->user()->roles->isNotEmpty())
    @if(auth()->user()->roles[0]->id == 1) <!-- ID 1 para cliente -->
        @include('menu.menuCliente')
    @elseif(auth()->user()->roles[0]->id == 3) <!-- ID 3 para admi -->
        @include('menu.menu')
    @endif
@endif
@section('content')


<div class="content-wrapper">
    <div class="row rowFixed">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title titleModule">LISTADO DE PRODUCTOS</h3> 
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="listProduct" class="table table-bordered table-striped">

                        <thead>
                            <tr>
                            <th style="width: 20%; text-align: center">Imagen</th>

                                <th style="width:30%; text-align:center">Description</th>
                                <th style="width:10%; text-align:center">Cost Price</th>
                                <th style="width:30%; text-align:center">Provider</th>
                                <th style="width:20%; text-align:center">Stock</th>
                                @if(auth()->user()->roles->isNotEmpty() && auth()->user()->roles[0]->id == 3)
                                    <th style="text-align:center">Actions</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr id='productId_{{$product->id}}'>
                                <td style="text-align: center">
    @if(!empty($product->product_image))
        <img src="{{ asset($product->product_image) }}" alt="Producto Imagen" style="max-width: 100px; max-height: 100px;">
    @else
        <p>No hay imagen</p>
    @endif
</td>

                                    <td>
                                        <span class="textFirstName"> {{ $product->description }}</span>
                                    </td>
                                    <td style=" text-align:center">
                                        <span class="textFirstName">{{ !empty($product->cost_price) ? $product->cost_price : '0.00' }}</span>
                                    </td>
                                    <td style=" text-align:center">
                                        <span class="textFirstName">
                                            @if (!empty($product->product_provider))
                                                @foreach ($product->product_provider as $key => $provider)
                                                    {{ $provider->first_name.', '.$provider->last_name }}
                                                    @if ($key < (count($product->product_provider) -1))
                                                        <br>
                                                    @endif
                                                @endforeach
                                            @else
                                                -
                                            @endif
                                        </span>
                                    </td>
                                    <td style=" text-align:center">
                                        <span class="textFirstName">{{ !empty($product->stock) ? $product->stock : '0.00' }}</span>
                                    </td>

                                    <td>
                                         @if(auth()->user()->roles->isNotEmpty() && auth()->user()->roles[0]->id == 3)
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn paddBto" data-user="{{$product}}" data-toggle="modal" data-target="#showUser-{{$product->id}}" data-title="View">
                                                <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="#4099D4" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </button>
                                            <form action="{{$product->id}}/edit" method="GET">
                                                <button type="submit" class="btn" data-title="Edit">
                                                    <i class="far fa-edit"></i>
                                                </button>
                                            </form>
                                            <button type="button" class="btn paddBto" onclick="deleteUser({{$product->id}})" data-title="Delete">
                                                <i class="fas fa-trash-alt" style="color:red"></i>
                                            </button>

                                        </div>
                                        @endif
                                    </td>
                                </tr>
                                @include('product/partials/actions')
                            @endforeach
                        </tbody>
                     
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>





@endsection

@section('scripts')

    <script src="{{ asset('js/modules/product/list.js') }}"></script>

@endsection
