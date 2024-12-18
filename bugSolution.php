```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) { //Check if it's numeric
      $sum += (int)$number; //Type casting for consistency 
    } else {
      // Handle non-numeric values appropriately
      // For example, log an error or throw an exception
      error_log('Non-numeric value encountered in calculateSum');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Output: Sum: 10
```