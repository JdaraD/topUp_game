<?php

if (! function_exists('hexToRgba')) {
    function hexToRgba(string $hex, int|float $opacity = 100): string
    {
        $hex = ltrim($hex, '#');

        if (! preg_match('/^[0-9A-Fa-f]{6}$/', $hex)) {
            return 'rgba(0,0,0,1)';
        }

        [$r, $g, $b] = sscanf($hex, "%02x%02x%02x");

        $alpha = max(0, min(1, $opacity / 100));

        return "rgba($r, $g, $b, $alpha)";
    }
}
