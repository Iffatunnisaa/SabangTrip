@auth
@if (Auth::user()->role == 'user')
<nav class="bg-[#EEE9DA] p-4 shadow-xl">
    <div class="container mx-auto flex justify-between items-center">
        <a class="text-[#265073] font-bold text-xl" href="/index">
            <img src="{{ asset('image/logo.svg') }}" class="w-1/2 h-1/2" alt="Logo">
        </a>
        <ul class="flex space-x-16">
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="/index">Home</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="/discover">Discover</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="/etiket">E-Ticket</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="#">Testimonial</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="/about">About</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="#">
                    <img src="{{ asset('image/pp.svg') }}" class="w-8 h-8 rounded" alt="Profile Picture">
                </a>
            </li>
        </ul>
    </div>
</nav>

@elseif (Auth::user()->role == 'admin')
<nav class="bg-[#EEE9DA] p-4 shadow-xl">
    <div class="container mx-auto flex justify-between items-center">
        <a class="text-[#265073] font-bold text-xl" href="/index">
            <img src="{{ asset('image/logo.svg') }}" class="w-1/2 h-1/2" alt="Logo">
        </a>
        <ul class="flex space-x-16">
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="/index">Home</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="/discover">Discover</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="/tiket">E-Ticket</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="#">Testimonial</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="/about">About</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="/logout">
                    <img src="{{ asset('image/pp.svg') }}" class="w-8 h-8 rounded" alt="Profile Picture">
                </a>
            </li>
        </ul>
    </div>
</nav>

@endauth
@else
<nav class="bg-[#EEE9DA] p-4 shadow-xl">
    <div class="container mx-auto flex justify-between items-center">
        <a class="text-[#265073] font-bold text-xl" href="/">
            <img src="{{ asset('image/logo.svg') }}" class="w-1/2 h-1/2" alt="Logo">
        </a>
        <ul class="flex space-x-16">
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="/">Home</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="#">Discover</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="#">E-Ticket</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="#">Testimonial</a>
            </li>
            <li>
                <a class="text-[#265073] hover:text-blue-300 font-bold text-xl" href="#">About</a>
            </li>
        </ul>
    </div>
</nav>
@endif
