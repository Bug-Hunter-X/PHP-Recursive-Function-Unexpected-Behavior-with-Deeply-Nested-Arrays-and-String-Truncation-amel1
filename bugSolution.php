```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $newData[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strlen($value) > 10) {
      $newData[$key] = substr($value, 0, 10);
    } else {
      $newData[$key] = $value;
    }
  }
  return $newData;
}

$dataset = [
  "a very long string that exceeds the limit",
  ["another long string", 123],
  ["short", ["another very long string that exceeds the limit"]]
];

$processedData = processData($dataset);
print_r($processedData); //Prints correctly without changing original array
print_r($dataset); //Prints original unchanged array
```