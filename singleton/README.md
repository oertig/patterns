# Singleton

## What is a singleton?

A singleton enforces that there can only ever be one instance of the defined class. This is useful to control access to shared resources (log file, database connection). A singleton basically acts as a tighter controlled global variable.

## How to create a singleton

- Make the default constructor private
- Create a public static method that calls the constructor if necessary, and returns the instance of the class.

## Notes

- It is not required, but recommended to make a singleton final.
- In multi-threded environments, it is possible to create multiple singletons. You should implement special code in your constructor to prevent this.
