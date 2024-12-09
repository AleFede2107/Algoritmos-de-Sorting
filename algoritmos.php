<?php

// Problema de Ordenar Lista con Bubble Sort
function bubbleSortDesc(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Intercambiar
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

$list1 = [3, -1, 4, 0, -5, 9, 3];
echo "Lista original (Bubble Sort): ". implode(", ", $list1) . "\n";
bubbleSortDesc($list1);
echo "Lista ordenada (descendente): ". implode(", ", $list1) . "\n\n";

// Problema de Ordenar Lista con Merge Sort
function mergeSort(&$arr) {
    if (count($arr) <= 1) return;

    $mid = count($arr) / 2;
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    mergeSort($left);
    mergeSort($right);

    $arr = merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $i = $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) <= 0) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < count($left)) $result[] = $left[$i++];
    while ($j < count($right)) $result[] = $right[$j++];

    return $result;
}

$list2 = ["manzana", "pera", "naranja", "uva", "platano", "durazno"];
echo "Lista original (Merge Sort): ". implode(", ", $list2) . "\n";
mergeSort($list2);
echo "Lista ordenada (alfabéticamente): ". implode(", ", $list2) . "\n\n";

// Problema de Ordenar Lista con Insertion Sort
function insertionSort(&$arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 && strcasecmp($arr[$j], $key) > 0) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
}

$list3 = ["Carlos", "Ana", "Juan", "Beatriz", "Zara", "Daniel"];
echo "Lista original (Insertion Sort): ". implode(", ", $list3) . "\n";
insertionSort($list3);
echo "Lista ordenada (alfabéticamente): ". implode(", ", $list3) . "\n";

?>