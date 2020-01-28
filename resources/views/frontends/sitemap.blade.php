<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($sitemapRoutes as $sitemapRoute)
    <url>
        <loc>{{config('app.url')}}{{ $sitemapRoute['name'] }}</loc>
        <lastmod>{{ $sitemapRoute['date']->tz('Asia/Phnom_Penh')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
    </url>
    @endforeach
    @foreach ($products as $product)
        <url>
            <loc>{{config('app.url')}}/collections/{{$product->slug}}</loc>
            <lastmod>{{ $product->created_at->tz('Asia/Phnom_Penh')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
        </url>
    @endforeach
    @foreach ($blogs as $blog)
        <url>
            <loc>{{config('app.url')}}/blog/{{$blog->permalink}}</loc>
            <lastmod>{{ $blog->created_at->tz('Asia/Phnom_Penh')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
        </url>
    @endforeach
    @foreach ($productCategories as $productCategory)
        <url>
            <loc>{{config('app.url')}}/blog?category={{$productCategory->id}}</loc>
            <lastmod>{{ $productCategory->created_at->tz('Asia/Phnom_Penh')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
        </url>
    @endforeach
    @foreach ($newsCategories as $newsCategory)
        <url>
            <loc>{{config('app.url')}}/blog?category={{$newsCategory->id}}</loc>
            <lastmod>{{ $newsCategory->created_at->tz('Asia/Phnom_Penh')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
        </url>
    @endforeach
</urlset>