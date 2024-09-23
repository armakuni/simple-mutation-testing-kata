# Simple Mutation Testing Kata - PHP

This is a PHP implementation of the Simple Mutation Testing Kata.

Prerequizites 

Coverage needs to be generated but no code coverage generator (pcov, phpdbg or xdebug) has been detected.

1. Run Unit tests to ensure all tests are currently passing `./vendor/bin/phpunit`
2. Run Go MuTesting to discover how many mutants escape `./vendor/bin/infection` you should see this output
3. First look at the mutants that escape from the Maths package use the output from gremlins to find the bugs and missing tests. Add the missing test(s) to drive out the bug fix
4. Run Go MuTesting to discover how many mutants escape `./vendor/bin/infection` you should see number of escaped mutants has gone down