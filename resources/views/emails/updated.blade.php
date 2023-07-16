
<!DOCTYPE html>
<html>
<head>
    <title>Order Updated</title>

</head>
<body>
    <div class="container">
       

<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">Horizontal Form Materi</h6>
        <hr/>
        <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">@yield('title') Registration</h5>
                        
                    </div>
                    <hr/>

           

                    
                    <div class="row mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div id="invoice">
                                    <div class="toolbar hidden-print">
                                        <div class="text-end">
                                            <button type="button" class="btn btn-dark"><i class="fa fa-print"></i> Status Pesanan</button>
                                            <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> @if ($company->status == '0')
                                                Pengambilan
                                            @elseif ($company->status == '1')
                                                Proses
                                            @elseif ($company->status == '2')
                                                Pengiriman
                                            @elseif ($company->status == '3')
                                                Selesai
                                            @elseif ($company->status == '4')
                                                Gagal
                                            @endif</button>
                                        </div>
                                        <hr/>
                                    </div>
                                    <div class="invoice overflow-auto">
                                        <div style="min-width: 600px">
                                           
                                            <main>
                                                <div class="row contacts">
                                                    <div class="col invoice-to">
                                                        <div class="text-gray-light">INVOICE TO:</div>
                                                        <h2 class="to">{{ $company->user->name }}</h2>
                                                        <div class="address">NO TLP{{ $company->user->phone }}</div>
                                                        <div class="email"><a href="{{ $company->user->email }}">{{ $company->user->email }}</a>
                                                        </div>
                                                    </div>
                                                    <div class="col invoice-details">
                                                        <h1 class="invoice-id">INVOICE {{ $company->id }}</h1>
                                                        <div class="date">Date of Invoice: {{ $company->created_at }}</div>
                                                    </div>
                                                </div>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th class="text-left">DESCRIPTION</th>
                                                            <th class="text-right">Layanan</th>
                                                            <th class="text-right">Delivery</th>
                                                            <th class="text-right">Total Layanan</th>
                                                        </tr>
                                                    </thead>
                                                    {{-- <tbody>
                                                        @foreach ($transaksi as $item)
                                                        <tr>
                                                            <td class="no">{{ $item->id }}</td>
                                                            <td class="text-left">
                                                                <h3>{{ $item->layanan->nama_layanan }}</h3></td>
                                                            <td class="unit">Rp.{{ $item->layanan->harga }}</td>
                                                            <td class="qty">Rp.{{ $item->layanan->harga_deivery }}</td>
                                                            <td class="total">Rp.{{ $item->jumlah }}</td>
                                                        </tr>
                                                        @endforeach
                                                       
                                                    </tbody> --}}
                                                    <tfoot>
                                                       
                                                        <tr>
                                                            <td colspan="2"></td>
                                                            <td colspan="2">Layanan TOTAL</td>
                                                            <td>{{ $company->jumlah }}</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                              
                                                <div class="notices">
                                                    <div>NOTICE / Catatan Pesanan:</div>
                                                    {{-- <div class="notice">@foreach ($transaksi as $item)
                                                            {{ $item->deskripsi }}
                                                         @endforeach --}}
                                                </div>
                                                </div>

                                                @if (!empty($company->id_kurir))
                                                <div class="notices mt-5">
                                                     
                                                    <div>NOTICE / Kurir :</div>
                                                  
                                                        <div class="notice">
                                                            {{-- @foreach ($transaksi as $item)
                                                                {{ $item->deskripsi }}
                                                            @endforeach --}}
                                                        </div>
                                                </div>
                                                @endif

                                            </main>
                                            
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</body>
</html>
