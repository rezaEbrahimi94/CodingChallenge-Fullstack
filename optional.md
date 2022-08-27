**Optional task**

As an optional task you are asked to define the schema you would use to store the provided, hardcoded metadata in a database.

Other than defining the schema, it is important to explain the rationale behind your choice.

You are not required to implement your solution although it would be a big bonus.

Use this space to write your solution:

```
Instead of losing insert function in a loop.I used Laravel seeder function I create shelves and for each shelf I create some books.

 factory(Shelf::class, 5)->create()->each(function ($u) {
            $u->books()->saveMany(factory(Book::class,10)->make());
        });

```