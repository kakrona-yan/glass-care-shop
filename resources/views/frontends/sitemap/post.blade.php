<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{route('home')}}</loc>
        <lastmod>2019-12-17T12:21:59+07:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($blogs as $blog)
    <url>
      <loc>{{config('app.url')}}/blog/{{$blog->permalink}}</loc>
      <lastmod>{{ $blog->created_at->tz('Asia/Phnom_Penh')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>0.8</priority>
      <image:image>
        <image:loc>{{$blog->thumbnail? asset(getUploadUrl($blog->thumbnail, config('upload.news'))) : asset('images/no-thumbnail.jpg') }}</image:loc>
        <image:title><![CDATA[{{$blog->title}}]]></image:title>
      </image:image>
    </url>
    @endforeach
</urlset>