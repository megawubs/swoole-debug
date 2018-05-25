Steps to reproduce:

1. create two databases named `test_1` and `test_2`
2. run the migrations
3. in your .env change `DB_DATABASE=test_1` to `DB_DATABASE=test_2`
4. run migrations again
5. Manually add data to both tables (or leave one empty)
6. start swoole
7. navigate to http://127.0.0.1:1215/1
8. navigate to http://127.0.0.1:1215/2
