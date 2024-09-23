# Simple Mutation Testing Kata - Java

This is a Java implementation of the Simple Mutation Testing Kata.

The instruction for this kata will use [Go MuTesting](https://github.com/avito-tech/go-mutesting) as it can be
installed as a module making it easier to ensure the kata always work. If wish to use [Go Gremlins](https://gremlins.dev/)
or another Mutation Testing Framework there should be nothing stopping you.

1. Run Unit tests to ensure all tests are currently passing `mvn clean test`
2. Run PITest to discover how many mutants escape `mvn test-compile org.pitest:pitest-maven:mutationCoverage` you should see this output
3. First look at the mutants that escape from the maths package use the output from gremlins to find the bugs and missing tests. Add the missing test(s) to drive out the bug fix
4. Run Go PITest to discover how many mutants escape `mvn test-compile org.pitest:pitest-maven:mutationCoverage` you should see number of escaped mutants has gone down

