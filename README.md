# API

The API will be here.

Refer to the [Getting Started Guide](https://api-platform.com/docs/distribution) for more information.

## Register user
```
POST /register?email=EMAIL&password=PASSWORD
```

## Login
```
 POST /login
```

```
JSON Body:

{
  "email":"test@test.ru",
  "password":"passworf"
  
}
```

## Create user profile
```
POST: /api/user_profiles
```

```
{
"name": "ttester", 
"organization": "test", 
"avatar" : "test",
"ownerId": "api/users/3"
}
```

## Update user profile
```
/api/user_profiles/USER_ID
```

```
{
"name": "ttester12312", 
"organization": "test", 
"avatar" : "testwwwww"
}
```