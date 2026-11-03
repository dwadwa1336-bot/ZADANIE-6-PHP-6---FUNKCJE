<?php
//1. SUMA
function suma($a, $b) {
    return $a + $b;
}

//2. PODSTAWY
function podstawy($a, $b) {
    $roznica = $a - $b;
    $iloczyn = $a * $b;
    $iloraz = ($b != 0) ? ($a / $b) : "Błąd: dzielenie przez zero";
    return "Różnica: $roznica, Iloczyn: $iloczyn, Iloraz: $iloraz";
}

//3. KALKULATOR
function kalkulator($a, $b, $dzialanie) {
    $wynik = 0;
    if ($dzialanie == 'suma') { $wynik = $a + $b; }
    elseif ($dzialanie == 'roznica') { $wynik = $a - $b; }
    elseif ($dzialanie == 'iloczyn') { $wynik = $a * $b; }
    elseif ($dzialanie == 'iloraz') { $wynik = ($b != 0) ? ($a / $b) : "Błąd"; }
    
    echo "<div id='wynik'>Wynik: $wynik</div>";
}

//4. MAKS
function maks($a, $b, $c) {
    $max = $a;
    if ($b > $max) { $max = $b; }
    if ($c > $max) { $max = $c; }
    return "Największa liczba to: $max";
}

//5. WZROST
function wzrost($cm) {
    if ($cm < 150) {
        return "niski";
    } elseif ($cm > 180) {
        return "wysoki";
    } else {
        return "średni";
    }
}

//6. BMI
function bmi($wzrostCm, $wagaKg) {
    $wzrostM = $wzrostCm / 100;
    $wynikBmi = $wagaKg / ($wzrostM * $wzrostM);
    $komunikat = "";
    
    if ($wynikBmi < 18.5) {
        $komunikat = "za mało!";
    } elseif ($wynikBmi > 25) {
        $komunikat = "za dużo!";
    } else {
        $komunikat = "OK!";
    }
    
    echo "<div id='wynik'>BMI: " . round($wynikBmi, 2) . " - $komunikat</div>";
}

//7. STARSZY
function starszy($data1, $data2) {
    if ($data1 < $data2) {
        return "Pierwsza osoba jest starsza";
    } elseif ($data1 > $data2) {
        return "Druga osoba jest starsza";
    } else {
        return "Ten sam wiek";
    }
}

//8. PRZESTĘPNY
function przestepny($rok) {
    if (($rok % 4 == 0 && $rok % 100 != 0) || ($rok % 400 == 0)) {
        return "Rok jest przestępny";
    } else {
        return "Rok nie jest przestępny";
    }
}

//9. SIŁA
function silaHasla($haslo) {
    if (strlen($haslo) <= 4) {
        return "Hasło słabe";
    }
    
    $cyfra = preg_match('/[0-9]/', $haslo);
    $duza = preg_match('/[A-Z]/', $haslo);
    $mala = preg_match('/[a-z]/', $haslo);
    $specjalny = preg_match('/[^a-zA-Z0-9]/', $haslo);

    if (!$cyfra || !$duza || !$mala || !$specjalny) {
        return "Hasło słabe";
    }
    
    if (strlen($haslo) < 8) {
        return "Hasło średnie";
    } else {
        return "Hasło mocne";
    }
}

//10. TROJKAT
function trojkat($a, $b, $c) {
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        return "Da się utworzyć trójkąt";
    } else {
        return "Nie da się utworzyć trójkąta";
    }
}

//11. SZYFR
function szyfr($tekst) {
    $zaszyfrowany = "";
    for ($i = 0; $i < strlen($tekst); $i++) {
        $kod = ord($tekst[$i]);
        if ($kod >= 97 && $kod <= 122) {
            $kod = 97 + ($kod - 97 + 2) % 26;
        } elseif ($kod >= 65 && $kod <= 90) {
            $kod = 65 + ($kod - 65 + 2) % 26;
        }
        $zaszyfrowany .= chr($kod);
    }
    return $zaszyfrowany;
}
?>