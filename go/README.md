# Simple Mutation Testing Kata - Go

This is a golang implementation of the Simple Mutation Testing Kata.

The instruction for this kata will use [Go MuTesting](https://github.com/avito-tech/go-mutesting) as it can be 
installed as a module making it easier to ensure the kata always work. If wish to use [Go Gremlins](https://gremlins.dev/) 
or another Mutation Testing Framework there should be nothing stopping you.

1. Run Unit test to ensure all tests are currently passing `go test ./...`
2. Install go-mutesting `go get -t -v github.com/avito-tech/go-mutesting/...`
3. Run Go MuTesting to discover how many mutants escape `go-mutesting ./...` you should see this output
4. First look at the mutants that escape from the maths package use the output from gremlins to find the bugs and missing tests. Add the missing test(s) to drive out the bug fix
5. Run Go MuTesting to discover how many mutants escape `go-mutesting ./...` you should see number of escaped mutants has gone down