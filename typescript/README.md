# Simple Mutation Testing Kata - Typescript

This is a typescript implementation of the Simple Mutation Testing Kata.

This instruction for this kata will use
[Stryker](https://stryker-mutator.io/docs/stryker-js/introduction/).

1.  Run Unit test to ensure all tests are currently passing `npm test`
2.  Run Stryker to discover how many mutants escape `npx stryker run`
    you should see this output
3.  First look at the mutants that escape from the maths package use the
    output from Stryker to find the bugs and missing tests. Add the
    missing test(s) to drive out the bug fix
4.  Run Stryker to discover how many mutants escape `npx stryker run`
    you should see number of escaped mutants has gone down
