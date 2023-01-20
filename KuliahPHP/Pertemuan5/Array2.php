<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Array Bagian 2</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="container max-w-full mx-auto md:py-24 px-6">
    <div class="max-w-sm mx-auto px-6">
      <div class="relative flex flex-wrap">
        <div class="w-full relative">
          <div class="md:mt-6">
            <div class="text-center font-semibold text-black ">
              Tugas Array 2
            </div>
            <form class="mt-8">
              <div class="mx-auto max-w-lg">
                <div class="py-1">
                  <span class="px-1 text-sm text-gray-600">Nama</span>
                  <input type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="nama" />
                </div>
                <div class="py-1">
                  <span class="px-1 text-sm text-gray-600">Bagian</span>
                  <input type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" />
                </div>
                <div class="py-1">
                  <span class="px-1 text-sm text-gray-600">Bagian</span>
                  <div class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                    <?php
                    $d = getdate();
                    $tg = $d['mday'];
                    $bl = $d['month'];
                    $th = $d['year'];

                    echo "$tg, $bl $th";
                    
                    ?>
                  </div>
                </div>
                <div class="py-1">
                  <span class="px-1 text-sm text-gray-600">Pilih Hari</span>
                  <select name="hari" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                    <option value="Minggu">Minggu</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jum'at">Jum'at</option>
                    <option value="Sabtu">Sabtu</option>
                  </select>
                </div>
                <div class="py-1">
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
                </div>
                <input type="submit" value="Enter!" class="mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:text-white hover:bg-black" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>