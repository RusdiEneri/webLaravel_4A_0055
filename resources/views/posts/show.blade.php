<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - Kabar Burung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.8rem;
            color: #dc3545 !important;
        }
        .article-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 0;
            margin-bottom: 30px;
        }
        .article-title {
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 20px;
        }
        .article-meta {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            font-size: 0.95rem;
            opacity: 0.9;
        }
        .article-meta-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .article-image {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .article-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            text-align: justify;
        }
        .article-content p {
            margin-bottom: 1.5rem;
        }
        .category-badge {
            font-size: 0.85rem;
            padding: 6px 16px;
            font-weight: 500;
        }
        .related-posts {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .related-card {
            transition: transform 0.3s ease;
            border: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .related-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }
        .related-card img {
            height: 150px;
            object-fit: cover;
        }
        .related-title {
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.4;
            margin: 10px 0;
        }
        .share-buttons {
            display: flex;
            gap: 10px;
            margin: 30px 0;
        }
        .share-btn {
            padding: 8px 16px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .share-btn.facebook { background-color: #1877f2; }
        .share-btn.twitter { background-color: #1da1f2; }
        .share-btn.whatsapp { background-color: #25d366; }
        .share-btn:hover {
            opacity: 0.9;
            color: white;
        }
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            color: white;
            text-decoration: none;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }
        .back-button:hover {
            color: rgba(255,255,255,0.8);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">🐦 Kabar Burung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/berita">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Politik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ekonomi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Olahraga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Teknologi</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Article Header -->
    <div class="article-header">
        <div class="container">
            <a href="/berita" class="back-button">
                <i class="bi bi-arrow-left"></i> Kembali ke Beranda
            </a>
            <span class="badge bg-danger category-badge mb-3">{{ $post->category }}</span>
            <h1 class="article-title">{{ $post->title }}</h1>
            <div class="article-meta">
                <div class="article-meta-item">
                    <i class="bi bi-person-circle"></i>
                    <span>{{ $post->publisher }}</span>
                </div>
                <div class="article-meta-item">
                    <i class="bi bi-calendar3"></i>
                    <span>{{ $post->published_at->format('d F Y') }}</span>
                </div>
                <div class="article-meta-item">
                    <i class="bi bi-clock"></i>
                    <span>{{ $post->published_at->diffForHumans() }}</span>
                </div>
                <div class="article-meta-item">
                    <i class="bi bi-eye"></i>
                    <span>{{ number_format($post->views) }} views</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Article Content -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Featured Image -->
                <img src="{{ $post->image }}" alt="{{ $post->title }}" class="article-image">

                <!-- Share Buttons -->
                <div class="share-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                       target="_blank" 
                       class="share-btn facebook">
                        <i class="bi bi-facebook"></i> Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" 
                       target="_blank" 
                       class="share-btn twitter">
                        <i class="bi bi-twitter"></i> Twitter
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . url()->current()) }}" 
                       target="_blank" 
                       class="share-btn whatsapp">
                        <i class="bi bi-whatsapp"></i> WhatsApp
                    </a>
                </div>

                <!-- Article Body -->
                <div class="article-content">
                    {!! nl2br(e($post->content)) !!}
                </div>

                <!-- Tags/Keywords -->
                <div class="mt-4 pt-4 border-top">
                    <h5 class="mb-3">Tags:</h5>
                    <div>
                        <span class="badge bg-secondary me-2 mb-2">{{ $post->category }}</span>
                        <span class="badge bg-secondary me-2 mb-2">Berita Terkini</span>
                        <span class="badge bg-secondary me-2 mb-2">Kabar Burung</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Posts -->
        @if($relatedPosts->count() > 0)
            <div class="row mt-5">
                <div class="col-12">
                    <div class="related-posts">
                        <h3 class="mb-4">
                            <i class="bi bi-newspaper"></i> Berita Terkait
                        </h3>
                        <div class="row">
                            @foreach($relatedPosts as $related)
                                <div class="col-md-4 mb-3">
                                    <div class="card related-card h-100">
                                        <img src="{{ $related->image }}" class="card-img-top" alt="{{ $related->title }}">
                                        <div class="card-body">
                                            <span class="badge bg-primary category-badge">{{ $related->category }}</span>
                                            <h5 class="related-title">
                                                <a href="{{ route('posts.show', $related->id) }}" class="text-decoration-none text-dark">
                                                    {{ $related->title }}
                                                </a>
                                            </h5>
                                            <small class="text-muted">
                                                <i class="bi bi-clock"></i> {{ $related->published_at->format('d M Y') }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2026 Kabar Burung. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>