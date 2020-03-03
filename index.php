<?php

$domains = array_map('trim', file('domains.txt'));

foreach ($domains as $domain) {
    $output = shell_exec("curl -ss -XPOST -d 'fqdn={$domain}' https://unboundtest.com/caaproblem/checkhost");

    echo str_pad($domain, 40, ' ', STR_PAD_RIGHT);

    if (!preg_match('/is OK/', $output)) {
        echo "🚩 {$output}";
    } else {
        echo "✅ Valid" . PHP_EOL;
    }
}
