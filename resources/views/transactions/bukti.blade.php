<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $transaction->no_nota }}</title>
    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            height: 29.7cm;
            width: 100%;
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-family: Arial;
        }

        header {
            width: 100%;
            padding: 10px 0;
            margin-bottom: 30px;
        }

        h1 {
            border-bottom: 1px solid #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: left;
            margin: 0 0 20px 0;
            background: url(dimension.png);
        }

        #identity {
            display: flex;
        }

        #project {
            float: left;
        }

        #project span {
            color: #5D6975;
            text-align: right;
            margin-right: 10px;
            font-size: 0.9em;
        }

        #company {
            text-align: right;
        }

        #project div,
        #company div {
            white-space: nowrap;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table th,
        table td {
            text-align: center;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #5D6975;
            white-space: nowrap;
            font-weight: bold;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {
            padding: 15px;
            text-align: right;
        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.qty {
            text-align: center;
        }

        table td.service,
        table td.unit,
        table td.qty,
        table td.total,
        table td.grand {
            font-size: 1.2em;
        }

        table td.grand {
            border-top: 1px solid #5D6975;
            font-weight: bold;
        }

        #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
        }

    </style>
</head>

<body>
    <header class="clearfix">
        <h1>BUKTI PEMESANAN</h1>
        <div id="identity">
            <div id="company" class="clearfix">
                <div>Grain Showroom</div>
                <div>Jalanin Aja Dulu,<br /> Kali Aja, Jodoh</div>
                <div>(+62) 858 8224 5529</div>
                <div><a href="mailto:grain-showroom@gmail.com">grain-showroom@gmail.com</a></div>
            </div>
            <div id="project">
                <div><span>NO. NOTA</span> {{ $transaction->no_nota }}</div>
                <div><span>PEMBELI</span> {{ $transaction->customer->nama }}</div>
                <div><span>ALAMAT</span> {{ $transaction->customer->alamat }}</div>
                <div><span>NO. TELP.</span> {{ $transaction->customer->no_hp }}</div>
                <div><span>EMAIL</span> <a href="mailto:{{ $transaction->customer->email }}">{{ $transaction->customer->email }}</a></div>
                <div><span>METODE PEMBAYARAN</span> {{ $transaction->jenis_pembayaran }}</div>
                <div><span>TANGGAL ORDER</span> {{ date("d F Y", strtotime($transaction->tanggal_pemesanan)) }}</div>
                <div><span>TANGGAL PENGIRIMAN</span> {{ date("d F Y", strtotime($transaction->tanggal_pengiriman)) }}</div>
            </div>
        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th class="service">NAMA MOBIL</th>
                    <th>HARGA</th>
                    <th>JUMLAH</th>
                    <th>TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="service">{{ $transaction->car->nama }}</td>
                    <td class="unit">Rp {{ number_format($transaction->car->harga, 0, ',', '.') }}</td>
                    <td class="qty">1</td>
                    <td class="total">Rp {{ number_format($transaction->car->harga, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td colspan="3" class="grand total">TOTAL</td>
                    <td class="grand total">Rp {{ number_format($transaction->car->harga, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        This is was created on a computer and is valid without the signature and seal.
    </footer>
</body>

</html>
