@section('title', 'Sign in to your account')

<div>
    @include('landing.header')
    <div class="absolute inset-0">
        <img class="w-full h-full bg-center bg-no-repeat bg-cover" src="https://www.cablefax.com/wp-content/uploads/2014/06/shutterstock_176995772.jpg"
            alt="A computer background">
        <div class="absolute inset-0 opacity-80 bg-gradient-to-b from-sky-900 to-sky-800"></div>
    </div>

    <div class="relative justify-center min-h-screen mx-0 sm:flex sm:flex-row">
        <div class="flex flex-col self-center p-10 sm:max-w-5xl xl:max-w-2xl">
            <div class="flex-col self-start text-white lg:flex">
                <img src="" class="mb-3">
                <h1 class="mb-3 text-3xl font-bold lg:text-6xl">Hi! Welcome to CSC</h1>
                <p class="pr-3 text-sm lg:text-base"> We are a team of developers who are passionate about building
                    awesome products. We are here to help you build your next product.
                </p>
            </div>
        </div>
        <div class="flex self-center justify-center">
            <form wire:submit.prevent="authenticate">
                <div class="p-12 mx-auto bg-white rounded-md">
                    <div class="mb-4">
                        <h3 class="text-2xl font-semibold text-gray-800">Sign In </h3>
                        <p class="text-gray-500">Please sign in to your account.</p>
                    </div>
                    <div class="space-y-5">
                        <div class="space-y-2">
                            <label class="text-sm font-medium tracking-wide text-gray-700">Email</label>
                            <input wire:model.lazy="email" id="email" name="email" type="email"
                                placeholder="Email address" required autofocus
                                class="content-center w-full px-4 py-2 text-base border border-gray-300 rounded-lg focus:outline-none  focus:border-sky-900
                                @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />

                            @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label class="mb-5 text-sm font-medium tracking-wide text-gray-700">
                                Password
                            </label>
                            <input wire:model.lazy="password" id="password" type="password" placeholder="Password"
                                required
                                class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-sky-900 
                                @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />

                            @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input wire:model.lazy="remember" id="remember" type="checkbox"
                                    class="w-4 h-4 transition duration-150 ease-in-out text-sky-800 form-checkbox" />
                                <label for="remember_me" class="block ml-2 text-sm text-gray-800">
                                    Remember me
                                </label>
                            </div>
                            <div class="text-sm">
                                <a href="{{ route('password.request') }}" class="text-sky-900 hover:text-sky-800">
                                    Forgot your password?
                                </a>
                            </div>
                        </div>
                        <div>
                            <button type="submit"
                                class="flex justify-center w-full p-3 font-semibold text-gray-100 rounded-full shadow-lg bg-sky-900 hover:bg-sky-800 focus:outline-none">
                                Sign in
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- <div wire:loading wire:target="authenticate">
    @include('misc.loading')
    </div> --}}
</div>