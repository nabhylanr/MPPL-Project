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
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Detail Pemesan</h1>
        
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
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
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>

        <h1 class="mt-10 text-2xl font-semibold text-gray-800 mb-4">Metode Pembayaran</h1>
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
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
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Credit / Debit Card</a></li>
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
    </script>
</body>
</html>
