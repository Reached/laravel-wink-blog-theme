# A barebones Laravel Wink boilerplate/theme

## Demo

You can check out the repository by visiting my website here: https://caspersorensen.com.

## Installation
Clone the repo to your desired destination. Then run `composer install` to install the dependencies.
After doing this, you should install Laravel Wink by running `php artisan wink:install`. 

Create your .env file from the .env.example and set the wink database connection `WINK_DB_CONNECTION=` to your desired value (I just use the default `mysql` connection), make sure to also
generate an app key with `php artisan key:generate`.

Create a database with the name you specified in your .env file, then run `php artisan wink:migrate` to migrate.

Use the provided credentials to log into wink (endpoint: /wink) - you can always create another user once you have successfully logged into Wink.

##### Optional

If you want to use images in your blog posts, make sure your image directory is setup correctly, run this command
`php artisan storage:link` to generate a symbolic link to your public folder. 

### Google Analytics

The blog comes with Google Analytics that is ready to use out of the box. If you do not wish to use it, feel free to remove it from the `app.blade.php` layout template.

### Assets

The styling of the blog is based on Tailwind CSS, with a small bit of CSS added inside the app.scss file. There is no Javascript
used out of the box, but feel free to add enhancements if you feel like it.

Install the assets by running `npm install` and then run `npm run dev` or `npm run watch` when developing locally. For production
you should use `npm run production` to minify the assets and purge unused Tailwind classes.

## Contributions
All kinds of contributions are very welcome and highly encouraged! Be sure to read our guidelines before interacting with the repository however.
