# Luke.Wonde

This is a web application designed to use Wonde resources to get class and student information for a given employee.

### How to set up

Valet is my preferred hosting method locally, but you can use whatever your preference is. For the sake of simplicity, I'll write these
instructions to run the project using `artisan serve`

1. Clone the repository
2. Create your database
3. Copy .env.example to .env
4. Put your database credentials in your .env
5. `composer install`
6. `php artisan migrate`
7. `php artisan key:gen`
8. Fill in your `SCHOOL_ID`, `BEARER_TOKEN` and `WONDE_API_URL` in the .env file *
9. `yarn install`
10. `yarn run dev`
11. `php artisan serve`

*Your WONDE_API_URL is `https://api.wonde.com/v1.0`. Naturally, this would normally be secret (even though it's public knowledge anyway via the api docs). But I'm giving the info away here
for demonstration purposes.

At this point you need to register an account. You can use any email and name that you like, we will connect with our Wonde account afterwards.

Once you log in, you will be met with this homepage:

![Screenshot 2022-08-26 at 08 38 10](https://user-images.githubusercontent.com/10943310/186849083-e3dc23c9-f152-4600-94dc-66295d73ac45.png)

You will need to grab the ID on an employee via the Wonde API. This would preferrably be an employee that has classes.

In a real life project I would probably have a seperate column handle this link, for example a secure_key column. But for the sake of this project, this is what I went with.

![Screenshot 2022-08-26 at 08 30 02](https://user-images.githubusercontent.com/10943310/186849138-b70c43b1-a279-42b1-92ee-8041866bf0be.png)

The key you want is the ID in the picture above.

Copy and Paste that into the input field and click save.

Go to your classes.

If you have any questions about any of this at all, please feel free to shoot me an email or give me a call.
