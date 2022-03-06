<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form method="post" action="{{url('usuario/insert')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">name address</label>
            <input name='name' type="name" class="form-control" id="name" placeholder="Enter name">
          </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input name='email' type="email" class="form-control" id="email" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input name='password' type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <input type="submit" value="Enviar" id='submit' class="btn btn-success mt-3">
      </form>
</body>
</html>