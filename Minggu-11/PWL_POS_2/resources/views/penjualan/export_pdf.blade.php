<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 6px 20px 5px 20px;
            line-height: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 4px 3px;
        }

        th {
            text-align: left;
        }

        .d-block {
            display: block;
        }

        img {
            width: auto;
            height: 80px;
            max-width: 150px;
            max-height: 150px;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .p-1 {
            padding: 5px 1px 5px 1px;
        }

        .font-10 {
            font-size: 10pt;
        }

        .font-11 {
            font-size: 11pt;
        }

        .font-12 {
            font-size: 12pt;
        }

        .font-13 {
            font-size: 13pt;
        }

        .border-bottom-header {
            border-bottom: 1px solid;
        }

        .border-all,
        .border-all th,
        .border-all td {
            border: 1px solid;
        }

        .bg {
            background-color: pink;
        }
    </style>
</head>

<body>
    <table class="border-bottom-header">
        <tr>
            <td width="15%" class="text-center"><img src="{{ public_path('polinema-bw.png') }}"></td>
            <td width="85%">
                <span class="text-center d-block font-11 font-bold mb-1">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN
                    TEKNOLOGI</span>
                <span class="text-center d-block font-13 font-bold mb-1">POLITEKNIK NEGERI MALANG</span>
                <span class="text-center d-block font-10">Jl. Soekarno-Hatta No. 9 Malang 65141</span>
                <span class="text-center d-block font-10">Telepon (0341) 404424 Pes. 101-105, 0341-404420, Fax. (0341)
                    404420</span>
                <span class="text-center d-block font-10">Laman: www.polinema.ac.id</span>
            </td>
        </tr>
    </table>

    <h3 class="text-center">LAPORAN DATA PENJUALAN</h4>
        <table class="border-all font-11">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Kode Penjualan</th>
                    <th>Penginput</th>
                    <th>Nama Pembeli</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penjualan as $p)
                                <tr class="bg">
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $p->penjualan_kode }}</td>
                                    <td>{{ $p->user->nama }} ({{ $p->user->level->level_nama }})</td>
                                    <td>{{ $p->pembeli }}</td>
                                    <td>{{ $p->penjualan_tanggal }}</td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <table class="border-all font-10" style="width: 100%; margin-top: 5px;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th>Nama Barang</th>
                                                    <th>Harga</th>
                                                    <th>Jumlah</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $filteredDetail = $detail->where('penjualan_id', $p->penjualan_id);
                                                    $total = 0; 
                                                @endphp
                                                @foreach ($filteredDetail as $d)
                                                                        @if ($d->penjualan_id == $p->penjualan_id)
                                                                                                @php
                                                                                                    $subtotal = $d->harga * $d->jumlah;
                                                                                                    $total += $subtotal;
                                                                                                @endphp
                                                                                                <tr>
                                                                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                                                                    <td>{{ $d->barang->barang_nama }}</td>
                                                                                                    <td>Rp.{{ number_format($d->harga, 0, ',', '.') }}</td>
                                                                                                    <td>{{ $d->jumlah }}</td>
                                                                                                    <td>Rp.{{ number_format($subtotal, 0, ',', '.') }}</td>
                                                                                                </tr>
                                                                        @endif
                                                @endforeach
                                                <tr>
                                                    <td colspan="4" class="text-right"><strong>Total:</strong></td>
                                                    <td><strong>Rp.{{ number_format($total, 0, ',', '.') }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="padding-top: 10px;"></td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </td>
                                </tr>
                @endforeach
            </tbody>
        </table>

</body>

</html>