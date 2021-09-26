@extends('layout')
@section('wrapper')

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ecommerce-widget">
                <div class="row">
                    <!-- ============================================================== -->
                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Recent Orders</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Produit</th>
                                                <th class="border-0">Prix</th>
                                                <th class="border-0">Quantite</th>
                                                <th class="border-0">Devise</th>
                                                <th class="border-0">Date Commande</th>
                                                <th class="border-0">Client</th>
                                                <th class="border-0">E. Paiment</th>
                                                <th class="border-0">E. Livraison</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($commands as $command)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$command->produit->libelle}}</td>
                                                <td>$100.00</td>
                                                <td>5</td>
                                                <td>USD</td>
                                                <td>27-08-2018 01:22:12</td>
                                                <td>Donakd J. Trump</td>
                                                <td><span class="badge-dot badge-success mr-1"></span>Livrée </td>
                                                <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                            </tr>
                                        @endforeach
                                            <tr>
                                                <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Revenue total du</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">{{$dayEarnings}}</h1>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end customer acquistion  -->
                    <!-- ============================================================== -->
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
