<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ rtrim(config('app.url'), '/') }}/</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ rtrim(config('app.url'), '/') }}/produk</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ rtrim(config('app.url'), '/') }}/dealer</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ rtrim(config('app.url'), '/') }}/accesories</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ rtrim(config('app.url'), '/') }}/yamalube</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ rtrim(config('app.url'), '/') }}/contact</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    @foreach ($artikel as $a)
        <url>
            <loc>{{ rtrim(config('app.url'), '/') }}/artikel/{{ $a->slug }}</loc>
            <lastmod>{{ ($a->updated_at ?? $a->created_at)->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach

    @foreach ($region as $r)
    <url>
        <loc>{{ rtrim(config('app.url'), '/') }}/produk/list-motor/{{ $r->id }}</loc>
        <lastmod>{{ ($r->updated_at ?? $r->created_at)->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach

    @foreach ($region as $r)
    <url>
        <loc>{{ rtrim(config('app.url'), '/') }}/dealer/list-dealer/{{ $r->id }}</loc>
        <lastmod>{{ ($r->updated_at ?? $r->created_at)->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach

    @foreach ($motor as $m)
    <url>
        <loc>{{ rtrim(config('app.url'), '/') }}/produk/list-motor/detail/{{ $m->id }}</loc>
        <lastmod>{{ ($m->updated_at ?? $m->created_at)->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach
  
</urlset>