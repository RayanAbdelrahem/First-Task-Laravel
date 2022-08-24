   <section class="px-6 py-8">
    @include('design')
        <main class="max-w-lg mx-auto mt-20 bg-gray-100 p-6 rounded-xl border border-gray-200 shadow-xl">
            <h1 class="text-center font-bold text-xl text-blue-700">Log In</h1>

            <form method="POST" action="/login">
            @csrf

    <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 mt-6 pl-2"
        for="password"
        >
       E-mail
    </label>
       
    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    type="email"
    name="email"
    value="{{ old('email') }}"
    id="email"
    class="placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@mail.com"
    required
    >
    @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
</div>

<div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 mt-6 pl-2"
        for="password"
        >
        Password
    </label>
       
    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    type="password"
    name="password"
    id="password"
    class="placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password"
    required
    >
    @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
</div>

<div class="mb-6">
<button type="submit" class="text-white bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 px-5 text-center dark:bg-blue-600 dark:hover bg-blue-700 dark-focus:ring-blue-800 hover:bg-blue-800 mb-5">
Submit
</button>

        <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 mt-6 ml-3">Dosen't have account?
         <a href="/register" class="text-blue-600 hover:underline dark:text-blue-500">Register</a></label>
</div>
</form>
 </main>