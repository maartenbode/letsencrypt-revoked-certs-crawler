# letsencrypt-revoked-certs-crawler

Let's Encrypt will revoke 3 million certificates on March 4th, 2020. Bulk scan your domains using this tool.

### Steps

- `git clone git@github.com:maartenbode/letsencrypt-revoked-certs-crawler.git`
- Dump your domains to crawl into `domains.txt` (one domain per line)
- Run `php index.php`
