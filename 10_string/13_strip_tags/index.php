<?php

$textHtml = "<p>Testando paragrafo.</p><div>uma div</div><p>:</p><p>Outro parágrafo.</p>";

echo $textHtml;

$salvarTextoBranco = strip_tags($textHtml);

echo $salvarTextoBranco;