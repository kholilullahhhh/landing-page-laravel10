<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codepolitan Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card {
            border-radius: 10px;
        }
        .card-header {
            background-color: #343a40;
            color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        #checkout-button {
            background-color: #28a745;
            color: #fff;
            width: 100%;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }
        #checkout-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h2>Codepolitan Payment</h2>
                <hr>
                <h4>Informasi Pelanggan</h4>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Contoh: john@gmail.com">
                </div>
                <h4>Nama dan Nomor Whatsapp</h4>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" placeholder="Contoh: John Doe">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Whatsapp</label>
                    <input type="text" class="form-control" id="phone" placeholder="Contoh: 085720xxxxxx">
                </div>
                <p class="mt-3">
                    <strong>Note:</strong> Pastikan email dan nomor whatsapp yang kamu masukkan adalah benar. Sebab 
                    kami akan gunakan data tersebut untuk mengirimkan voucher aktivasi paket belajar
                    kamu atau melakukan konfirmasi terkait pembayaran.
                </p>
                <p>
                    Khusus kamu yang melakukan pembayaran Bootcamp, kaos, merchandise, tidak perlu
                    melakukan aktivasi voucher, kami akan langsung memproses pesanan kamu.
                </p>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Roadmap FrontEnd ReactJS</h4>
                        <p>Tipe: Path</p>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="coupon" class="form-label">Kode Kupon</label>
                            <input type="text" class="form-control" id="coupon" readonly value="REACTJS">
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-2">
                            <p>Harga</p>
                            <p>Rp. 1,400,000</p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p>Diskon</p>
                            <p>Rp. 0</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <p><strong>Total</strong></p>
                            <p><strong>Rp. 1,400,000</strong></p>
                        </div>
                        <button class="btn btn-success btn-lg" id="checkout-button">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
