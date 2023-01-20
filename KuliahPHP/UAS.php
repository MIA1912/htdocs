<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Array Bagian 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/dist/output.css">
</head>

<body>
    <div class="container max-w-full mx-auto md:py-24 px-6 ">
        <div class="max-w-sm mx-auto px-6">
            <div class="relative flex flex-wrap">
                <div class="w-full relative">
                    <div class="md:mt-6">
                        <div class="text-center font-bold font-chalk text-4xl bg-gradient-to-br from-green-700 to-zinc-700 bg-clip-text text-transparent">
                            Sistem Informasi Penjualan Rumah
                        </div>
                        <form class="mt-8" action="#" method="POST">
                            <div class="mx-auto max-w-lg">
                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600">Nomor Penjualan</span>
                                    <input type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="NoPenjualan" />
                                </div>
                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600">Nama Customer</span>
                                    <input type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="nama" />
                                </div>
                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600">Tipe Rumah</span>
                                    <select class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="tprmh">
                                        <option value="Standard">Standard</option>
                                        <option value="Komersil">Komersil</option>
                                        <option value="Family">Family</option>
                                        <option value="Ekonomi">Ekonomi</option>
                                        <option value="Elite">Elite</option>
                                    </select>
                                </div>
                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600">Jumlah unit yang ingin dibeli</span>
                                    <input type="number" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="jlh" />
                                </div>
                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600">Harga Satuan</span>
                                    <input type="number" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="hrg" />
                                </div>
                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600">Discount &#65130</span>
                                    <input type="number" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="diskon" />
                                </div>
                                <!-- <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600">Keterangan</span>
                                    <div class="flex items-center pl-4 text-md block px-3 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                        <input id="br" type="radio" value="Hadir" name="ket[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300" />
                                        <label for="br" class="py-3 ml-2 w-full text-md">Hadir</label>
                                    </div>
                                    <div class="flex items-center pl-4 text-md block px-3 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md">
                                        <input id="br-1" type="radio" value="Sakit" name="ket[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300" />
                                        <label for="br-1" class="py-3 ml-2 w-full text-md">Sakit</label>
                                    </div>
                                    <div class="flex items-center pl-4 text-md block px-3 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md">
                                        <input id="br-2" type="radio" value="Izin" name="ket[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300" />
                                        <label for="br-2" class="py-3 ml-2 w-full text-md">Izin</label>
                                    </div>
                                    <div class="flex items-center pl-4 text-md block px-3 rounded-lg w-full bg-white border-2 border-gray-300 shadow-md">
                                        <input id="br-3" type="radio" value="Mangkir" name="ket[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300" />
                                        <label for="br-3" class="py-3 ml-2 w-full text-md">Mangkir</label>
                                    </div>
                                </div> -->
                                <input type="submit" value="Tampil" class="mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block shadow-2xl hover:text-white hover:shadow-lime-700 hover:bg-green-900" />
                            </div>
                        </form>
                    </div>
                    <?php
                    $nopenjualan = $_POST['NoPenjualan'];
                    $nama = $_POST['nama'];
                    $tprmh = $_POST['tprmh'];
                    $jlh = $_POST['jlh'];
                    $hrg = $_POST['hrg'];
                    $diskon = $_POST['diskon'];

                    $totalharga = ($jlh * $hrg);
                    $jlhtotalsemua = $totalharga - ($totalharga * ($diskon / 100))
                    ?>
                    <div class="py-1">
                        <span class="px-1 text-sm text-gray-600">Nomor Jual</span>
                        <div type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="NoPenjualan" />
                        <?php echo $nopenjualan; ?>
                    </div>
                    <div class="py-1">
                        <span class="px-1 text-sm text-gray-600">Nama Customer</span>
                        <div type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="NoPenjualan" />
                        <?php echo $nama; ?>
                    </div>
                    <div class="py-1">
                        <span class="px-1 text-sm text-gray-600">Tipe Rumah</span>
                        <div type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="NoPenjualan" />
                        <?php echo $tprmh; ?>
                    </div>
                    <div class="py-1">
                        <span class="px-1 text-sm text-gray-600">Total Harga</span>
                        <div type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="NoPenjualan" />
                        <?php echo $totalharga; ?>
                    </div>
                    <div class="py-1">
                        <span class="px-1 text-sm text-gray-600">Diskon Anda</span>
                        <div type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="NoPenjualan" />
                        <?php echo $diskon . "&#65130"; ?>
                    </div>
                    <div class="py-1">
                        <span class="px-1 text-sm text-gray-600">Total yang harus anda bayar</span>
                        <div type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="NoPenjualan" />
                        <?php echo $jlhtotalsemua; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>