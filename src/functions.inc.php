<?php
function parseItems($itemsRaw) {
  $trimmed = trim($itemsRaw);
  if ($trimmed === "") {
    return array();
  }

  $parts = explode(",", $trimmed);
  $parts = array_map(function($part) {
    return trim((string)$part);
  }, $parts);

  return $parts;
}

function getTotalEmptyIPs($items) {
  $total_empty_ips = 0;

  foreach ($items as $item) {
    if (trim((string)$item) === "") {
      $total_empty_ips += 1;
    }
  }

  return $total_empty_ips;
}
