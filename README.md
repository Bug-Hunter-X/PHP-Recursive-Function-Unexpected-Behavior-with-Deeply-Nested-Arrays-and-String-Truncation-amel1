# PHP Recursive Function Bug

This repository demonstrates a bug in a PHP recursive function that processes nested arrays and truncates long strings. The function unexpectedly modifies the original array, which can lead to unintended consequences if the original array is used elsewhere in the application.

The `bug.php` file contains the buggy code, while `bugSolution.php` offers a corrected version.

## Bug Description
The `processData` function recursively traverses a nested array.  If a string element exceeds 10 characters, it's truncated.  However, due to pass-by-reference behavior in PHP's `foreach` loop, the original array is modified. This can be problematic if the original array is still needed later.

## Solution
The corrected version creates a copy of the array within the function, preventing unintended modification of the original dataset.