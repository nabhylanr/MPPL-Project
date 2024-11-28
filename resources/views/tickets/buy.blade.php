<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Tickets</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100">
    @include('navbar')

    <div class="max-w-screen-xl mx-auto px-4 py-12 pt-32 gap-8">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Detail Pemesanan</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="col-span-2 bg-white p-8 rounded-lg shadow-md h-full">
                <div class="flex items-center mb-6">
                    <img src="img/poster.jpeg" alt="Schematics REEVA 2024" class="w-24 h-24 rounded-lg object-cover mr-4">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800">Schematics REEVA 2024</h2>
                        <p class="text-sm text-gray-600">17 November 2024</p>
                        <p class="text-sm text-gray-600">08:00 - 21:00 WIB</p>
                        <p class="text-sm text-gray-600">ITS Robotics Center, Jawa Timur</p>
                    </div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <p class="text-sm font-medium text-gray-800 mb-1">Jenis Tiket</p>
                    <p class="text-sm text-gray-600">Schematics REEVA 2024 - 17 November 2024</p>
                    <p class="text-sm text-gray-600">Rp26.000 x ticketQuantity</p>
                    <div class="flex items-center mt-2">
                        <button onclick="updateQuantity(-1)" class="px-1 py-0.5 text-white bg-red-500 rounded-sm text-xs hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-300">-</button>
                        <span id="ticketQuantity" class="mx-4 text-gray-800">1</span>
                        <button onclick="updateQuantity(1)" class="px-1 py-0.5 text-white bg-blue-500 rounded-sm text-xs hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">+</button>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-lg h-full">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Detail Harga</h3>
                <div class="mb-4">
                    <div class="flex justify-between text-gray-600">
                        <span>Total Harga Tiket</span>
                        <span id="totalTicketPrice">Rp26.000</span>
                    </div>
                    <div class="flex justify-between text-gray-600">
                        <span>Biaya Platform</span>
                        <span>Rp0</span>
                    </div>
                    <hr class="my-2">
                    <div class="flex justify-between font-bold text-gray-800">
                        <span>Total Bayar</span>
                        <span>Rp26.000</span>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="flex items-center text-sm text-gray-600">
                        <input type="checkbox" class="mr-2 border-gray-300 rounded">
                        Saya setuju dengan <a href="/tickets" class="text-blue-600 underline ml-1">Syarat & Ketentuan</a>.
                    </label>
                </div>
                <button class="w-full text-white bg-blue-700 hover:bg-blue-800 py-2 rounded-lg font-medium focus:outline-none focus:ring focus:ring-blue-300">
                    Bayar Tiket
                </button>
            </div>
        </div>

        <h1 class="text-2xl font-semibold text-gray-800 mt-10 mb-4">Detail Pemesan</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-md h-full col-span-2">
                <form>
                    <div class="mb-6">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                        <p class="text-xs text-gray-500 mb-2">Gunakan nama yang tertera di KTP/Paspor.</p>
                        <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                    </div>
                    <div class="mb-6">
                        <label for="no" class="block mb-2 text-sm font-medium text-gray-900">Nomor Ponsel</label>
                        <p class="text-xs text-gray-500 mb-2">Kirim notifikasi pesanan via WhatsApp.</p>
                        <input type="text" id="no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <p class="text-xs text-gray-500 mb-2">E-tiket akan dikirim ke email kamu.</p>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                    </div>
                    <div class="mb-6">
                        <label for="tgllahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <input type="date" id="tgllahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                    </div>
                    <div class="mb-6">
                        <label for="jeniskelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                        <select id="jeniskelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

        <h1 class="mt-10 text-2xl font-semibold text-gray-800 mb-4">Metode Pembayaran</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-md h-full col-span-2">
            <div class="mb-4">
                <button type="button" 
                    class="flex justify-between items-center w-full px-4 py-3 text-sm font-medium text-left text-gray-900 bg-gray-100 border border-gray-300 rounded-lg focus:ring-4 focus:ring-blue-300 focus:outline-none" 
                    onclick="toggleDropdown('ewallet')">
                    E Wallet
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M6 9l6 6 6-6"></path>
                    </svg>
                </button>
                <div id="ewallet" class="hidden mt-2 pl-4">
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Gopay</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">LinkAja</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ShopeePay QRIS</a></li>
                    </ul>
                </div>
            </div>
            <div class="mb-4">
                <button type="button" 
                    class="flex justify-between items-center w-full px-4 py-3 text-sm font-medium text-left text-gray-900 bg-gray-100 border border-gray-300 rounded-lg focus:ring-4 focus:ring-blue-300 focus:outline-none" 
                    onclick="toggleDropdown('virtualaccount')">
                    Virtual Account
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M6 9l6 6 6-6"></path>
                    </svg>
                </button>
                <div id="virtualaccount" class="hidden mt-2 pl-4">
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">BCA</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bank Transfer</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Indomaret</a></li>
                    </ul>
                </div>
            </div>
            <div class="mb-4">
                <button type="button" 
                    class="flex justify-between items-center w-full px-4 py-3 text-sm font-medium text-left text-gray-900 bg-gray-100 border border-gray-300 rounded-lg focus:ring-4 focus:ring-blue-300 focus:outline-none" 
                    onclick="toggleDropdown('creditcard')">
                    Credit Card
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M6 9l6 6 6-6"></path>
                    </svg>
                </button>
                <div id="creditcard" class="hidden mt-2 pl-4">
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Credit / Debit Card</li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script>
        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
            } else {
                dropdown.classList.add('hidden');
            }
        }

        let quantity = 1;
        const ticketPrice = 26000; 

        function updateQuantity(change) {
            quantity += change;
            if (quantity < 1) quantity = 1; 
            const totalPrice = ticketPrice * quantity;
            document.getElementById('ticketQuantity').textContent = quantity;
            document.getElementById('ticketPrice').textContent = `Rp${(ticketPrice * quantity).toLocaleString()} x ${quantity}`;
        }
    </script>
</body>
</html>
