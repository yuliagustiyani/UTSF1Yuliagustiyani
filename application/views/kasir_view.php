<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>UTSF1YuliAgustiyani</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<h1>Program Kasir Sederhana</h1>
    <form action="<?php echo base_url('kasir/proses_pembayaran'); ?>" method="post">
	<label for="total">Nama Barang:</label>
        <input type="text" name="barang" required><br>

        <label for="total">Total Belanja:</label>
        <input type="text" name="total" required><br>

        <label for="bayar">Jumlah Bayar:</label>
        <input type="text" name="bayar" required><br>

        <button type="submit">Proses Pembayaran</button>
    </form>

    <?php if(isset($total) && isset($bayar) && isset($kembali)): ?>
        <h2>Struk Pembayaran:</h2>
		<p>Nama Barang: <?php echo $barang; ?></p>
        <p>Total Belanja: <?php echo $total; ?></p>
        <p>Jumlah Bayar: <?php echo $bayar; ?></p>
        <p>Kembali: <?php echo $kembali; ?></p>
    <?php endif; ?>
	
</body>
</html>
