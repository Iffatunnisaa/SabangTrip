@extends('layouts.app')

@section('body', 'style="background-image: url(\''.asset('image/background.png').'\')"')

@section('content')
<div class="flex justify-center mt-32 mb-16">
    <h1 class="flex text-black text-4xl font-bold justify-center text-center">About Us</h1>
</div>
<p class="text-gray-700 text-center w-4/5 text-3xl mx-auto">SabangTrip adalah platform digital yang dirancang untuk membantu 
    wisatawan dalam merencanakan perjalanan ke Pulau Sabang, salah satu destinasi paling mempesona di Indonesia.
    Melalui SabangTrip, Anda dapat dengan mudah menemukan berbagai destinasi wisata menarik di Sabang melalui 
    fitur Discover, yang menampilkan informasi lengkap tentang tempat-tempat yang wajib dikunjungi. Kami juga 
    menyediakan fitur e-ticket yang memudahkan Anda memesan tiket kapal secara online, sehingga perjalanan Anda 
    lebih praktis dan nyaman. Selain itu, di halaman Testimoni, pengunjung dapat membaca atau berbagi pengalaman 
    perjalanan mereka. SabangTrip berkomitmen untuk memberikan layanan yang memudahkan perjalanan Anda, menjadikan 
    setiap kunjungan ke Sabang lebih berkesan dan menyenangkan.
</p>
@endsection
