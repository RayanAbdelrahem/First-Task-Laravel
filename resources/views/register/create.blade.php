<section class="px-6 py-8">
@include('design')
    <main class="max-w-lg mx-auto mt-20 bg-gray-100 p-6 rounded-xl border border-gray-200">

        <h1 class="text-center font-bold text-xl">Register</h1>
        <form method="POST" action="/register">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 ml-2 uppercase font-bold text-xs text-gray-700"
                    for="Name"
                    >
                    NAME
                </label>
                   
                <input class="bg-gray-50 border border-purple-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                type="text"
                name="name"
                value="{{ old('name') }}"
                id="name"
                required
                >

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>
    
            <div class="mb-6">
                <label class="block mb-2 ml-2 uppercase font-bold text-xs text-gray-700"
                    for="username"
                    >
                    USERNAME
                </label>
                   
                <input class="bg-gray-50 border border-purple-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                type="text"
                name="username"
                value="{{ old('username') }}"
                id="username"
                required
                >
                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>
   
            <div class="mb-6">
                <label class="block mb-2 ml-2 uppercase font-bold text-xs text-gray-700"
                    for="email"
                    >
                    E-mail
                </label>
                   
                <input class="bg-gray-50 border border-purple-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                type="text"
                name="email"
                value="{{ old('email') }}"
                id="email"
                required
                >
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label class="block mb-2 ml-2 uppercase font-bold text-xs text-gray-700"
                    for="password"
                    >
                    PASSWORD
                </label>
                   
                <input class="bg-gray-50 border border-purple-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                type="password"
                name="password"
                id="password"
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

        <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 mt-6 ml-3">Already have account?
         <a href="/login" class="text-blue-600 hover:underline dark:text-blue-500">Log In</a></label>
            </div>
        </form>
    </main>
</section>