User-agent: *
Allow: /
Disallow:
Sitemap: {{ rtrim(config('app.url'), '/') }}/sitemap.xml
Host: {{ rtrim(config('app.url'), '/') }}
