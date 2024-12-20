<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 dark:bg-gray-900">

<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Create an Account
              </h1>
              @if(session('success'))
                  <div class="bg-green-500 text-white p-2 rounded mb-4">
                      {{ session('success') }}
                  </div>
              @endif
              <form class="space-y-4 md:space-y-6" method="POST" action="{{ url('/register') }}">
                  @csrf

                  <!-- Username Input -->
                  <div>
                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                      <input 
                          type="text" 
                          name="username" 
                          id="username" 
                          value="{{ old('username') }}" 
                          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                          placeholder="Your username" 
                          required
                      >
                      @error('username')
                          <span class="text-red-500 text-sm">{{ $message }}</span>
                      @enderror
                  </div>

                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input 
                          type="email" 
                          name="email" 
                          id="email" 
                          value="{{ old('email') }}" 
                          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                          placeholder="name@company.com" 
                          required
                      >
                      @error('email')
                          <span class="text-red-500 text-sm">{{ $message }}</span>
                      @enderror
                  </div>

                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input 
                          type="password" 
                          name="password" 
                          id="password" 
                          placeholder="••••••••" 
                          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                          required
                      >
                      @error('password')
                          <span class="text-red-500 text-sm">{{ $message }}</span>
                      @enderror
                  </div>

                  <div>
                      <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                      <input 
                          type="password" 
                          name="password_confirmation" 
                          id="password_confirmation" 
                          placeholder="••••••••" 
                          class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                          required
                      >
                  </div>

                  <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Register</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      Already have an account? <a href="/login" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign in</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>

</body>
</html>
