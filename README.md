# Composer package that provides a service for retrieving users via a remote API: 

Simple Composer package that provides a service for retrieving users via a remote API (integrate with the
https://reqres.in/ dummy API. The package provides the following services: 

- A method to retrieve a single user by ID
- A method to retrieve a paginated list of users
- The service converts the returned data to a simple, JSON serializable user model for
consumption by the user of the package.

## Installation

1 - Clone this repo

2 - Install required dependencies using `composer`:

```
$ composer install
```

## Usage

- Open the project in your local dev environment 
- Uncomment the following line: $users = $api->getUsers($page); to retrieve a paginated list of users

## Sample Output:

![Screenshot 2022-07-26 at 15 23 17](https://user-images.githubusercontent.com/42435299/181030182-7eac0412-3226-4ba4-918a-c6ea42420133.png)

0r 
- Uncomment the following line: $user = $api->getUser(3); A method to retrieve a single user by ID
## Sample Output:
![Screenshot 2022-07-26 at 15 29 02](https://user-images.githubusercontent.com/42435299/181032761-41788c4a-18c7-4bb9-81aa-6aed0bdbc92d.png)
