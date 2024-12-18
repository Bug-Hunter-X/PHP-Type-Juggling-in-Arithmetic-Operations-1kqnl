# PHP Type Juggling Bug

This repository demonstrates a common error in PHP related to type juggling. When performing arithmetic operations, PHP's loose typing system can lead to unexpected behavior if you mix different data types (e.g., integers and strings). 

The `bug.php` file contains the buggy code, while `bugSolution.php` provides a corrected version.  The bug is described in the associated JSON file.

## How to Reproduce

1. Clone the repository.
2. Run `php bug.php` to see the unexpected output.
3. Run `php bugSolution.php` to observe the correct behavior. 
