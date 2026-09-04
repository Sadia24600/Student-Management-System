<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-5 mt-5 border shadow rounded">
        <h1 class="display-2 fw-bold">Student Form</h1>
        <form action="/studentform" method="post">
            @csrf
            <div class="form-group mt-3">
                <label for="name" class="form-label fw-bold">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group mt-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group mt-3">
                <label for="age" class="form-label fw-bold">Age</label>
                <input type="number" class="form-control" name="age" placeholder="Enter your age">
            </div>
            <div class="form-group mt-3">
                <label for="course" class="form-label fw-bold">Course</label>
                <input type="text" class="form-control" name="course" placeholder="Enter your course">
            </div>
            <button type="submit" class="btn btn-sm btn-primary mt-3">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>