### Steps
1. Install uv:

    ```
    curl -LsSf https://astral.sh/uv/install.sh | sh
    ```

2. You need a config for the modules you want to mutate:
    
    - First install `cosmic-ray`:

        ```
        uv add cosmic-ray
        ```
    - Create config:
        ```
        cosmic-ray new-config mutation-config.toml
        ```

3. Init Session:
    ```
    cosmic-ray init mutation-config.toml mutation.sqlite
    ```
    - running init command again will reset the db and you can again start from scratch
    - `mutation.sqlite` is used to store all possible mutants to test your code against

4. Wait, does your test suite pass in the absense of any mutation on the code under test?. Use the `baseline` command to check that the test suite passes on unmutated code:
    ```
    cosmic-ray --verbosity=INFO baseline mutation-config.toml
    ```

    Ensure you get something like this in the command output:

    ```diff
    + INFO:root:Baseline passed. Execution with no mutation works fine.
    ```

5. Lets see how many mutants cosmic-ray will introduce in the code under test:
    ```
    cr-report mutation.sqlite --show-pending
    ```

    You should see the output like so:

    ```diff
    + total jobs: <JOB_COUNT>
    ```

    `JOB_COUNT` in the above output is the number of mutants cosmic-rays will introduce.

6. You're now ready to mutate your code. Time to verify if your test suite is actually testing all of the parts of code that it needs to, and that it is doing so in a meaningful way. Remember: If a mutant survives, kill it!. To kill, you need to add more tests and/or improve the quality of your existing tests OR maybe you got code you don't actually need? time to refactor!

    ```
    cosmic-ray exec mutation-config.toml mutation.sqlite
    ```
    the above command does not return any output.

    you can run the `cr-report` command again to get the report about total jobs, complete mutation jobs, and surviving mutants count that need to be killed. You should see the output like so:

    ```diff
    + total jobs: 8
    + complete: 8 (100.00%)
    + surviving mutants: 8 (100.00%)
    ```

7. Use `cr-html` command to get report in html for more visual output:
    ```
    cr-html mutation.sqlite > report.html
    ```
