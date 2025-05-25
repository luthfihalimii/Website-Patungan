@extends('layout.master')
@section('content')
<x-navbar />
    <main class="flex flex-col h-full items-center justify-center px-16 py-16">
        <div class="flex flex-col gap-6 text-center">
            <div class="flex items-center justify-center gap-2">
                <p class="font-semibold text-lg leading-[22px] text-patungan-grey last:text-patungan-black">Home</p>
                <p class="font-semibold leading-5 text-patungan-grey">></p>
                <p class="font-semibold text-lg leading-[22px] text-patungan-grey last:text-patungan-black">Pesanan Saya</p>
            </div>
            <h1 class="font-Grifter font-bold text-[32px] leading-[33px]">Detail Pesanan Kamu</h1>
        </div>
        <div class="flex flex-col w-full max-w-[762px] mt-6 rounded-[32px] overflow-hidden">
            <div class="relative flex flex-col justify-center px-6 pt-8 pb-16 gap-1 -mb-8 text-center bg-[linear-gradient(113.19deg,#E25520_0%,#A83279_100.41%)]">
                <img src="assets/images/backgrounds/header-lines-bg.svg" class="absolute w-full h-full object-cover object-top" alt="background">
                <p class="relative font-semibold text-xl leading-[25px] text-[#E2B9BB]">Your Booking Code:</p>
                <p class="relative font-bold text-[32px] leading-10 text-white">Patungan2050</p>
            </div>
            <div class="relative flex flex-col items-center rounded-[32px] p-[52px] gap-8 bg-white overflow-hidden">
                <div class="flex items-center w-fit rounded-full p-[12px_24px] gap-[6px] bg-patungan-yellow">
                    <img src="assets/images/icons/clock-white.svg" class="w-6 flex shrink-0" alt="icon">
                    <p class="font-bold text-lg leading-[22px] text-white">Status Booking Pending</p>
                </div>
                <div class="flex flex-col text-center gap-4">
                    <p class="font-Grifter font-bold text-[32px] leading-[50px] text-[#161616]">Akses grup patungan tertunda karena pesananmu sedang diverifikasi!</p>
                    <p class="font-['Poppins'] font-medium leading-[25px] text-patungan-grey">Sabar ya, Pesanan kamu sedang kami cek🙌🏻.  setelah terverifikasi, kamu akan otomatis masuk ke grup patungan yang kami sediakan 😉 </p>
                </div>
            </div>
        </div>
    </main>

@endsection
@push('after-script')
    <script src="js/nav-tab.js"></script>
    <script src="js/copy.js"></script>
    <script src="js/file-upload.js"></script>
@endpush