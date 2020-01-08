# chuckcms-template-colorlib-ideal

1. Install the theme:

``` composer require chuckbe/chuckcms-template-colorlib-ideal ```

2. Publish the theme:

``` php artisan chuckcms-template-colorlib-ideal:publish ```

3. Publish public assets:

``` php artisan vendor:publish --tag=chuckcms-template-colorlib-ideal-public --force ``` 

4. Change color in /scss/bootstrap/_variables.scss and re-compile css

```
sass public/chuckbe/chuckcms-template-colorlib-ideal/scss/bootstrap/bootstrap.scss public/chuckbe/chuckcms-template-colorlib-ideal/css/bootstrap.min.css --style compressed
sass public/chuckbe/chuckcms-template-colorlib-ideal/scss/style.scss public/chuckbe/chuckcms-template-colorlib-ideal/css/style.css
```

### License 

Theme is licensed under MIT license © 2020 - Chuck