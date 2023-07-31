<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ date('Y-m-d H:i:s') }}</lastmod>
        <changefreq>Daily</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>{{ route('route.page', 'hakkimizda') }}</loc>
        <lastmod>{{ date('Y-m-d H:i:s') }}</lastmod>
        <changefreq>Daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('route.page', 'urunler') }}</loc>
        <lastmod>{{ date('Y-m-d H:i:s') }}</lastmod>
        <changefreq>Daily</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($Products as $product)
        <url>
            <loc>{{ route('route.product', $product->slug) }}</loc>
            <lastmod>{{ date('Y-m-d H:i:s') }}</lastmod>
            <changefreq>Daily</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach
    <url>
        <loc>{{ route('route.page', 'referanslar') }}</loc>
        <lastmod>{{ date('Y-m-d H:i:s') }}</lastmod>
        <changefreq>Daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('route.page', 'iletisim') }}</loc>
        <lastmod>{{ date('Y-m-d H:i:s') }}</lastmod>
        <changefreq>Daily</changefreq>
        <priority>0.8</priority>
    </url>


</urlset>
