# Register

- [Register](#register)
- [Login](#login)
- [Home](#home)
- [Logout](#logout)
## Register
Here is a register page. Must be fill all input field `name`,`email`, and `password`. Show error message if something is missing. After register, this result is saved to `users` table of database and redirect to home page.
    
![Register Image](./images/register.png)

## login

Here is a login page.When email and password is equal to the results from `users` table, redirect to home page. It should not access after logged in. Show error message if email or password is incorrect. 

![Login Image](./images/login.png)


## Home

Here is home page. It can be access after logged in. It should not access without logged in.

![Home Image](./images/home.png)

## Logout

Logout and redirect to login page.
