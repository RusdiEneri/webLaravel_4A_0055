<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabar Burung - Portal Berita Terkini & Terpercaya</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/616/616408.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
      /* Custom Pagination - Sesuai Tema Portal Berita */
.pagination {
    margin: 40px 0;
    gap: 5px;
}

.pagination .page-item .page-link {
    color: #1a1a1a;
    background: white;
    border: 1px solid #e0e0e0;
    padding: 10px 16px;
    margin: 0 2px;
    border-radius: 6px !important;
    font-weight: 600;
    font-size: 14px;
    transition: all 0.3s ease;
    min-width: 42px;
    text-align: center;
}

.pagination .page-item .page-link:hover {
    background: #e63946;
    color: white;
    border-color: #e63946;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(230, 57, 70, 0.3);
}

.pagination .page-item.active .page-link {
    background: #e63946;
    color: white;
    border-color: #e63946;
    box-shadow: 0 4px 12px rgba(230, 57, 70, 0.3);
}

.pagination .page-item.disabled .page-link {
    background: #f5f5f5;
    color: #aaa;
    border-color: #e0e0e0;
    cursor: not-allowed;
    opacity: 0.6;
}

.pagination .page-item.disabled .page-link:hover {
    transform: none;
    box-shadow: none;
    background: #f5f5f5;
    color: #aaa;
}

/* Info "Showing 1 to 9 of 20 results" */
.pagination-info {
    color: #666;
    font-size: 14px;
    margin-bottom: 15px;
    text-align: center;
}

.pagination-info span {
    font-weight: 700;
    color: #e63946;
}
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Top Bar */
        .top-bar {
            background: #1a1a1a;
            color: white;
            padding: 8px 0;
            font-size: 13px;
        }

        /* Navbar */
        .main-navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            font-size: 28px;
            font-weight: 800;
            color: #e63946 !important;
            letter-spacing: -1px;
        }

        .navbar-brand span {
            color: #1d3557;
        }

        .nav-link {
            font-weight: 600;
            color: #333 !important;
            padding: 20px 15px !important;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #e63946 !important;
        }

        /* Breaking News - Scrolling All News */
.breaking-news {
    background: #e63946;
    color: white;
    padding: 12px 0;
    overflow: hidden;
    white-space: nowrap;
}

.breaking-label {
    background: white;
    color: #e63946;
    padding: 6px 20px;
    font-weight: 800;
    font-size: 12px;
    text-transform: uppercase;
    border-radius: 4px;
    white-space: nowrap;
    flex-shrink: 0;
    margin-right: 20px;
    position: relative;
    z-index: 10;
}

.breaking-text-wrapper {
    flex: 1;
    overflow: hidden;
    position: relative;
}

.breaking-text-scroll {
    display: inline-flex;
    animation: scroll-news 60s linear infinite;
    white-space: nowrap;
}

.breaking-text-scroll:hover {
    animation-play-state: paused; /* Pause saat hover */
}

.breaking-title {
    font-weight: 500;
    font-size: 14px;
    margin-right: 15px;
    display: inline-block;
}

.breaking-separator {
    margin: 0 15px;
    opacity: 0.7;
    font-weight: 300;
    display: inline-block;
}

/* Animasi scroll dari kanan ke kiri */
@keyframes scroll-news {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%); /* Geser setengah karena konten diduplikasi 2x */
    }
}

/* Responsive */
@media (max-width: 768px) {
    .breaking-label {
        font-size: 10px;
        padding: 4px 12px;
        margin-right: 10px;
    }
    
    .breaking-title {
        font-size: 12px;
    }
    
    .breaking-text-scroll {
        animation-duration: 45s; /* Lebih cepat di mobile */
    }
}

/* Responsive */
@media (max-width: 768px) {
    .breaking-label {
        font-size: 10px;
        padding: 4px 12px;
        margin-right: 10px;
    }
    
    .breaking-text-item {
        font-size: 12px;
    }
}

        /* Main Headline */
        .main-headline {
            background: white;
            margin: 30px 0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .main-headline:hover {
            transform: translateY(-5px);
        }

        .main-headline img {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }

        .main-headline-content {
            padding: 30px;
        }

        .category-badge {
            display: inline-block;
            padding: 6px 16px;
            background: #e63946;
            color: white;
            font-weight: 700;
            font-size: 11px;
            text-transform: uppercase;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .main-headline-title {
            font-size: 36px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 15px;
            color: #1a1a1a;
        }

        .main-headline-excerpt {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .article-meta {
            display: flex;
            gap: 20px;
            color: #666;
            font-size: 14px;
        }

        .article-meta i {
            margin-right: 5px;
            color: #e63946;
        }

        /* News Grid */
        .section-title {
            font-size: 24px;
            font-weight: 700;
            margin: 40px 0 25px 0;
            padding-bottom: 10px;
            border-bottom: 4px solid #e63946;
            display: inline-block;
        }

        .news-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            transition: all 0.3s;
            height: 100%;
        }

        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .news-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .news-card:hover img {
            transform: scale(1.05);
        }

        .news-card-body {
            padding: 20px;
        }

        .news-card-category {
            font-size: 11px;
            font-weight: 700;
            color: #e63946;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .news-card-title {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 10px;
            color: #1a1a1a;
        }

        .news-card-title a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s;
        }

        .news-card-title a:hover {
            color: #e63946;
        }

        .news-card-excerpt {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .news-card-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: #999;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }

        /* Sidebar */
        .sidebar-widget {
            background: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .widget-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #e63946;
        }

        .trending-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .trending-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .trending-number {
            font-size: 32px;
            font-weight: 800;
            color: #e63946;
            opacity: 0.3;
            line-height: 1;
        }

        .trending-content h4 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 8px;
            line-height: 1.4;
        }

        .trending-content h4 a {
            color: #1a1a1a;
            text-decoration: none;
            transition: color 0.3s;
        }

        .trending-content h4 a:hover {
            color: #e63946;
        }

        .trending-meta {
            font-size: 12px;
            color: #999;
        }

        /* Footer */
        .main-footer {
            background: #1a1a1a;
            color: white;
            padding: 60px 0 30px 0;
            margin-top: 60px;
        }

        .footer-widget h3 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            color: white;
        }

        .footer-widget ul {
            list-style: none;
            padding: 0;
        }

        .footer-widget ul li {
            margin-bottom: 10px;
        }

        .footer-widget ul li a {
            color: #aaa;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-widget ul li a:hover {
            color: #e63946;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            margin-top: 40px;
            padding-top: 30px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }

        .social-links {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: #333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: #e63946;
            transform: translateY(-3px);
        }

        /* Pagination */
        .pagination {
            margin: 40px 0;
        }

        .page-link {
            color: #1a1a1a;
            border: none;
            padding: 10px 18px;
            margin: 0 3px;
            border-radius: 6px !important;
            transition: all 0.3s;
        }

        .page-link:hover {
            background: #e63946;
            color: white;
        }

        .page-item.active .page-link {
            background: #e63946;
            color: white;
        }

        /* Loading State */
        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-headline-title {
                font-size: 24px;
            }
            
            .main-headline img {
                height: 250px;
            }
            
            .news-card img {
                height: 180px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <i class="bi bi-calendar3"></i> {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}
                </div>
                <div class="col-md-6 text-end">
                    @auth
                        <i class="bi bi-person-circle"></i> {{ auth()->user()->name }} | 
                        <form action="/logout" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-link text-white p-0">Logout</button>
                        </form>
                    @else
                        <a href="/login" class="text-white text-decoration-none">Login</a> | 
                        <a href="/register" class="text-white text-decoration-none">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="main-navbar">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-3">
                <a class="navbar-brand" href="/">Kabar<span>Burung</span></a>
                <div class="d-none d-md-flex align-items-center gap-4">
                    <a href="/" class="nav-link">Beranda</a>
                    <a href="#" class="nav-link">Politik</a>
                    <a href="#" class="nav-link">Ekonomi</a>
                    <a href="#" class="nav-link">Olahraga</a>
                    <a href="#" class="nav-link">Teknologi</a>
                    <a href="#" class="nav-link">Hiburan</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Breaking News -->
    <div class="breaking-news">
    <div class="container">
        <div class="d-flex align-items-center">
            <span class="breaking-label">BREAKING NEWS</span>
            <div class="breaking-text-wrapper">
                <div class="breaking-text-scroll">
                    @if($posts->count() > 0)
                        {{-- Duplikasi 2x agar looping seamless --}}
                        @for($i = 0; $i < 2; $i++)
                            @foreach($posts as $post)
                                <span class="breaking-title">{{ $post->title }}</span>
                                <span class="breaking-separator">|</span>
                            @endforeach
                        @endfor
                    @else
                        <span class="breaking-title">Selamat datang di Portal Berita Kabar Burung</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Main Content -->
    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('posts.create') }}" class="btn btn-danger">
                <i class="bi bi-plus-circle"></i> Tambah Berita
            </a>
        </div>
        
        @if($posts->count() > 0)
            <!-- Main Headline (Berita Utama) -->
            <div class="main-headline">
                <a href="{{ route('posts.show', $posts->first()->id) }}" class="text-decoration-none">
                    <img src="{{ $posts->first()->image }}" alt="{{ $posts->first()->title }}">
                </a>
                <div class="main-headline-content">
                    <span class="category-badge">{{ $posts->first()->category }}</span>
                    <h1 class="main-headline-title">
                        <a href="{{ route('posts.show', $posts->first()->id) }}" class="text-decoration-none text-dark">
                            {{ $posts->first()->title }}
                        </a>
                    </h1>
                    <p class="main-headline-excerpt">
                        {{ Str::limit($posts->first()->content, 250) }}
                    </p>
                    <div class="article-meta">
                        <span><i class="bi bi-person"></i> {{ $posts->first()->publisher }}</span>
                        <span><i class="bi bi-calendar"></i> {{ $posts->first()->published_at->format('d F Y') }}</span>
                        <span><i class="bi bi-clock"></i> {{ $posts->first()->published_at->format('H:i') }} WIB</span>
                        <span><i class="bi bi-eye"></i> {{ number_format($posts->first()->views) }} Views</span>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('posts.edit', $posts->first()->id) }}" class="btn btn-sm btn-primary me-2">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('posts.destroy', $posts->first()->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <!-- Main Content Area -->
                <div class="col-lg-8">
                    <h2 class="section-title">Berita Terbaru</h2>
                    
                    <div class="row">
                        @foreach($posts->skip(1) as $post)
                            <div class="col-md-6 mb-4">
                                <div class="news-card">
                                    <a href="{{ route('posts.show', $post->id) }}">
                                        <img src="{{ $post->image }}" alt="{{ $post->title }}">
                                    </a>
                                    <div class="news-card-body">
                                        <div class="news-card-category">{{ $post->category }}</div>
                                        <h3 class="news-card-title">
                                            <a href="{{ route('posts.show', $post->id) }}">
                                                {{ $post->title }}
                                            </a>
                                        </h3>
                                        <p class="news-card-excerpt">
                                            {{ Str::limit($post->content, 120) }}
                                        </p>
                                        <div class="news-card-meta">
                                            <span><i class="bi bi-person"></i> {{ $post->publisher }}</span>
                                            <span><i class="bi bi-clock"></i> {{ $post->published_at->diffForHumans() }}</span>
                                        </div>
                                        <div class="mt-3">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary me-2">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-5">
                        {{ $posts->links() }}
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Trending News -->
                    <div class="sidebar-widget">
    <h3 class="widget-title">🔥 Trending</h3>
    @php
        $trendingPosts = $posts->skip(1)->take(5)->values();
        $counter = 1;
    @endphp
    @foreach($trendingPosts as $post)
        <div class="trending-item">
            <div class="trending-number">{{ $counter++ }}</div>
            <div class="trending-content">
                <h4>
                    <a href="{{ route('posts.show', $post->id) }}">
                        {{ Str::limit($post->title, 60) }}
                    </a>
                </h4>
                <div class="trending-meta">
                    <i class="bi bi-eye"></i> {{ number_format($post->views) }} views
                </div>
            </div>
        </div>
    @endforeach
</div>

                    <!-- Categories -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">📂 Kategori</h3>
                        <div class="d-flex flex-wrap gap-2">
                            @php
                                $categories = ['Politik', 'Ekonomi', 'Olahraga', 'Teknologi', 'Hiburan', 'Kesehatan', 'Pendidikan'];
                            @endphp
                            @foreach($categories as $cat)
                                <span class="badge bg-light text-dark border" style="padding: 8px 15px; font-size: 13px;">
                                    {{ $cat }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <!-- About -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Tentang Kabar Burung</h3>
                        <p style="color: #666; line-height: 1.6;">
                            Kabar Burung adalah portal berita terpercaya yang menyajikan informasi terkini, akurat, dan berimbang. Kami berkomitmen memberikan yang terbaik untuk pembaca Indonesia.
                        </p>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-5">
                <i class="bi bi-newspaper" style="font-size: 100px; color: #ddd;"></i>
                <h3 class="mt-4">Belum ada berita</h3>
                <p class="text-muted">Berita akan segera ditambahkan</p>
            </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="footer-widget">
                        <h3>Kabar Burung</h3>
                        <p style="color: #aaa; line-height: 1.6;">
                            Portal berita terpercaya yang menyajikan informasi terkini dan akurat untuk Indonesia.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="footer-widget">
                        <h3>Menu Cepat</h3>
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Redaksi</a></li>
                            <li><a href="#">Pedoman Media Siber</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="footer-widget">
                        <h3>Hubungi Kami</h3>
                        <ul>
                            <li><i class="bi bi-geo-alt"></i> Jakarta, Indonesia</li>
                            <li><i class="bi bi-envelope"></i> redaksi@kabarburung.com</li>
                            <li><i class="bi bi-telephone"></i> +62 21 1234567</li>
                        </ul>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Kabar Burung. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
// Breaking News Auto-Rotate
document.addEventListener('DOMContentLoaded', function() {
    const breakingItems = document.querySelectorAll('.breaking-text-item');
    
    if (breakingItems.length > 0) {
        let currentIndex = 0;
        const interval = 4000; // Ganti berita setiap 4 detik
        
        function rotateBreakingNews() {
            // Remove active class from current
            breakingItems[currentIndex].classList.remove('active');
            
            // Move to next item
            currentIndex = (currentIndex + 1) % breakingItems.length;
            
            // Add active class to new item
            breakingItems[currentIndex].classList.add('active');
        }
        
        // Start auto-rotate
        setInterval(rotateBreakingNews, interval);
    }
});
</script>
</body>
</html>