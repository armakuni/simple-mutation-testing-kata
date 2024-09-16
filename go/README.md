# Simple Mutation Testing Kata - Go

This is a golang implementation of the Simple Mutation Testing Kata.

This instruction for this kata will use [Go Gremlins](https://gremlins.dev/) but if you prefere to use 
[Go MuTesting](https://github.com/avito-tech/go-mutesting) there should be nothing stopping you.

1. Install [Go Gremlins](https://gremlins.dev/latest/install/)
2. Run Unit test to ensure all tests are currently passing `go test -r ./...`
3. Run Go Gremlins to discover how many mutants escape `gremlins unleash` you should see this output
4. First look at the mutants that escape from the maths package use the output from gremlins to find the bugs and missing tests. Add the missing test(s) to drive out the bug fix