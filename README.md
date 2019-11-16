# API

The API will be here.

Refer to the [Getting Started Guide](https://api-platform.com/docs/distribution) for more information.

## Register user
```
POST https://api.tikhonov.im/register?email=EMAIL&password=PASSWORD
```

## Login
```
 POST https://api.tikhonov.im/login:
JSON Body:

{
  "email":"test@test.ru",
  "password":"passworf"
  
}
```

## Create user profile
POST: /api/user_profiles

```
{
"name": "ttester", 
"organization": "test", 
"avatar" : "test",
"ownerId": "api/users/3"
}
```