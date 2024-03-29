@extends('admin_layout.master')

@section('title', 'Admin CMS | Kelola Akun Re-Seller')

@section('admin_content')
<div class="content">
    <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
        <div class="p-1">
            
            <!-- Title Vendor Page -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h1 class="title">Data Konten Umum</h1>
                </div>
            </div>
            <!-- End Title Vendor Page -->

            @if(session('hero_notif'))
            <div class="notification is-success">
                <button class="delete"></button>
                {{ @session('hero_notif') }}
            </div>
            @endif

            @if(session('video_notif'))
            <div class="notification is-success">
                <button class="delete"></button>
                {{ @session('video_notif') }}
            </div>
            @endif

            @if(session('tentang_notif'))
            <div class="notification is-success">
                <button class="delete"></button>
                {{ @session('tentang_notif') }}
            </div>
            @endif

            @if($action_type == 'tambah')
            
            <div class="content">
                <h3 class="has-text-centered flash-message">-- Maaf, belum ada konten --</h3>
            </div>

            @else

            <!-- Content Management Hero Section -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="card has-background-light">
                        <div class="card-header">
                            <div class="card-header-title">
                                <p class="is-size-5">Konten Hero</p> 
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <p>Bagian ini adalah untuk mengelola konten bagian Hero pada halaman buatan rumah</p>
                                
                                <!-- Image Content -->
                                <h5>Gambar:</h5>
                                <figure class="image is-4by3">
                                    <img src="{{ asset('vendor_assets/images/' . $vendor_content->hero_image) }}">
                                </figure>
                                <!-- End Image Content -->
                                
                                <!-- Title Content -->
                                <h5>Judul:</h5>
                                <p>{{ $vendor_content->title_hero }}</p>
                                <!-- End Title Content -->

                                <!-- Sub Title Content -->
                                <h5>Sub Judul:</h5>
                                <p>{{ $vendor_content->subtitle_hero }}</p>
                                <!-- End Sub Title Content -->

                                <!-- Text Content -->
                                <h5>Teks:</h5>
                                <p class="wrap-text has-text-left">{{ $vendor_content->text_hero }}</p>
                                <!-- End Text Content -->
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/admin/buatan-rumah/hero" class="card-footer-item has-background-success has-text-white">Buat/Ubah Konten</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content Management Hero Section -->

            <!-- Content Management Tentang Section -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="card has-background-light">
                        <div class="card-header">
                            <div class="card-header-title">
                                <p class="is-size-5">Konten Tentang Kita</p> 
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <p>Bagian ini adalah untuk mengelola konten bagian tentang pada halaman buatan rumah</p>
                                
                                <!-- Title Content -->
                                <h5>Judul:</h5>
                                <p>{{ $vendor_content->title_about }}</p>
                                <!-- End Title Content -->

                                <!-- Text Content -->
                                <h5>Teks:</h5>
                                <p class="wrap-text has-text-left">{{ $vendor_content->text_about }}</p>
                                <!-- End Text Content -->
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/admin/buatan-rumah/tentang" class="card-footer-item has-background-success has-text-white">Buat/Ubah Konten</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content Management Tentang Section -->

            <!-- Content Management Video Kami Section -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="card has-background-light">
                        <div class="card-header">
                            <div class="card-header-title">
                                <p class="is-size-5">Konten Video Kami</p> 
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                <p>Bagian ini adalah untuk mengelola konten bagian video kami pada halaman buatan rumah</p>
                                
                                <!-- Video Content -->
                                <h5>Video:</h5>
                                <figure class="image is-16by9">
                                    <iframe class="has-ratio" width="640" height="360" src="{{ asset('vendor_assets/videos/' . $vendor_content->video) }}" frameborder="0" allowfullscreen></iframe>
                                </figure>
                                <!-- End Video Content -->
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/admin/buatan-rumah/video" class="card-footer-item has-background-success has-text-white">Buat/Ubah Konten</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content Management Video Kami Section -->

            @endif

        </div>
    </div>
</div>
@endsection


