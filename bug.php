```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strlen($value) > 10) {
      $data[$key] = substr($value, 0, 10); // Truncate strings longer than 10 characters
    }
  }
  return $data;
}

$dataset = [
  "a very long string that exceeds the limit",
  ["another long string", 123],
  ["short", ["another very long string that exceeds the limit"]]
];

$processedData = processData($dataset);
print_r($processedData);
```