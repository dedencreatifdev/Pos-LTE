<div>
    {{-- Info Box --}}
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-table"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Produk</span>
                    <span class="info-box-number">
                        {{ $produk_total }}
                        <small>Item</small>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="mb-3 info-box">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                </div>
            </div>
        </div>
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="mb-3 info-box">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="mb-3 info-box">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">New Members</span>
                    <span class="info-box-number">2,000</span>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="p-0 card-body">

                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                class="far fa-square"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-reply"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm">
                            <i class="fas fa-sync-alt"></i>
                        </button>
                        <div class="float-right">

                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Cari Produk...">
                                <div class="input-group-append">
                                    <div class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="table table-responsive">
    <table class="table table-sm table-striped table-hover">
        <thead class="bg-primary">
            <tr>
                <th>#</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Kategori</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Hpp</th>
                <th>Alert</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produk_list as $item)
                <tr>
                    <td>1</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->unit }}</td>
                    <td>{{ $item->category_id }}</td>
                    <td>{{ $item->brand }}</td>
                    <td class="text-right">{{ $item->price }}</td>
                    <td>{{ $item->unit }}</td>
                    <td class="text-right">{{ $item->price }}</td>
                    <td>{{ $item->alert_quantity }}</td>
                    <td class="w-10" style="width: 20px">
                        <div class="dropdown">
                            <a class="" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <i class="far fa-file"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <span class="dropdown-item dropdown-header">15 Notifications</span>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="mr-2 fas fa-envelope"></i> 4 new messages
                                    <span class="float-right text-sm text-muted">3 mins</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="mr-2 fas fa-users"></i> 8 friend requests
                                    <span class="float-right text-sm text-muted">12 hours</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="mr-2 fas fa-file"></i> 3 new reports
                                    <span class="float-right text-sm text-muted">2 days</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item dropdown-footer">See All
                                    Notifications</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
                </div>
            </div>
        </div>

    </div>
</div>
