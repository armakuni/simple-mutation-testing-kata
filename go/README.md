# Simple Mutation Testing Kata - Go

This is a golang implementation of the Simple Mutation Testing Kata.

This instruction for this kata will use [Go MuTesting](https://github.com/avito-tech/go-mutesting) as it can be 
installed as a module making it easier to ensure the kata always work. If wish to use [Go Gremlins](https://gremlins.dev/) 
there should be nothing stopping you.

1. Run Unit test to ensure all tests are currently passing `go test -r ./...`
2. Run Go MuTesting to discover how many mutants escape `go-mutesting ./...` you should see this output
3. First look at the mutants that escape from the maths package use the output from gremlins to find the bugs and missing tests. Add the missing test(s) to drive out the bug fix
4. Run Go MuTesting to discover how many mutants escape `go-mutesting ./...` you should see number of escaped mutants has gone down