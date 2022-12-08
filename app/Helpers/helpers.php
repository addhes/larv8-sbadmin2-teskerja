<?php

use Illuminate\Support\Str;

function humanize(string $string): string {
    return Str::title(str_replace('_', ' ', $string));
}

function randomString(int $length = 8): string {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $length; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }

    return implode('', $pass);
}

function number_format_parentheses(
    float $num,
    int $decimals = 0,
    ?string $decimal_separator = ".",
    ?string $thousand_separator = ","
): string
{
    if ($num < 0) {
        return '(' . number_format(abs($num), $decimals, $decimal_separator, $thousand_separator) . ')';
    }

    return number_format($num, $decimals, $decimal_separator, $thousand_separator);
}

function terbilang ($angka) {

    // Check if value string
    if (is_string($angka)) {
        // if string, cast to integer/float or any numbering attribute
        $tempAngka = \Cknow\Money\Money::parse($angka, config('money.defaultCurrency'))->formatByDecimal();

    } else {
        // if not string, proceed as usual
        $tempAngka = $angka;
    }

    $angka = abs($tempAngka);
    $baca = array('', ' Satu ', ' Dua ', ' Tiga ', ' Empat ', ' Lima ', ' Enam ', ' Tujuh ', ' Delapan ', ' Sembilan ', ' Sepuluh ', ' Sebelas ');
    $terbilang = '';

    if ($angka < 12 ) {
        $terbilang = '' . $baca[$angka];
    } elseif ($angka < 20) {
        $terbilang = terbilang($angka -10) . 'Belas';
    } elseif ($angka < 100) {
        $terbilang = terbilang($angka / 10) . 'Puluh ' . terbilang($angka % 10);
    } elseif ($angka < 200) {
        $terbilang = ' seratus ' . terbilang($angka - 100);
    } elseif ($angka < 1000) {
        $terbilang = terbilang($angka / 100) . 'Ratus' . terbilang($angka % 100);
    } elseif ($angka < 2000) {
        $terbilang = ' seribu ' . terbilang($angka - 1000);
    } elseif ($angka < 1000000) {
        $terbilang = terbilang($angka / 1000) . 'Ribu' . terbilang($angka % 1000);
    } elseif ($angka < 1000000000) {
        $terbilang = terbilang($angka / 1000000) . 'Juta'. terbilang($angka % 1000000);
    }

    return $terbilang;
}

function translateSHU($jenis) {
    if ($jenis == \App\Models\SHU::SHU_MODAL) {
        return 'SHU Modal';
    } else if ($jenis == \App\Models\SHU::SHU_PARTISIPASI) {
        return 'SHU Partisipasi';
    } else if ($jenis == \App\Models\SHU::SHU_USAHA) {
        return 'SHU Usaha';
    } else {
        return '-';
    }
}
